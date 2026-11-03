# Evva\AirKey\SystemProtocolApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSystemProtocol()**](SystemProtocolApi.md#getSystemProtocol) | **GET** /v1/system-protocol | Deprecated/Legacy: This resource will be removed in future versions. Please use resource \&quot;/v1/system-protocol-limit\&quot; instead. |
| [**getSystemProtocolLimited()**](SystemProtocolApi.md#getSystemProtocolLimited) | **GET** /v1/system-protocol-limit | Gets system protocol. |


## `getSystemProtocol()`

```php
getSystemProtocol($offset, $limit, $id, $lockId, $mediumId, $event, $userId, $administrator, $from, $to, $language): \Evva\AirKey\Model\SystemProtocolPagingList
```

Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/system-protocol-limit\" instead.

Returns the system protocol with all events that were conducted by the administrators of the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\SystemProtocolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$id = 56; // int | Filter events by unique protocol entry identifier
$lockId = 56; // int | Filter events by unique lock id
$mediumId = 56; // int | Filter events by unique medium id
$event = 'event_example'; // string | Filter events by event type
$userId = 56; // int | Filter events by unique administrator user identifier
$administrator = 'administrator_example'; // string | Filter events by name of administrator
$from = 'from_example'; // string | Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ)
$to = 'to_example'; // string | Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ)
$language = 'de-DE'; // string | Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \"all\" for all possible languages used for translations

try {
    $result = $apiInstance->getSystemProtocol($offset, $limit, $id, $lockId, $mediumId, $event, $userId, $administrator, $from, $to, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemProtocolApi->getSystemProtocol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |
| **id** | **int**| Filter events by unique protocol entry identifier | [optional] |
| **lockId** | **int**| Filter events by unique lock id | [optional] |
| **mediumId** | **int**| Filter events by unique medium id | [optional] |
| **event** | **string**| Filter events by event type | [optional] |
| **userId** | **int**| Filter events by unique administrator user identifier | [optional] |
| **administrator** | **string**| Filter events by name of administrator | [optional] |
| **from** | **string**| Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] |
| **to** | **string**| Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] |
| **language** | **string**| Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations | [optional] [default to &#39;de-DE&#39;] |

### Return type

[**\Evva\AirKey\Model\SystemProtocolPagingList**](../Model/SystemProtocolPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemProtocolLimited()`

```php
getSystemProtocolLimited($offset, $limit, $id, $lockId, $mediumId, $event, $userId, $administrator, $from, $to, $language): \Evva\AirKey\Model\SystemProtocolPagingList
```

Gets system protocol.

Returns the system protocol with events that were conducted by the administrators of the access control system. If 'from' and 'to' is missing, a default period of 'one day' is used. The period between 'from' and 'to' can be maximum one year (365 days).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\SystemProtocolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$id = 56; // int | Filter events by unique protocol entry identifier
$lockId = 56; // int | Filter events by unique lock id
$mediumId = 56; // int | Filter events by unique medium id
$event = 'event_example'; // string | Filter events by event type
$userId = 56; // int | Filter events by unique administrator user identifier
$administrator = 'administrator_example'; // string | Filter events by name of administrator
$from = 'from_example'; // string | Timestamp from when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ)
$to = 'to_example'; // string | Timestamp until when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ)
$language = 'de-DE'; // string | Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \"all\" for all possible languages used for translations

try {
    $result = $apiInstance->getSystemProtocolLimited($offset, $limit, $id, $lockId, $mediumId, $event, $userId, $administrator, $from, $to, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemProtocolApi->getSystemProtocolLimited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |
| **id** | **int**| Filter events by unique protocol entry identifier | [optional] |
| **lockId** | **int**| Filter events by unique lock id | [optional] |
| **mediumId** | **int**| Filter events by unique medium id | [optional] |
| **event** | **string**| Filter events by event type | [optional] |
| **userId** | **int**| Filter events by unique administrator user identifier | [optional] |
| **administrator** | **string**| Filter events by name of administrator | [optional] |
| **from** | **string**| Timestamp from when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] |
| **to** | **string**| Timestamp until when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] |
| **language** | **string**| Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations | [optional] [default to &#39;de-DE&#39;] |

### Return type

[**\Evva\AirKey\Model\SystemProtocolPagingList**](../Model/SystemProtocolPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
