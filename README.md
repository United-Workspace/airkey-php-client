# EVVA AirKey PHP SDK

PHP SDK for the [EVVA AirKey Cloud API](https://airkey.evva.com). This library provides a convenient way to integrate AirKey's electronic locking system into your PHP applications.

> [!NOTE]
> This is a community-generated SDK for easier consumption of the EVVA AirKey API and is not an official product of EVVA.

## Features

- **Full API Coverage**: Access all AirKey Cloud API endpoints including Locks, Media, Persons, and Authorizations.
- **Modern PHP**: Built for PHP 8.0+ with modern dependencies like Guzzle 7.
- **Automated Updates**: The library is regularly updated to stay in sync with the latest AirKey API specifications.

## Installation

Since this package is not published to Packagist, you need to add this repository to your `composer.json` before requiring it:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/United-Workspace/airkey-php-client.git"
        }
    ],
    "require": {
        "sleevesup/evva-airkey-api": "^18.0"
    }
}
```

Then run:

```bash
composer update sleevesup/evva-airkey-api
```

## Getting Started

To use the SDK, you'll need an API Key from your AirKey account.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Evva\AirKey\Configuration;
use Evva\AirKey\Api\LocksApi;
use GuzzleHttp\Client;

// 1. Configure API key authorization
$config = Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');

// 2. Initialize the API instance
$apiInstance = new LocksApi(new Client(), $config);

try {
    // 3. Get all locks
    $result = $apiInstance->getLocks();
    foreach ($result->getLocks() as $lock) {
        echo "Lock: " . $lock->getName() . " (ID: " . $lock->getId() . ")\n";
    }
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getLocks: ', $e->getMessage(), PHP_EOL;
}
```

## Documentation

For a complete list of all available API endpoints, models, and comprehensive usage examples, please refer to the:

👉 **[Detailed API Documentation (API_README.md)](API_README.md)**

## Requirements

- PHP 8.0 or later
- `curl`, `json`, and `mbstring` extensions

## Development & Contribution

This library is automatically generated from the AirKey Swagger specification. 

- For details on how the generation works, see [.generator/README.md](.generator/README.md).
- To run tests: `./vendor/bin/phpunit`

## License

This SDK is provided for consuming the EVVA AirKey API. Please refer to the [EVVA Legal Notice](https://www.evva.com/en/airkey/impressum/) for terms associated with the API usage.

## Support

Developed and maintained by:
- **Sebastian Fuss** (United Workspace GmbH)
- **EVVA AirKey Team**

For more information, please visit [airkey.evva.com](https://airkey.evva.com).


