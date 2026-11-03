# Person

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**version** | **int** | Current version number of the person |
**firstName** | **string** | First name of the person (max. 50 characters) |
**lastName** | **string** | Last name of the person (max. 50 characters) |
**secondaryIdentification** | **string** | Secondary identification of the person (max. 50 characters) | [optional]
**gender** | **string** | Gender of the person | [optional]
**birthday** | **string** | Birthday (ISO 8601-format compliant date without time zone: yyyy-mm-dd) | [optional]
**phone** | **string** | Phone number (max. 50 characters) | [optional]
**emailAddress** | **string** | Email address (max. 50 characters) | [optional]
**street** | **string** | Street (max. 50 characters) | [optional]
**postalCode** | **string** | Postal code (max. 50 characters) | [optional]
**countryCode** | **string** | Country code, ISO 3166-1 alpha-3 compliant and case sensitive (ONLY the defined ISO codes are accepted) | [optional]
**city** | **string** | City (max. 50 characters) | [optional]
**comment** | **string** | Comment (max. 500 characters) | [optional]
**correspondenceLanguageCode** | **string** | Language code for correspondences, IETF bcp47 compliant and case sensitive (ONLY the 11 defined language tags are accepted) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
