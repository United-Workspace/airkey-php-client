# AirKey API Client Generator

This folder contains the configuration, scripts, and specification enrichments used to automatically generate the PHP client SDK library for the EVVA AirKey API using **OpenAPI Generator**.

---

## Architecture Overview

```
.
├── .gitattributes                     # Strips generator/dev files from Packagist releases
├── .openapi-generator-ignore          # Protects manually maintained files (ObjectSerializer.php)
├── .github/workflows/
│   ├── generate-client.yml            # CI workflow: Fetches spec -> Enriches -> Generates SDK -> Opens PR
│   └── tag-release.yml                # CI workflow: Tags release upon merge to main
└── .generator/
    ├── openapi-config.json            # Generator options (namespaces, PHP settings, spec URL)
    ├── enrichments.json               # Declarative enrichments (missing enums, discriminator mappings)
    ├── scripts/
    │   ├── enrich-spec.php            # Standalone PHP enricher script (runs in CI)
    │   └── enrich-spec.js             # Node.js mirror for local use
    ├── generate-local.sh              # Local generator runner (Docker / npx fallback)
    └── swagger.json                   # Reference copy of the upstream API specification
```

---

## 1. Specification Enrichments (`enrichments.json`)

Often, upstream specifications have slight omissions or gaps (e.g. missing enum values from new features, or discriminator subclass mappings).

Instead of making manual commits to generated PHP code after each run:
- Modifications are declared in `.generator/enrichments.json`.
- The enrichment script merges them into the specification **before** code generation.

### Enum Additions (Idempotent Set Union)
Enums declared in `enumAdditions` are merged using set unions (`array_unique`):
* If the upstream AirKey spec adds the enum value in a future release, the enrichment script will safely deduplicate it and emit an `[INFO]` notice.
* It will **never** generate duplicate PHP class constants or cause compilation errors.

### Discriminator Mappings
Configures `discriminator.mapping` and attaches `x-discriminator-value` extensions so that polymorphic responses (e.g., `AuthorizationInfo` resolving to `OneDayAuthorizationInfo`, `Medium` resolving to `Card`/`Phone`) deserialize automatically into their concrete PHP subclasses.

---

## 2. GitHub Actions CI Workflow

No local setup or runtime tools are required. Everything is automated in GitHub Actions:

### Step 1: Generate Client (`.github/workflows/generate-client.yml`)
1. Triggered manually via **Run workflow** (`workflow_dispatch`).
2. Fetches the latest Swagger specification from EVVA.
3. Runs `php .generator/scripts/enrich-spec.php` to apply enrichments.
4. Executes `openapitools/openapi-generator-cli` inside a Docker container.
5. Extracts `lib/`, `docs/`, `test/`, and `API_README.md`.
6. Preserves custom protected files (`lib/ObjectSerializer.php`).
7. Validates composer consistency (`composer validate`).
8. Pushes a new branch and automatically opens a Pull Request with the exact diff for review.

### Step 2: Tag Release (`.github/workflows/tag-release.yml`)
1. Runs automatically when the Pull Request is merged into `main`.
2. Reads the API version from `.generator/swagger.json`.
3. If the version has increased, pushes a corresponding Git tag (e.g., `v18.0.10`).
4. **Packagist** automatically detects the new tag and publishes the package.

---

## 3. Packagist Distribution Standard

This repository follows standard Composer / Packagist conventions:
- **Root `composer.json`**: Manages package metadata, PSR-4 autoloading (`"Evva\\AirKey\\": "lib/"`), and dependencies.
- **`.gitattributes` with `export-ignore`**: When consumers install this package via `composer require sleevesup/evva-airkey-api`, Composer downloads a clean distribution archive with `.generator/`, `.github/`, and test folders stripped out.

---

## 4. Reusing for Other APIs (Kiwi.ki, SaltoKS)

To replicate this setup in another client repository:
1. Copy `.gitattributes` to the repository root.
2. Copy `.generator/scripts/enrich-spec.php` and `.github/workflows/generate-client.yml`.
3. Customize `.generator/openapi-config.json` with the new provider's `swaggerUrl`, `invokerPackage`, and `packageName`.
4. Define provider-specific enrichments in `.generator/enrichments.json`.
