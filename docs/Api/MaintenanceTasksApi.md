# Evva\AirKey\MaintenanceTasksApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMaintenanceTasks()**](MaintenanceTasksApi.md#getMaintenanceTasks) | **GET** /v1/maintenance-tasks | Gets all maintenance tasks. |


## `getMaintenanceTasks()`

```php
getMaintenanceTasks($lockId, $lockIdentifier, $doorName, $alternativeDoorName, $offset, $limit): \Evva\AirKey\Model\MaintenanceTaskPagingList
```

Gets all maintenance tasks.

Returns a list of all available maintenance tasks of the access control system, sorted by lockId in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MaintenanceTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Filter maintenance tasks by lock id
$lockIdentifier = 'lockIdentifier_example'; // string | Filter maintenance tasks by lock identifier
$doorName = 'doorName_example'; // string | Filter maintenance tasks by door name
$alternativeDoorName = 'alternativeDoorName_example'; // string | Filter maintenance tasks by alternative door name
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getMaintenanceTasks($lockId, $lockIdentifier, $doorName, $alternativeDoorName, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceTasksApi->getMaintenanceTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Filter maintenance tasks by lock id | [optional] |
| **lockIdentifier** | **string**| Filter maintenance tasks by lock identifier | [optional] |
| **doorName** | **string**| Filter maintenance tasks by door name | [optional] |
| **alternativeDoorName** | **string**| Filter maintenance tasks by alternative door name | [optional] |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |

### Return type

[**\Evva\AirKey\Model\MaintenanceTaskPagingList**](../Model/MaintenanceTaskPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
