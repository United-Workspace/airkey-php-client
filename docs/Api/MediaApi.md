# Evva\AirKey\MediaApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approvePendingPhoneReplacement()**](MediaApi.md#approvePendingPhoneReplacement) | **POST** /v1/pending-phone-replacements/{replacementId}/approve | Approves pending phone replacement |
| [**assignOwnerToMedium()**](MediaApi.md#assignOwnerToMedium) | **POST** /v1/media/assign | Assigns a person to a medium for each provided assignment. |
| [**cancelMediumAssignments()**](MediaApi.md#cancelMediumAssignments) | **POST** /v1/media/cancel-assignment | Cancels assignments of media. |
| [**createPhones()**](MediaApi.md#createPhones) | **POST** /v1/media/phones | Adds list of new phones. |
| [**deactivateMedium()**](MediaApi.md#deactivateMedium) | **POST** /v1/media/{mediumId}/deactivate | Deactivates provided medium. |
| [**deletePhones()**](MediaApi.md#deletePhones) | **DELETE** /v1/media/phones | Deletes provided phones. |
| [**emptyMedium()**](MediaApi.md#emptyMedium) | **POST** /v1/media/{mediumId}/empty | Empties provided medium. |
| [**generatePairingCodeForPhone()**](MediaApi.md#generatePairingCodeForPhone) | **POST** /v1/media/phones/{phoneId}/pairing | Generates a new pairing code for a phone. |
| [**getCard()**](MediaApi.md#getCard) | **GET** /v1/media/cards/{cardId} | Gets information of specific card. |
| [**getCards()**](MediaApi.md#getCards) | **GET** /v1/media/cards | Gets information of all cards. |
| [**getMedia()**](MediaApi.md#getMedia) | **GET** /v1/media | Gets information of all media. |
| [**getMedium()**](MediaApi.md#getMedium) | **GET** /v1/media/{mediumId} | Gets information of a specific medium. |
| [**getPendingPhoneReplacements()**](MediaApi.md#getPendingPhoneReplacements) | **GET** /v1/pending-phone-replacements | Gets all pending phone replacements. |
| [**getPhone()**](MediaApi.md#getPhone) | **GET** /v1/media/phones/{phoneId} | Gets information of specific phone. |
| [**getPhones()**](MediaApi.md#getPhones) | **GET** /v1/media/phones | Gets information of all phones. |
| [**reactivateMedium()**](MediaApi.md#reactivateMedium) | **POST** /v1/media/{mediumId}/reactivate | Reactivates provided medium. |
| [**rejectPendingPhoneReplacement()**](MediaApi.md#rejectPendingPhoneReplacement) | **POST** /v1/pending-phone-replacements/{replacementId}/reject | Rejects pending phone replacement |
| [**resetPinOfPhone()**](MediaApi.md#resetPinOfPhone) | **POST** /v1/media/phones/{phoneId}/pin-reset | Resets PIN of the phone. |
| [**sendRegistrationCodeToPhone()**](MediaApi.md#sendRegistrationCodeToPhone) | **POST** /v1/media/phones/{phoneId}/send-registration-code-with-parameters | Deprecated/Legacy: This resource will be removed in future versions. Please use resource \&quot;/v1/media/phones/{phoneId}/send-registration-code/sms\&quot; instead. |
| [**sendRegistrationCodeToPhone1()**](MediaApi.md#sendRegistrationCodeToPhone1) | **POST** /v1/media/phones/{phoneId}/send-registration-code | Deprecated/Legacy: This resource will be removed in future versions. Please use resource \&quot;/v1/media/phones/{phoneId}/send-registration-code/sms\&quot; instead. |
| [**sendRegistrationCodeToPhoneViaMail()**](MediaApi.md#sendRegistrationCodeToPhoneViaMail) | **POST** /v1/media/phones/{phoneId}/send-registration-code/mail | Sends a pairing code while the email subject and text to be sent can be configured. |
| [**sendRegistrationCodeToPhoneViaSms()**](MediaApi.md#sendRegistrationCodeToPhoneViaSms) | **POST** /v1/media/phones/{phoneId}/send-registration-code/sms | Sends pairing code to phone while the SMS text to be sent can be configured. |
| [**updateCards()**](MediaApi.md#updateCards) | **PUT** /v1/media/cards | Updates list of cards. |
| [**updatePhones()**](MediaApi.md#updatePhones) | **PUT** /v1/media/phones | Updates list of phones. |


## `approvePendingPhoneReplacement()`

```php
approvePendingPhoneReplacement($replacementId)
```

Approves pending phone replacement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replacementId = 56; // int | Unique identifier of the replacement operation

try {
    $apiInstance->approvePendingPhoneReplacement($replacementId);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->approvePendingPhoneReplacement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **replacementId** | **int**| Unique identifier of the replacement operation | |

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

## `assignOwnerToMedium()`

```php
assignOwnerToMedium($body): \Evva\AirKey\Model\MediumAssignment[]
```

Assigns a person to a medium for each provided assignment.

Creates a person assignment for a medium according to the provided list of assignments and returns the resulting assignment list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Evva\AirKey\Model\MediumAssignment()); // \Evva\AirKey\Model\MediumAssignment[] | List of medium assignments

try {
    $result = $apiInstance->assignOwnerToMedium($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->assignOwnerToMedium: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Evva\AirKey\Model\MediumAssignment[]**](../Model/MediumAssignment.md)| List of medium assignments | |

### Return type

[**\Evva\AirKey\Model\MediumAssignment[]**](../Model/MediumAssignment.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMediumAssignments()`

```php
cancelMediumAssignments($body): int[]
```

Cancels assignments of media.

Cancels the person assignments of the provided list of media and returns a list of identifiers of the updated medium objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | List of unique medium identifiers

try {
    $result = $apiInstance->cancelMediumAssignments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->cancelMediumAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**int[]**](../Model/int.md)| List of unique medium identifiers | |

### Return type

**int[]**

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPhones()`

```php
createPhones($body): \Evva\AirKey\Model\Phone[]
```

Adds list of new phones.

Creates and adds the provided phones to the access control system and returns a list of the new phone objects. Please check before if a phone already exists with the given phone number to prevent duplicates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Evva\AirKey\Model\PhoneCreate()); // \Evva\AirKey\Model\PhoneCreate[] | List of phones to be added

try {
    $result = $apiInstance->createPhones($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->createPhones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Evva\AirKey\Model\PhoneCreate[]**](../Model/PhoneCreate.md)| List of phones to be added | |

### Return type

[**\Evva\AirKey\Model\Phone[]**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateMedium()`

```php
deactivateMedium($mediumId, $reason, $comment): \Evva\AirKey\Model\Medium
```

Deactivates provided medium.

Deactivates the provided medium and returns a new version of the medium object. The fields \"reason\" and \"comment\" are saved in the system protocol and are not part of the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mediumId = 56; // int | Unique identifier of the medium to be deactivated
$reason = 'reason_example'; // string | Reason of deactivation (user defined input that can be used to describe the reasons for deactivating a medium, e.g. has been lost / was stolen / is broken)
$comment = 'comment_example'; // string | Additional comment of deactivation (user defined input that can be used to add further details regarding the reason for deactivating a medium, e.g. when all details won't fit within the reason field)

try {
    $result = $apiInstance->deactivateMedium($mediumId, $reason, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->deactivateMedium: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mediumId** | **int**| Unique identifier of the medium to be deactivated | |
| **reason** | **string**| Reason of deactivation (user defined input that can be used to describe the reasons for deactivating a medium, e.g. has been lost / was stolen / is broken) | |
| **comment** | **string**| Additional comment of deactivation (user defined input that can be used to add further details regarding the reason for deactivating a medium, e.g. when all details won&#39;t fit within the reason field) | [optional] |

### Return type

[**\Evva\AirKey\Model\Medium**](../Model/Medium.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePhones()`

```php
deletePhones($body): int[]
```

Deletes provided phones.

Deletes the provided phones and returns a list of identifiers of all deleted objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | List of unique identifiers of all phones to be deleted

try {
    $result = $apiInstance->deletePhones($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->deletePhones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**int[]**](../Model/int.md)| List of unique identifiers of all phones to be deleted | |

### Return type

**int[]**

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emptyMedium()`

```php
emptyMedium($mediumId): \Evva\AirKey\Model\Medium
```

Empties provided medium.

Empties the provided medium and returns a new version of the medium object. All authorizations will be deleted from the medium. The person assignment of the medium does not get cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mediumId = 56; // int | Unique identifier of the medium

try {
    $result = $apiInstance->emptyMedium($mediumId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->emptyMedium: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mediumId** | **int**| Unique identifier of the medium | |

### Return type

[**\Evva\AirKey\Model\Medium**](../Model/Medium.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePairingCodeForPhone()`

```php
generatePairingCodeForPhone($phoneId): \Evva\AirKey\Model\Phone
```

Generates a new pairing code for a phone.

Generates a new pairing code for the provided phone and returns a new version of the phone object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = 56; // int | Unique identifier of the phone

try {
    $result = $apiInstance->generatePairingCodeForPhone($phoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->generatePairingCodeForPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneId** | **int**| Unique identifier of the phone | |

### Return type

[**\Evva\AirKey\Model\Phone**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCard()`

```php
getCard($cardId): \Evva\AirKey\Model\Card
```

Gets information of specific card.

Returns all information of provided medium of type 'card'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cardId = 56; // int | Unique identifier of the card

try {
    $result = $apiInstance->getCard($cardId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cardId** | **int**| Unique identifier of the card | |

### Return type

[**\Evva\AirKey\Model\Card**](../Model/Card.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCards()`

```php
getCards($personId, $lockingSystemId, $assignmentStatus, $offset, $limit): \Evva\AirKey\Model\CardPagingList
```

Gets information of all cards.

Returns a list of all media of type 'card' defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int | Filter cards by person id
$lockingSystemId = 56; // int | Filter cards by technical identifier lockingSystemId
$assignmentStatus = 'assignmentStatus_example'; // string | Filter cards by assignment status
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getCards($personId, $lockingSystemId, $assignmentStatus, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**| Filter cards by person id | [optional] |
| **lockingSystemId** | **int**| Filter cards by technical identifier lockingSystemId | [optional] |
| **assignmentStatus** | **string**| Filter cards by assignment status | [optional] |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |

### Return type

[**\Evva\AirKey\Model\CardPagingList**](../Model/CardPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMedia()`

```php
getMedia($personId, $lockingSystemId, $assignmentStatus, $offset, $limit): \Evva\AirKey\Model\MediumPagingList
```

Gets information of all media.

Returns a list of all media defined in the access control system, sorted by medium id in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int | Filter media by person id
$lockingSystemId = 56; // int | Filter media by technical identifier lockingSystemId
$assignmentStatus = 'assignmentStatus_example'; // string | Filter media by assignment status
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getMedia($personId, $lockingSystemId, $assignmentStatus, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**| Filter media by person id | [optional] |
| **lockingSystemId** | **int**| Filter media by technical identifier lockingSystemId | [optional] |
| **assignmentStatus** | **string**| Filter media by assignment status | [optional] |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |

### Return type

[**\Evva\AirKey\Model\MediumPagingList**](../Model/MediumPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMedium()`

```php
getMedium($mediumId): \Evva\AirKey\Model\Medium
```

Gets information of a specific medium.

Returns all information of a specific medium defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mediumId = 56; // int | Unique identifier of the medium

try {
    $result = $apiInstance->getMedium($mediumId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getMedium: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mediumId** | **int**| Unique identifier of the medium | |

### Return type

[**\Evva\AirKey\Model\Medium**](../Model/Medium.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPendingPhoneReplacements()`

```php
getPendingPhoneReplacements(): \Evva\AirKey\Model\PendingPhoneReplacementListDto
```

Gets all pending phone replacements.

Returns a list of all pending phone replacements sorted by creation date ascending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPendingPhoneReplacements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getPendingPhoneReplacements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Evva\AirKey\Model\PendingPhoneReplacementListDto**](../Model/PendingPhoneReplacementListDto.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhone()`

```php
getPhone($phoneId): \Evva\AirKey\Model\Phone
```

Gets information of specific phone.

Returns all information of provided medium of type 'phone'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = 56; // int | Unique identifier of the phone

try {
    $result = $apiInstance->getPhone($phoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneId** | **int**| Unique identifier of the phone | |

### Return type

[**\Evva\AirKey\Model\Phone**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhones()`

```php
getPhones($personId, $lockingSystemId, $assignmentStatus, $phoneNumber, $offset, $limit): \Evva\AirKey\Model\PhonePagingList
```

Gets information of all phones.

Returns a list of all media of type 'phone' defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int | Filter phones by person id
$lockingSystemId = 56; // int | Filter phones by technical identifier lockingSystemId
$assignmentStatus = 'assignmentStatus_example'; // string | Filter phones by assignment status
$phoneNumber = 'phoneNumber_example'; // string | Filter phones by phone number
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getPhones($personId, $lockingSystemId, $assignmentStatus, $phoneNumber, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getPhones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**| Filter phones by person id | [optional] |
| **lockingSystemId** | **int**| Filter phones by technical identifier lockingSystemId | [optional] |
| **assignmentStatus** | **string**| Filter phones by assignment status | [optional] |
| **phoneNumber** | **string**| Filter phones by phone number | [optional] |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |

### Return type

[**\Evva\AirKey\Model\PhonePagingList**](../Model/PhonePagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reactivateMedium()`

```php
reactivateMedium($mediumId, $reason, $recoverAuthorizations, $comment): \Evva\AirKey\Model\Medium
```

Reactivates provided medium.

Reactivates the provided medium and returns a new version of the medium object. The fields \"reason\" and \"comment\" are saved in the system protocol and are not part of the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mediumId = 56; // int | Unique identifier of the medium to be reactivated
$reason = 'reason_example'; // string | Reason of reactivation (user defined input that can be used to describe the reasons for reactivating a medium, e.g. a medium has been found again)
$recoverAuthorizations = True; // bool | Recover authorizations available prior to deactivation
$comment = 'comment_example'; // string | Additional comment of reactivation (user defined input that can be used to add further details regarding the reason for reactivating a medium, e.g. when all details won't fit within the reason field)

try {
    $result = $apiInstance->reactivateMedium($mediumId, $reason, $recoverAuthorizations, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->reactivateMedium: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mediumId** | **int**| Unique identifier of the medium to be reactivated | |
| **reason** | **string**| Reason of reactivation (user defined input that can be used to describe the reasons for reactivating a medium, e.g. a medium has been found again) | |
| **recoverAuthorizations** | **bool**| Recover authorizations available prior to deactivation | |
| **comment** | **string**| Additional comment of reactivation (user defined input that can be used to add further details regarding the reason for reactivating a medium, e.g. when all details won&#39;t fit within the reason field) | [optional] |

### Return type

[**\Evva\AirKey\Model\Medium**](../Model/Medium.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectPendingPhoneReplacement()`

```php
rejectPendingPhoneReplacement($replacementId)
```

Rejects pending phone replacement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replacementId = 56; // int | Unique identifier of the replacement operation

try {
    $apiInstance->rejectPendingPhoneReplacement($replacementId);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->rejectPendingPhoneReplacement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **replacementId** | **int**| Unique identifier of the replacement operation | |

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

## `resetPinOfPhone()`

```php
resetPinOfPhone($phoneId): \Evva\AirKey\Model\Phone
```

Resets PIN of the phone.

Resets the PIN of the provided phone and returns new version of the phone object with set PIN reset time. After the phone was synchronized the PIN flag is reset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = 56; // int | Unique identifier of the phone to reset the PIN

try {
    $result = $apiInstance->resetPinOfPhone($phoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->resetPinOfPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneId** | **int**| Unique identifier of the phone to reset the PIN | |

### Return type

[**\Evva\AirKey\Model\Phone**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendRegistrationCodeToPhone()`

```php
sendRegistrationCodeToPhone($phoneId, $body): \Evva\AirKey\Model\Phone
```

Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/media/phones/{phoneId}/send-registration-code/sms\" instead.

Sends a generated pairing code per SMS to the phone and returns a new version of the phone object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = 56; // int | Unique identifier of the phone
$body = new \Evva\AirKey\Model\SendRegistrationCodeSmsRequest(); // \Evva\AirKey\Model\SendRegistrationCodeSmsRequest | Send registration code request wrapper

try {
    $result = $apiInstance->sendRegistrationCodeToPhone($phoneId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->sendRegistrationCodeToPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneId** | **int**| Unique identifier of the phone | |
| **body** | [**\Evva\AirKey\Model\SendRegistrationCodeSmsRequest**](../Model/SendRegistrationCodeSmsRequest.md)| Send registration code request wrapper | [optional] |

### Return type

[**\Evva\AirKey\Model\Phone**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendRegistrationCodeToPhone1()`

```php
sendRegistrationCodeToPhone1($phoneId): \Evva\AirKey\Model\Phone
```

Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/media/phones/{phoneId}/send-registration-code/sms\" instead.

Sends a generated pairing code per SMS to the phone and returns a new version of the phone object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = 56; // int | Unique identifier of the phone

try {
    $result = $apiInstance->sendRegistrationCodeToPhone1($phoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->sendRegistrationCodeToPhone1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneId** | **int**| Unique identifier of the phone | |

### Return type

[**\Evva\AirKey\Model\Phone**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendRegistrationCodeToPhoneViaMail()`

```php
sendRegistrationCodeToPhoneViaMail($phoneId, $body): \Evva\AirKey\Model\Phone
```

Sends a pairing code while the email subject and text to be sent can be configured.

Sends a generated pairing code per email and returns a new version of the phone object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = 56; // int | Unique identifier of the phone
$body = new \Evva\AirKey\Model\SendRegistrationCodeMailRequest(); // \Evva\AirKey\Model\SendRegistrationCodeMailRequest | Send registration code via email request wrapper

try {
    $result = $apiInstance->sendRegistrationCodeToPhoneViaMail($phoneId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->sendRegistrationCodeToPhoneViaMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneId** | **int**| Unique identifier of the phone | |
| **body** | [**\Evva\AirKey\Model\SendRegistrationCodeMailRequest**](../Model/SendRegistrationCodeMailRequest.md)| Send registration code via email request wrapper | |

### Return type

[**\Evva\AirKey\Model\Phone**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendRegistrationCodeToPhoneViaSms()`

```php
sendRegistrationCodeToPhoneViaSms($phoneId, $body): \Evva\AirKey\Model\Phone
```

Sends pairing code to phone while the SMS text to be sent can be configured.

Sends a generated pairing code per SMS to the phone and returns a new version of the phone object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = 56; // int | Unique identifier of the phone
$body = new \Evva\AirKey\Model\SendRegistrationCodeSmsRequest(); // \Evva\AirKey\Model\SendRegistrationCodeSmsRequest | Send registration code request wrapper

try {
    $result = $apiInstance->sendRegistrationCodeToPhoneViaSms($phoneId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->sendRegistrationCodeToPhoneViaSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneId** | **int**| Unique identifier of the phone | |
| **body** | [**\Evva\AirKey\Model\SendRegistrationCodeSmsRequest**](../Model/SendRegistrationCodeSmsRequest.md)| Send registration code request wrapper | |

### Return type

[**\Evva\AirKey\Model\Phone**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCards()`

```php
updateCards($body): \Evva\AirKey\Model\Card[]
```

Updates list of cards.

Updates the provided list of cards and returns a list of new object versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Evva\AirKey\Model\Card()); // \Evva\AirKey\Model\Card[] | List of cards to be updated

try {
    $result = $apiInstance->updateCards($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->updateCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Evva\AirKey\Model\Card[]**](../Model/Card.md)| List of cards to be updated | |

### Return type

[**\Evva\AirKey\Model\Card[]**](../Model/Card.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePhones()`

```php
updatePhones($body): \Evva\AirKey\Model\Phone[]
```

Updates list of phones.

Updates the provided list of phones and returns a list of new object versions. Please check before if a phone already exists with the given phone number to prevent duplicates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Evva\AirKey\Model\Phone()); // \Evva\AirKey\Model\Phone[] | List of phones to be updated

try {
    $result = $apiInstance->updatePhones($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->updatePhones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Evva\AirKey\Model\Phone[]**](../Model/Phone.md)| List of phones to be updated | |

### Return type

[**\Evva\AirKey\Model\Phone[]**](../Model/Phone.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
