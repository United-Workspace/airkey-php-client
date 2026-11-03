# Evva\AirKey\PublicMgmtApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**resetTestData()**](PublicMgmtApi.md#resetTestData) | **POST** /v1/public-mgmt/reset-test-data | Resets test data in the integration environment. |


## `resetTestData()`

```php
resetTestData()
```

Resets test data in the integration environment.

Resets the test data for the customer generated in the integration environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\PublicMgmtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->resetTestData();
} catch (Exception $e) {
    echo 'Exception when calling PublicMgmtApi->resetTestData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
