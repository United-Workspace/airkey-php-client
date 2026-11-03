# Evva\AirKey\BlacklistsApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBlacklists()**](BlacklistsApi.md#getBlacklists) | **GET** /v1/blacklists | Gets all available blacklist entries. |


## `getBlacklists()`

```php
getBlacklists($lockId, $mediumId): \Evva\AirKey\Model\BlacklistEntry[]
```

Gets all available blacklist entries.

Returns a list of all available blacklist entries defined in the access control system, sorted by lock id and medium id in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Filter blacklist entries by lock id
$mediumId = 56; // int | Filter blacklist entries by medium id

try {
    $result = $apiInstance->getBlacklists($lockId, $mediumId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->getBlacklists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Filter blacklist entries by lock id | [optional] |
| **mediumId** | **int**| Filter blacklist entries by medium id | [optional] |

### Return type

[**\Evva\AirKey\Model\BlacklistEntry[]**](../Model/BlacklistEntry.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
