# Evva\AirKey\LockProtocolApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLockProtocol()**](LockProtocolApi.md#getLockProtocol) | **GET** /v1/lock-protocol | Deprecated/Legacy: This resource will be removed in future versions. Please use resource \&quot;/v1/lock-protocol-limit\&quot; instead. |
| [**getLockProtocolLimited()**](LockProtocolApi.md#getLockProtocolLimited) | **GET** /v1/lock-protocol-limit | Gets protocol of locks. |


## `getLockProtocol()`

```php
getLockProtocol($offset, $limit, $areaId, $lockId, $from, $to, $language): \Evva\AirKey\Model\LockProtocolPagingList
```

Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/lock-protocol-limit\" instead.

Returns a list of protocols of all locks in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LockProtocolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$areaId = 56; // int | Filter protocols by area id
$lockId = 56; // int | Filter protocols by lock id
$from = 'from_example'; // string | Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision)
$to = 'to_example'; // string | Timestamp until when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision)
$language = 'de-DE'; // string | Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \"all\" for all possible languages used for translations

try {
    $result = $apiInstance->getLockProtocol($offset, $limit, $areaId, $lockId, $from, $to, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockProtocolApi->getLockProtocol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |
| **areaId** | **int**| Filter protocols by area id | [optional] |
| **lockId** | **int**| Filter protocols by lock id | [optional] |
| **from** | **string**| Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] |
| **to** | **string**| Timestamp until when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] |
| **language** | **string**| Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations | [optional] [default to &#39;de-DE&#39;] |

### Return type

[**\Evva\AirKey\Model\LockProtocolPagingList**](../Model/LockProtocolPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLockProtocolLimited()`

```php
getLockProtocolLimited($offset, $limit, $areaId, $lockId, $from, $to, $language): \Evva\AirKey\Model\LockProtocolPagingList
```

Gets protocol of locks.

Returns a list of protocol entries of all locks in the access control system. If 'from' and 'to' is missing, a default period of 'one day' is used. The period between 'from' and 'to' can be maximum one year (365 days).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\LockProtocolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$areaId = 56; // int | Filter protocols by area id
$lockId = 56; // int | Filter protocols by lock id
$from = 'from_example'; // string | Timestamp from when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision)
$to = 'to_example'; // string | Timestamp until when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision)
$language = 'de-DE'; // string | Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \"all\" for all possible languages used for translations

try {
    $result = $apiInstance->getLockProtocolLimited($offset, $limit, $areaId, $lockId, $from, $to, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockProtocolApi->getLockProtocolLimited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |
| **areaId** | **int**| Filter protocols by area id | [optional] |
| **lockId** | **int**| Filter protocols by lock id | [optional] |
| **from** | **string**| Timestamp from when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] |
| **to** | **string**| Timestamp until when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] |
| **language** | **string**| Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations | [optional] [default to &#39;de-DE&#39;] |

### Return type

[**\Evva\AirKey\Model\LockProtocolPagingList**](../Model/LockProtocolPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
