# Evva\AirKey\HolidayCalendarsApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createHolidayCalendarSlot()**](HolidayCalendarsApi.md#createHolidayCalendarSlot) | **POST** /v1/holiday-calendars/{holidayCalendarId}/slots | Adds a new holiday calendar slot to the holiday calendar. |
| [**deleteHolidayCalendarSlot()**](HolidayCalendarsApi.md#deleteHolidayCalendarSlot) | **DELETE** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Deletes provided holiday calendar slot. |
| [**getHolidayCalendar()**](HolidayCalendarsApi.md#getHolidayCalendar) | **GET** /v1/holiday-calendars/{holidayCalendarId} | Gets a specific holiday calendar. |
| [**getHolidayCalendarSlot()**](HolidayCalendarsApi.md#getHolidayCalendarSlot) | **GET** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Gets a specific holiday calendar slot. |
| [**getHolidayCalendars()**](HolidayCalendarsApi.md#getHolidayCalendars) | **GET** /v1/holiday-calendars | Gets all holiday calendars. |
| [**getLocksByCalendarId()**](HolidayCalendarsApi.md#getLocksByCalendarId) | **GET** /v1/holiday-calendars/{holidayCalendarId}/locks | Gets all locks using the holiday calendar. |
| [**updateHolidayCalendar()**](HolidayCalendarsApi.md#updateHolidayCalendar) | **PUT** /v1/holiday-calendars/{holidayCalendarId} | Activates or deactivates the holiday calendar. |
| [**updateHolidayCalendarSlot()**](HolidayCalendarsApi.md#updateHolidayCalendarSlot) | **PUT** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Updates a holiday calendar slot of the holiday calendar. |


## `createHolidayCalendarSlot()`

```php
createHolidayCalendarSlot($holidayCalendarId, $body): \Evva\AirKey\Model\HolidayCalendar
```

Adds a new holiday calendar slot to the holiday calendar.

Creates and adds the holiday calendar slot to the provided holiday calendar and returns the updated holiday calendar object version. In case of a series definition in the given holiday calendar slot, more than one holiday calendar slots could be created. To retrieve the newly created slots from the returned calendar, they can be filtered based on given slot name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayCalendarId = 56; // int | Unique identifier of the holiday calendar with which the holiday calendar slot should be associated
$body = new \Evva\AirKey\Model\HolidayCalendarSlotCreate(); // \Evva\AirKey\Model\HolidayCalendarSlotCreate | Holiday calendar slot to be added

try {
    $result = $apiInstance->createHolidayCalendarSlot($holidayCalendarId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->createHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holidayCalendarId** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot should be associated | |
| **body** | [**\Evva\AirKey\Model\HolidayCalendarSlotCreate**](../Model/HolidayCalendarSlotCreate.md)| Holiday calendar slot to be added | |

### Return type

[**\Evva\AirKey\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHolidayCalendarSlot()`

```php
deleteHolidayCalendarSlot($holidayCalendarId, $holidayCalendarSlotId, $body): \Evva\AirKey\Model\HolidayCalendar
```

Deletes provided holiday calendar slot.

Deletes the provided holiday calendar slot and returns the new holiday calendar object version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayCalendarId = 56; // int | Unique identifier of the holiday calendar with which the holiday calendar slot is associated
$holidayCalendarSlotId = 56; // int | Unique identifier of the holiday calendar slot to be deleted
$body = new \Evva\AirKey\Model\HolidayCalendarSlotDelete(); // \Evva\AirKey\Model\HolidayCalendarSlotDelete | Holiday calendar slot to be deleted

try {
    $result = $apiInstance->deleteHolidayCalendarSlot($holidayCalendarId, $holidayCalendarSlotId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->deleteHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holidayCalendarId** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot is associated | |
| **holidayCalendarSlotId** | **int**| Unique identifier of the holiday calendar slot to be deleted | |
| **body** | [**\Evva\AirKey\Model\HolidayCalendarSlotDelete**](../Model/HolidayCalendarSlotDelete.md)| Holiday calendar slot to be deleted | |

### Return type

[**\Evva\AirKey\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHolidayCalendar()`

```php
getHolidayCalendar($holidayCalendarId): \Evva\AirKey\Model\HolidayCalendar
```

Gets a specific holiday calendar.

Returns information about a specific holiday calendar defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayCalendarId = 56; // int | Unique identifier of the holiday calendar

try {
    $result = $apiInstance->getHolidayCalendar($holidayCalendarId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getHolidayCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holidayCalendarId** | **int**| Unique identifier of the holiday calendar | |

### Return type

[**\Evva\AirKey\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHolidayCalendarSlot()`

```php
getHolidayCalendarSlot($holidayCalendarId, $holidayCalendarSlotId): \Evva\AirKey\Model\HolidayCalendarSlot
```

Gets a specific holiday calendar slot.

Returns information about a specific holiday calendar slot of the holiday calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayCalendarId = 56; // int | Unique identifier of the holiday calendar with which the holiday calendar slot is associated
$holidayCalendarSlotId = 56; // int | Unique identifier of the holiday calendar slot

try {
    $result = $apiInstance->getHolidayCalendarSlot($holidayCalendarId, $holidayCalendarSlotId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holidayCalendarId** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot is associated | |
| **holidayCalendarSlotId** | **int**| Unique identifier of the holiday calendar slot | |

### Return type

[**\Evva\AirKey\Model\HolidayCalendarSlot**](../Model/HolidayCalendarSlot.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHolidayCalendars()`

```php
getHolidayCalendars(): \Evva\AirKey\Model\HolidayCalendarList
```

Gets all holiday calendars.

Returns all available holiday calendars defined in the access control system, sorted by holiday calendar id in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHolidayCalendars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getHolidayCalendars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Evva\AirKey\Model\HolidayCalendarList**](../Model/HolidayCalendarList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocksByCalendarId()`

```php
getLocksByCalendarId($holidayCalendarId, $offset, $limit): \Evva\AirKey\Model\LockPagingList
```

Gets all locks using the holiday calendar.

Returns a list of all locks that are currently using the provided holiday calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayCalendarId = 56; // int | Unique identifier of the holiday calendar
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getLocksByCalendarId($holidayCalendarId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getLocksByCalendarId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holidayCalendarId** | **int**| Unique identifier of the holiday calendar | |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |

### Return type

[**\Evva\AirKey\Model\LockPagingList**](../Model/LockPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHolidayCalendar()`

```php
updateHolidayCalendar($holidayCalendarId, $body): \Evva\AirKey\Model\HolidayCalendar
```

Activates or deactivates the holiday calendar.

Set the active flag within the HolidayCalendar model (body) to your desired value to activate or deactivate the holiday calendar. This is the only supported operation. Returns the updated holiday calendar object version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayCalendarId = 56; // int | Unique identifier of the holiday calendar to be activated/deactivated
$body = new \Evva\AirKey\Model\HolidayCalendar(); // \Evva\AirKey\Model\HolidayCalendar | Holiday calendar to be activated/deactivated

try {
    $result = $apiInstance->updateHolidayCalendar($holidayCalendarId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->updateHolidayCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holidayCalendarId** | **int**| Unique identifier of the holiday calendar to be activated/deactivated | |
| **body** | [**\Evva\AirKey\Model\HolidayCalendar**](../Model/HolidayCalendar.md)| Holiday calendar to be activated/deactivated | |

### Return type

[**\Evva\AirKey\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHolidayCalendarSlot()`

```php
updateHolidayCalendarSlot($holidayCalendarId, $holidayCalendarSlotId, $body): \Evva\AirKey\Model\HolidayCalendar
```

Updates a holiday calendar slot of the holiday calendar.

Updates the provided holiday calendar slot and returns the new holiday calendar object version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayCalendarId = 56; // int | Unique identifier of the holiday calendar with which the holiday calendar slot is associated
$holidayCalendarSlotId = 56; // int | Unique identifier of the holiday calendar slot to be updated
$body = new \Evva\AirKey\Model\HolidayCalendarSlotUpdate(); // \Evva\AirKey\Model\HolidayCalendarSlotUpdate | Holiday calendar slot to be updated

try {
    $result = $apiInstance->updateHolidayCalendarSlot($holidayCalendarId, $holidayCalendarSlotId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->updateHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **holidayCalendarId** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot is associated | |
| **holidayCalendarSlotId** | **int**| Unique identifier of the holiday calendar slot to be updated | |
| **body** | [**\Evva\AirKey\Model\HolidayCalendarSlotUpdate**](../Model/HolidayCalendarSlotUpdate.md)| Holiday calendar slot to be updated | |

### Return type

[**\Evva\AirKey\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
