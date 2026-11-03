# Evva\AirKey\PersonsApi



All URIs are relative to https://integration.api.airkey.evva.com:443/cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPersons()**](PersonsApi.md#createPersons) | **POST** /v1/persons | Adds list of new persons. |
| [**deletePersons()**](PersonsApi.md#deletePersons) | **DELETE** /v1/persons | Deletes provided persons. |
| [**getPerson()**](PersonsApi.md#getPerson) | **GET** /v1/persons/{personId} | Gets a specific person. |
| [**getPersons()**](PersonsApi.md#getPersons) | **GET** /v1/persons | Gets all persons. |
| [**updatePersons()**](PersonsApi.md#updatePersons) | **PUT** /v1/persons | Updates list of persons. |


## `createPersons()`

```php
createPersons($body): \Evva\AirKey\Model\Person[]
```

Adds list of new persons.

Creates and adds the provided persons to the access control system and returns a list of the new person objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Evva\AirKey\Model\PersonCreate()); // \Evva\AirKey\Model\PersonCreate[] | List of persons to be added

try {
    $result = $apiInstance->createPersons($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->createPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Evva\AirKey\Model\PersonCreate[]**](../Model/PersonCreate.md)| List of persons to be added | |

### Return type

[**\Evva\AirKey\Model\Person[]**](../Model/Person.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePersons()`

```php
deletePersons($body): int[]
```

Deletes provided persons.

Deletes the provided persons and returns a list of identifiers of all deleted objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | List of unique identifiers of all persons to be deleted

try {
    $result = $apiInstance->deletePersons($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->deletePersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**int[]**](../Model/int.md)| List of unique identifiers of all persons to be deleted | |

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

## `getPerson()`

```php
getPerson($personId): \Evva\AirKey\Model\Person
```

Gets a specific person.

Returns a specific person defined in the access control system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int | Unique identifier of the person

try {
    $result = $apiInstance->getPerson($personId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**| Unique identifier of the person | |

### Return type

[**\Evva\AirKey\Model\Person**](../Model/Person.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersons()`

```php
getPersons($offset, $limit, $firstName, $lastName, $secondaryIdentification, $search): \Evva\AirKey\Model\PersonPagingList
```

Gets all persons.

Returns a list of all persons defined in the access control system, sorted by person id in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$firstName = 'firstName_example'; // string | Filter persons by first name
$lastName = 'lastName_example'; // string | Filter persons by last name
$secondaryIdentification = 'secondaryIdentification_example'; // string | Filter persons by secondary identification
$search = 'search_example'; // string | Filter persons by matches in: first name, last name, secondary identification, email address, comment, street, city, country

try {
    $result = $apiInstance->getPersons($offset, $limit, $firstName, $lastName, $secondaryIdentification, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset for paging | [optional] |
| **limit** | **int**| Limit of result size | [optional] |
| **firstName** | **string**| Filter persons by first name | [optional] |
| **lastName** | **string**| Filter persons by last name | [optional] |
| **secondaryIdentification** | **string**| Filter persons by secondary identification | [optional] |
| **search** | **string**| Filter persons by matches in: first name, last name, secondary identification, email address, comment, street, city, country | [optional] |

### Return type

[**\Evva\AirKey\Model\PersonPagingList**](../Model/PersonPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePersons()`

```php
updatePersons($body): \Evva\AirKey\Model\Person[]
```

Updates list of persons.

Updates the provided list of persons and returns a list of new object versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-Key
$config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Evva\AirKey\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Evva\AirKey\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Evva\AirKey\Model\Person()); // \Evva\AirKey\Model\Person[] | List of persons to be updated

try {
    $result = $apiInstance->updatePersons($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->updatePersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Evva\AirKey\Model\Person[]**](../Model/Person.md)| List of persons to be updated | |

### Return type

[**\Evva\AirKey\Model\Person[]**](../Model/Person.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
