#!/usr/bin/env bash

# Strict mode
set -euo pipefail

echo "========================================"
echo "    Local AirKey API Client Generator   "
echo "========================================"

# Make sure we're in the repository root
cd "$(dirname "$0")/.."

if ! command -v jq &> /dev/null; then
    echo "Error: jq is not installed. Please install jq to continue."
    exit 1
fi

CONFIG_FILE=".generator/openapi-config.json"
SWAGGER_URL=$(jq -r '.swaggerUrl' "$CONFIG_FILE")
GEN_VERSION=$(jq -r '.generatorVersion // "v7.4.0"' "$CONFIG_FILE")

echo "Swagger URL: $SWAGGER_URL"
echo "Generator Version: $GEN_VERSION"
echo ""

# 1. Download upstream spec
echo "Downloading swagger specification..."
curl -s "$SWAGGER_URL" -o .generator/swagger.json

# 2. Enrich spec
echo "Applying spec enrichments..."
if command -v php &> /dev/null; then
    php .generator/scripts/enrich-spec.php \
        --spec=.generator/swagger.json \
        --enrichments=.generator/enrichments.json \
        --output=.generator/swagger.json
elif command -v node &> /dev/null; then
    node .generator/scripts/enrich-spec.js \
        --spec=.generator/swagger.json \
        --enrichments=.generator/enrichments.json \
        --output=.generator/swagger.json
else
    echo "Warning: Neither php nor node found. Skipping spec enrichment."
fi

# 3. Run Generator
echo "Running OpenAPI Generator..."
mkdir -p .generator/generated-client

if docker info >/dev/null 2>&1; then
    echo "Using Docker (openapitools/openapi-generator-cli:${GEN_VERSION})..."
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$PWD:/local" \
        "openapitools/openapi-generator-cli:${GEN_VERSION}" generate \
        -i /local/.generator/swagger.json \
        -g php \
        -c /local/.generator/openapi-config.json \
        -o /local/.generator/generated-client \
        --hide-generation-timestamp
elif command -v npx &> /dev/null; then
    echo "Docker daemon not running. Falling back to npx @openapitools/openapi-generator-cli..."
    npx @openapitools/openapi-generator-cli generate \
        -i .generator/swagger.json \
        -g php \
        -c .generator/openapi-config.json \
        -o .generator/generated-client \
        --hide-generation-timestamp
else
    echo "Error: Neither Docker nor npx is available to run openapi-generator."
    echo "Please run the generator in CI via GitHub Actions or start Docker locally."
    exit 1
fi

# 4. Extract generated files
echo "Extracting generated source files..."
mkdir -p lib docs test
cp -R .generator/generated-client/lib/. lib/ || true
cp -R .generator/generated-client/docs/. docs/ || true
cp -R .generator/generated-client/test/. test/ || true
cp .generator/generated-client/README.md API_README.md || true
rm -rf .generator/generated-client

# 5. Restore protected files
git checkout HEAD -- lib/ObjectSerializer.php 2>/dev/null || true

SWAGGER_VERSION=$(jq -r '.info.version' .generator/swagger.json | tr -d '[:space:]')
echo "Detected Swagger Version: $SWAGGER_VERSION"
echo "========================================"
if [ -z "$(git status --porcelain)" ]; then
    echo "✅ Generation complete. No changes detected — SDK is already up to date."
else
    echo "✅ Generation complete. Changes detected in working tree; review git diff."
fi
echo "========================================"
