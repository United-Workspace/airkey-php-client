# Evva\AirKey\LocksApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSharedLock()**](LocksApi.md#addSharedLock) | **POST** /v1/locks/add-shared-lock | Redeems a sharing code to add a lock from another access control system. |
| [**assignAreas()**](LocksApi.md#assignAreas) | **POST** /v1/locks/{lockId}/settings/assigned-areas/add | Assigns areas to the specific lock. |
| [**createSharingCode()**](LocksApi.md#createSharingCode) | **POST** /v1/locks/{lockId}/settings/sharing-codes | Creates sharing code for a specific lock. |
| [**deleteSharingCode()**](LocksApi.md#deleteSharingCode) | **DELETE** /v1/locks/{lockId}/settings/sharing-codes/{sharingCodeId} | Removes sharing code from the specific lock. |
| [**getActiveShares()**](LocksApi.md#getActiveShares) | **GET** /v1/locks/{lockId}/settings/active-shares | Returns a list of other access control systems your lock has been shared with. |
| [**getAssignedAreas()**](LocksApi.md#getAssignedAreas) | **GET** /v1/locks/{lockId}/settings/assigned-areas | Gets assigned areas of a specific lock. |
| [**getLock()**](LocksApi.md#getLock) | **GET** /v1/locks/{lockId} | Gets information of a specific lock. |
| [**getLockSettings()**](LocksApi.md#getLockSettings) | **GET** /v1/locks/{lockId}/settings | Gets settings of a specific lock. |
| [**getLocks()**](LocksApi.md#getLocks) | **GET** /v1/locks | Gets information of all locks. |
| [**getSharingCodes()**](LocksApi.md#getSharingCodes) | **GET** /v1/locks/{lockId}/settings/sharing-codes | Returns a list of sharing codes for a specific lock. |
| [**markLockAsToBeRemoved()**](LocksApi.md#markLockAsToBeRemoved) | **POST** /v1/locks/{lockId}/remove | Marks a lock as to be removed. Lock needs to be synchronized to be actually removed. |
| [**removeActiveShares()**](LocksApi.md#removeActiveShares) | **POST** /v1/locks/{lockId}/settings/active-shares/remove | Removes shares for a specific lock. |
| [**unassignAreas()**](LocksApi.md#unassignAreas) | **POST** /v1/locks/{lockId}/settings/assigned-areas/remove | Unassigns areas from the specific lock. |
| [**unmarkLockAsToBeRemoved()**](LocksApi.md#unmarkLockAsToBeRemoved) | **POST** /v1/locks/{lockId}/abort-remove | Aborts removal of a lock (removes the to be removed mark on the lock) |
| [**updateLock()**](LocksApi.md#updateLock) | **PUT** /v1/locks/{lockId} | Updates the provided lock. |
| [**updateLockSettings()**](LocksApi.md#updateLockSettings) | **PUT** /v1/locks/{lockId}/settings | Updates settings of the lock. |


## `addSharedLock()`

```php
addSharedLock($body): \Evva\AirKey\Model\Lock
```

Redeems a sharing code to add a lock from another access control system.

Returns the shared lock with its information. The following global sharing codes are available in the integration environment: AaBbCcDdEe11, AaBbCcDdEe22, AaBbCcDdEe33

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Evva\AirKey\Model\SharedLock(); // \Evva\AirKey\Model\SharedLock | Data to redeem sharing code

try {
    $result = $apiInstance->addSharedLock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->addSharedLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Evva\AirKey\Model\SharedLock**](../Model/SharedLock.md)| Data to redeem sharing code | |

### Return type

[**\Evva\AirKey\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignAreas()`

```php
assignAreas($lockId, $body): \Evva\AirKey\Model\AssignedArea[]
```

Assigns areas to the specific lock.

Returns a list of the just assigned areas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock
$body = array(56); // int[] | A list of areaIds

try {
    $result = $apiInstance->assignAreas($lockId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->assignAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |
| **body** | [**int[]**](../Model/int.md)| A list of areaIds | |

### Return type

[**\Evva\AirKey\Model\AssignedArea[]**](../Model/AssignedArea.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSharingCode()`

```php
createSharingCode($lockId): \Evva\AirKey\Model\SharingCode
```

Creates sharing code for a specific lock.

Returns the created sharing code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->createSharingCode($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->createSharingCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\SharingCode**](../Model/SharingCode.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSharingCode()`

```php
deleteSharingCode($lockId, $sharingCodeId): int
```

Removes sharing code from the specific lock.

Returns id of the deleted SharingCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock
$sharingCodeId = 56; // int | Unique identifier of the sharing code

try {
    $result = $apiInstance->deleteSharingCode($lockId, $sharingCodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->deleteSharingCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |
| **sharingCodeId** | **int**| Unique identifier of the sharing code | |

### Return type

**int**

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActiveShares()`

```php
getActiveShares($lockId): \Evva\AirKey\Model\ActiveShare[]
```

Returns a list of other access control systems your lock has been shared with.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getActiveShares($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getActiveShares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\ActiveShare[]**](../Model/ActiveShare.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssignedAreas()`

```php
getAssignedAreas($lockId): \Evva\AirKey\Model\AssignedArea[]
```

Gets assigned areas of a specific lock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getAssignedAreas($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getAssignedAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\AssignedArea[]**](../Model/AssignedArea.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLock()`

```php
getLock($lockId): \Evva\AirKey\Model\Lock
```

Gets information of a specific lock.

Returns a specific lock with its information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getLock($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLockSettings()`

```php
getLockSettings($lockId): \Evva\AirKey\Model\LockSettings
```

Gets settings of a specific lock.

Returns settings of a specific lock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getLockSettings($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getLockSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\LockSettings**](../Model/LockSettings.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocks()`

```php
getLocks($offset, $limit, $calendarId, $lockingSystemId): \Evva\AirKey\Model\LockPagingList
```

Gets information of all locks.

Returns a list of all locks with their information, sorted by lock id in ascending order. Maintenance tasks of a lock can be determined by using the maintenance-tasks resource (with lockId as query parameter for a single lock).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$calendarId = 56; // int | Filter locks by holiday calendar id
$lockingSystemId = 56; // int | Filter locks by technical identifier lockingSystemId

try {
    $result = $apiInstance->getLocks($offset, $limit, $calendarId, $lockingSystemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getLocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |
| **calendarId** | **int**| Filter locks by holiday calendar id | [optional] |
| **lockingSystemId** | **int**| Filter locks by technical identifier lockingSystemId | [optional] |

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

## `getSharingCodes()`

```php
getSharingCodes($lockId): \Evva\AirKey\Model\SharingCode[]
```

Returns a list of sharing codes for a specific lock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getSharingCodes($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getSharingCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\SharingCode[]**](../Model/SharingCode.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markLockAsToBeRemoved()`

```php
markLockAsToBeRemoved($lockId): \Evva\AirKey\Model\Lock
```

Marks a lock as to be removed. Lock needs to be synchronized to be actually removed.

Returns the lock that has been marked as to be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->markLockAsToBeRemoved($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->markLockAsToBeRemoved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeActiveShares()`

```php
removeActiveShares($lockId, $body): \Evva\AirKey\Model\ActiveShare[]
```

Removes shares for a specific lock.

Returns a list of just removed shares where the lock needs to be synchronized.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock
$body = array('body_example'); // string[] | A list of customerNumber

try {
    $result = $apiInstance->removeActiveShares($lockId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->removeActiveShares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |
| **body** | [**string[]**](../Model/string.md)| A list of customerNumber | |

### Return type

[**\Evva\AirKey\Model\ActiveShare[]**](../Model/ActiveShare.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignAreas()`

```php
unassignAreas($lockId, $body): \Evva\AirKey\Model\AssignedArea[]
```

Unassigns areas from the specific lock.

Returns a list of just unassigned areas where the lock needs to be synchronized.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock
$body = array(56); // int[] | A list of areaIds

try {
    $result = $apiInstance->unassignAreas($lockId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->unassignAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |
| **body** | [**int[]**](../Model/int.md)| A list of areaIds | |

### Return type

[**\Evva\AirKey\Model\AssignedArea[]**](../Model/AssignedArea.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unmarkLockAsToBeRemoved()`

```php
unmarkLockAsToBeRemoved($lockId): \Evva\AirKey\Model\Lock
```

Aborts removal of a lock (removes the to be removed mark on the lock)

Returns the lock whose removal was aborted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock

try {
    $result = $apiInstance->unmarkLockAsToBeRemoved($lockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->unmarkLockAsToBeRemoved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |

### Return type

[**\Evva\AirKey\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLock()`

```php
updateLock($lockId, $body): \Evva\AirKey\Model\Lock
```

Updates the provided lock.

Updates the provided lock and returns the new version of the lock object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock
$body = new \Evva\AirKey\Model\Lock(); // \Evva\AirKey\Model\Lock | Lock to be updated

try {
    $result = $apiInstance->updateLock($lockId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->updateLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |
| **body** | [**\Evva\AirKey\Model\Lock**](../Model/Lock.md)| Lock to be updated | |

### Return type

[**\Evva\AirKey\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLockSettings()`

```php
updateLockSettings($lockId, $body): \Evva\AirKey\Model\LockSettings
```

Updates settings of the lock.

Updates lock settings and returns the new settings of the lock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lockId = 56; // int | Unique identifier of the lock
$body = new \Evva\AirKey\Model\LockSettings(); // \Evva\AirKey\Model\LockSettings | Lock settings to be updated

try {
    $result = $apiInstance->updateLockSettings($lockId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->updateLockSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lockId** | **int**| Unique identifier of the lock | |
| **body** | [**\Evva\AirKey\Model\LockSettings**](../Model/LockSettings.md)| Lock settings to be updated | |

### Return type

[**\Evva\AirKey\Model\LockSettings**](../Model/LockSettings.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
