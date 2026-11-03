# AirKey API Client Generator

This client SDK is maintained and automatically updated using the centralized [OpenAPI SDK Builder](https://github.com/united-workspace/openapi-sdk-builder) framework.

---

## Architecture Overview

```
.
├── .gitattributes                     # Strips generator/dev files from Packagist releases
├── .openapi-generator-ignore          # Protects manually maintained files (ObjectSerializer.php)
├── .github/workflows/
│   ├── generate-client.yml            # Calls united-workspace/openapi-sdk-builder (weekly & manual)
│   └── tag-release.yml                # Calls united-workspace/openapi-sdk-builder (release tagging)
└── .generator/
    ├── openapi-config.json            # Generator options (namespaces, PHP settings)
    ├── enrichments.json               # Declarative enrichments (missing enums, discriminator mappings)
    ├── generate-local.sh              # Local runner delegating to openapi-sdk-builder
    └── swagger.json                   # Reference copy of the upstream API specification
```

---

## 1. Automated GitHub Actions Workflows

This repository delegates its generation and release tagging entirely to the centralized reusable workflows in `united-workspace/openapi-sdk-builder`:
- **`generate-client.yml`**: Fetches the spec from `https://integration.api.airkey.evva.com/docs/swagger.json`, applies enrichments, executes `openapi-generator-cli`, restores protected files (`lib/ObjectSerializer.php`), validates composer, and opens a pull request.
- **`tag-release.yml`**: Automatically pushes a Git version tag (e.g. `v18.0.14`) when PRs are merged into `main`.

---

## 2. Local Generation

You can run local generation against this repository using either:

```bash
# A. Using the local openapi-sdk-builder CLI:
/path/to/openapi-sdk-builder/bin/generate.sh --target-dir="$PWD" --lang=php

# B. Or run the local helper runner:
./.generator/generate-local.sh
```
