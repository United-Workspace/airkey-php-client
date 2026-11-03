# Evva\AirKey\AcosApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdmins()**](AcosApi.md#getAdmins) | **GET** /v1/acos | Gets all access control operators. |
| [**getSupportEnabledAcos()**](AcosApi.md#getSupportEnabledAcos) | **GET** /v1/acos/support | Gets all support logins. |


## `getAdmins()`

```php
getAdmins(): \Evva\AirKey\Model\AcoList
```

Gets all access control operators.

Returns a list of all access control operators defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\AcosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAdmins();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcosApi->getAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Evva\AirKey\Model\AcoList**](../Model/AcoList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportEnabledAcos()`

```php
getSupportEnabledAcos(): \Evva\AirKey\Model\AcoList
```

Gets all support logins.

Returns a list of all support logins defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\AcosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSupportEnabledAcos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcosApi->getSupportEnabledAcos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Evva\AirKey\Model\AcoList**](../Model/AcoList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
