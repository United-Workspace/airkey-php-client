# AirKey API Client Generator

This folder contains the configuration and scripts used to automatically generate the PHP client library for the AirKey API using the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project.

## How it Works

1.  **Configuration**: `.generator/swagger-config.json` defines the client language (`php`), namespaces (`Evva\AirKey`), and other generator-specific options.
2.  **Selective Extraction**: To prevent the generator from overwriting our custom repository configuration (like `composer.json` and the root `README.md`), our scripts are configured to extract only the core library components:
    -   `lib/`: The generated PHP Models and API classes.
    -   `docs/`: The generated API documentation.
    -   `test/`: The generated unit tests.
3.  **Local Generation**: You can run `.generator/generate-local.sh` to update the library on your local machine.

## GitHub Actions Integration

We have implemented two main workflows to automate the lifecycle of this library:

### 1. Generate AirKey Client (`generate-client.yml`)
This workflow is triggered manually via **workflow_dispatch**.
-   **Function**: It fetches the latest API specification, triggers the code generation, and extracts the code into the root.
-   **Result**: It automatically creates a new branch and a Pull Request for you to review the changes before merging.

### 2. Tag Release (`tag-release.yml`)
This workflow runs automatically whenever a push occurs on the `main` branch.
-   **Function**: It checks the version number in the swagger specification.
-   **Result**: If the version has increased, it automatically creates a corresponding Git tag (e.g., `18.0.10`).

## Repository Setup

To ensure the workflows run successfully, please verify the following in your GitHub repository settings:

1.  **Workflow Permissions**:
    -   Go to **Settings > Actions > General**.
    -   Under **Workflow permissions**, ensure **Read and write permissions** is selected.
    -   Check **Allow GitHub Actions to create and approve pull requests**.
2.  **Branch Protection**:
    -   It is recommended to protect the `main` branch to ensure all code updates are reviewed via the automated Pull Requests.
