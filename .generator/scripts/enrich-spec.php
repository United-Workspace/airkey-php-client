#!/usr/bin/env php
<?php
declare(strict_types=1);

/**
 * AirKey / OpenAPI Spec Enricher
 *
 * Idempotently enriches a Swagger 2.0 / OpenAPI 3.0 specification with:
 * - Missing enum values (deduplicated via set union)
 * - Discriminator mappings & vendor extensions
 * - Schema adjustments
 *
 * Emits informational notices when upstream specifications incorporate
 * previously patched values.
 */

// 1. Parse CLI options
$options = getopt('', [
    'spec::',
    'enrichments::',
    'output::',
    'help::',
]);

if (isset($options['help'])) {
    echo "Usage: php enrich-spec.php [options]\n";
    echo "Options:\n";
    echo "  --spec=<path>         Path to input Swagger/OpenAPI JSON (default: .generator/swagger.json)\n";
    echo "  --enrichments=<path>  Path to enrichments JSON (default: .generator/enrichments.json)\n";
    echo "  --output=<path>       Path to output enriched JSON (default: input spec path)\n";
    exit(0);
}

$specPath = $options['spec'] ?? __DIR__ . '/../swagger.json';
$enrichmentsPath = $options['enrichments'] ?? __DIR__ . '/../enrichments.json';
$outputPath = $options['output'] ?? $specPath;

if (!file_exists($specPath)) {
    fwrite(STDERR, "[ERROR] Spec file not found at: {$specPath}\n");
    exit(1);
}

$specRaw = file_get_contents($specPath);
$spec = json_decode($specRaw, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    fwrite(STDERR, "[ERROR] Failed to parse spec JSON: " . json_last_error_msg() . "\n");
    exit(1);
}

if (!file_exists($enrichmentsPath)) {
    echo "[INFO] No enrichments file found at: {$enrichmentsPath}. Skipping enrichment step.\n";
    exit(0);
}

$enrichmentsRaw = file_get_contents($enrichmentsPath);
$enrichments = json_decode($enrichmentsRaw, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    fwrite(STDERR, "[ERROR] Failed to parse enrichments JSON: " . json_last_error_msg() . "\n");
    exit(1);
}

echo "========================================\n";
echo "   Applying OpenAPI Spec Enrichments    \n";
echo "========================================\n";

// Determine definitions root (Swagger 2.0 'definitions' vs OpenAPI 3.x 'components.schemas')
$isSwagger2 = isset($spec['swagger']);
$schemasKey = $isSwagger2 ? 'definitions' : 'components.schemas';

function &getSchemaRef(array &$spec, bool $isSwagger2, string $model): ?array {
    $null = null;
    if ($isSwagger2) {
        if (!isset($spec['definitions'][$model])) {
            return $null;
        }
        return $spec['definitions'][$model];
    } else {
        if (!isset($spec['components']['schemas'][$model])) {
            return $null;
        }
        return $spec['components']['schemas'][$model];
    }
}

$schemaPrefix = $isSwagger2 ? '#/definitions/' : '#/components/schemas/';

// 2. Apply Enum Additions (Idempotent Set Union)
if (!empty($enrichments['enumAdditions']) && is_array($enrichments['enumAdditions'])) {
    foreach ($enrichments['enumAdditions'] as $modelName => $properties) {
        $modelSchema = &getSchemaRef($spec, $isSwagger2, $modelName);
        if ($modelSchema === null) {
            echo "[WARNING] Model '{$modelName}' not found in specification definitions.\n";
            continue;
        }

        foreach ($properties as $propName => $additions) {
            if (!isset($modelSchema['properties'][$propName])) {
                echo "[WARNING] Property '{$propName}' not found on model '{$modelName}'.\n";
                continue;
            }

            $propSchema = &$modelSchema['properties'][$propName];
            $existingEnums = $propSchema['enum'] ?? [];

            $alreadyPresent = array_intersect($additions, $existingEnums);
            $newAdditions = array_diff($additions, $existingEnums);

            foreach ($alreadyPresent as $val) {
                echo "[INFO] Enum '{$val}' on '{$modelName}.{$propName}' is already present upstream. (Safe: will not duplicate)\n";
            }

            foreach ($newAdditions as $val) {
                echo "[APPLIED] Added missing enum '{$val}' to '{$modelName}.{$propName}'.\n";
            }

            // Perform Set Union
            $propSchema['enum'] = array_values(array_unique(array_merge($existingEnums, $additions)));
        }
    }
}

// 3. Apply Discriminator Mappings & Child Extensions
if (!empty($enrichments['discriminatorMappings']) && is_array($enrichments['discriminatorMappings'])) {
    foreach ($enrichments['discriminatorMappings'] as $parentModel => $mappingConfig) {
        $parentSchema = &getSchemaRef($spec, $isSwagger2, $parentModel);
        if ($parentSchema === null) {
            echo "[WARNING] Parent model '{$parentModel}' not found in specification definitions.\n";
            continue;
        }

        $propName = $mappingConfig['property'] ?? 'type';
        $mapping = $mappingConfig['mapping'] ?? [];

        // Build OpenAPI discriminator object
        $mappingDict = [];
        foreach ($mapping as $discriminatorValue => $childModelName) {
            $mappingDict[$discriminatorValue] = $schemaPrefix . $childModelName;

            // Also attach vendor extension to child model for OpenAPI Generator
            $childSchema = &getSchemaRef($spec, $isSwagger2, $childModelName);
            if ($childSchema !== null) {
                $childSchema['x-discriminator-value'] = $discriminatorValue;
                $childSchema['x-discriminator-field'] = $propName;
            } else {
                echo "[WARNING] Child model '{$childModelName}' referenced in mapping not found.\n";
            }
        }

        $parentSchema['discriminator'] = [
            'propertyName' => $propName,
            'mapping' => $mappingDict,
        ];

        echo "[APPLIED] Configured discriminator mapping for parent model '{$parentModel}' (property: '{$propName}', " . count($mapping) . " mapped subclasses).\n";
    }
}

// 4. Save enriched spec
$encoded = json_encode($spec, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . PHP_EOL;
if (file_put_contents($outputPath, $encoded) === false) {
    fwrite(STDERR, "[ERROR] Failed to write enriched spec to: {$outputPath}\n");
    exit(1);
}

echo "========================================\n";
echo " Enriched specification written to: {$outputPath}\n";
echo "========================================\n";
