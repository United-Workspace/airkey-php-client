#!/usr/bin/env bash

# Strict mode
set -euo pipefail

echo "========================================"
echo "    Local AirKey API Client Generator   "
echo "========================================"

# Make sure we're in the repository root
cd "$(dirname "$0")/.."

echo "Reading configuration..."
if ! command -v jq &> /dev/null; then
    echo "Error: jq is not installed. Please install jq to continue."
    exit 1
fi

CLIENT_LANGUAGE=$(jq -r '.clientLanguage' .generator/swagger-config.json)
SWAGGER_URL=$(jq -r '.apiPayload.swaggerUrl' .generator/swagger-config.json)

echo "Target Language: $CLIENT_LANGUAGE"
echo "Swagger URL: $SWAGGER_URL"
echo ""

# 1. Trigger API
echo "Requesting code generation from generator.swagger.io..."
RESPONSE=$(curl -s -X POST -H "Content-Type: application/json" \
  -d "$(jq '.apiPayload' .generator/swagger-config.json)" \
  "https://generator.swagger.io/api/gen/clients/${CLIENT_LANGUAGE}")

DOWNLOAD_URL=$(echo "$RESPONSE" | jq -r '.link')

if [ "$DOWNLOAD_URL" == "null" ] || [ -z "$DOWNLOAD_URL" ]; then
    echo "Error: Failed to generate client. API Response:"
    echo "$RESPONSE"
    exit 1
fi

# 2. Download and extract
echo "Downloading generated client wrapper..."
curl -s -o .generator/generated-client.zip "$DOWNLOAD_URL"

echo "Extracting payload into repository root..."
unzip -q -o .generator/generated-client.zip -d .
rm .generator/generated-client.zip

echo "Moving generated source files to repository root..."
mkdir -p lib docs test
cp -R php-client/lib/. lib/ || true
cp -R php-client/docs/. docs/ || true
cp -R php-client/test/. test/ || true
cp php-client/README.md API_README.md || true
rm -rf php-client generated-client.zip

# 3. Download swagger spec
echo "Downloading swagger specification for reference..."
curl -s "$SWAGGER_URL" -o .generator/swagger.json
SWAGGER_VERSION=$(jq -r '.info.version' .generator/swagger.json | tr -d '[:space:]')
echo "Detected Swagger Version: $SWAGGER_VERSION"

echo "========================================"
echo "✅ Generation complete."
echo "You can now review the git diff to see the expected output."
echo "========================================"
