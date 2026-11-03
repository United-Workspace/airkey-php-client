#!/usr/bin/env node
const fs = require('fs');
const path = require('path');

// Parse CLI options
const args = process.argv.slice(2);
let specPath = path.resolve(__dirname, '../swagger.json');
let enrichmentsPath = path.resolve(__dirname, '../enrichments.json');
let outputPath = specPath;

args.forEach(arg => {
  if (arg.startsWith('--spec=')) specPath = path.resolve(arg.split('=')[1]);
  else if (arg.startsWith('--enrichments=')) enrichmentsPath = path.resolve(arg.split('=')[1]);
  else if (arg.startsWith('--output=')) outputPath = path.resolve(arg.split('=')[1]);
});

if (!fs.existsSync(specPath)) {
  console.error(`[ERROR] Spec file not found at: ${specPath}`);
  process.exit(1);
}

const spec = JSON.parse(fs.readFileSync(specPath, 'utf8'));

if (!fs.existsSync(enrichmentsPath)) {
  console.log(`[INFO] No enrichments file found at: ${enrichmentsPath}. Skipping enrichment step.`);
  process.exit(0);
}

const enrichments = JSON.parse(fs.readFileSync(enrichmentsPath, 'utf8'));

console.log('========================================');
console.log('   Applying OpenAPI Spec Enrichments    ');
console.log('========================================');

const isSwagger2 = !!spec.swagger;
const getSchema = (model) => {
  if (isSwagger2) return spec.definitions?.[model];
  return spec.components?.schemas?.[model];
};

const schemaPrefix = isSwagger2 ? '#/definitions/' : '#/components/schemas/';

// 1. Enum Additions (Idempotent Set Union)
if (enrichments.enumAdditions) {
  for (const [modelName, properties] of Object.entries(enrichments.enumAdditions)) {
    const modelSchema = getSchema(modelName);
    if (!modelSchema) {
      console.warn(`[WARNING] Model '${modelName}' not found in specification definitions.`);
      continue;
    }

    for (const [propName, additions] of Object.entries(properties)) {
      if (!modelSchema.properties?.[propName]) {
        console.warn(`[WARNING] Property '${propName}' not found on model '${modelName}'.`);
        continue;
      }

      const propSchema = modelSchema.properties[propName];
      const existingEnums = propSchema.enum || [];

      additions.forEach(val => {
        if (existingEnums.includes(val)) {
          console.log(`[INFO] Enum '${val}' on '${modelName}.${propName}' is already present upstream. (Safe: will not duplicate)`);
        } else {
          console.log(`[APPLIED] Added missing enum '${val}' to '${modelName}.${propName}'.`);
        }
      });

      // Set Union
      propSchema.enum = Array.from(new Set([...existingEnums, ...additions]));
    }
  }
}

// 2. Discriminator Mappings & Child Extensions
if (enrichments.discriminatorMappings) {
  for (const [parentModel, mappingConfig] of Object.entries(enrichments.discriminatorMappings)) {
    const parentSchema = getSchema(parentModel);
    if (!parentSchema) {
      console.warn(`[WARNING] Parent model '${parentModel}' not found in specification definitions.`);
      continue;
    }

    const propName = mappingConfig.property || 'type';
    const mapping = mappingConfig.mapping || {};

    if (isSwagger2) {
      parentSchema.discriminator = propName;
    } else {
      const mappingDict = {};
      for (const [discVal, childModelName] of Object.entries(mapping)) {
        mappingDict[discVal] = `${schemaPrefix}${childModelName}`;
      }
      parentSchema.discriminator = {
        propertyName: propName,
        mapping: mappingDict,
      };
    }

    for (const [discVal, childModelName] of Object.entries(mapping)) {
      const childSchema = getSchema(childModelName);
      if (childSchema) {
        childSchema['x-discriminator-value'] = discVal;
        childSchema['x-discriminator-field'] = propName;
      } else {
        console.warn(`[WARNING] Child model '${childModelName}' referenced in mapping not found.`);
      }
    }

    console.log(`[APPLIED] Configured discriminator for parent model '${parentModel}' (property: '${propName}', ${Object.keys(mapping).length} mapped subclasses).`);
  }
}

fs.writeFileSync(outputPath, JSON.stringify(spec, null, 2) + '\n');
console.log('========================================');
console.log(` Enriched specification written to: ${outputPath}`);
console.log('========================================');
