# Evva\AirKey\AreasApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getArea()**](AreasApi.md#getArea) | **GET** /v1/areas/{areaId} | Gets a specific area. |
| [**getAreas()**](AreasApi.md#getAreas) | **GET** /v1/areas | Gets all available areas. |


## `getArea()`

```php
getArea($areaId): \Evva\AirKey\Model\Area
```

Gets a specific area.

Returns a specific area defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$areaId = 56; // int | Unique identifier of the area

try {
    $result = $apiInstance->getArea($areaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->getArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **areaId** | **int**| Unique identifier of the area | |

### Return type

[**\Evva\AirKey\Model\Area**](../Model/Area.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAreas()`

```php
getAreas($lockId, $offset, $limit): \Evva\AirKey\Model\AreaPagingList
```

Gets all available areas.

Returns a list of all available areas defined in the access control system, sorted by area id in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Filter areas by lock id
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getAreas($lockId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->getAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Filter areas by lock id | [optional] |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |

### Return type

[**\Evva\AirKey\Model\AreaPagingList**](../Model/AreaPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
