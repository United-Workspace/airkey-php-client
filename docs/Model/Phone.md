# Phone

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mediumType** | **string** | Phone type of the medium | [optional] [readonly]
**appType** | **string** | Type of the used app | [optional] [readonly]
**platformVersion** | **string** | Current version of the platform | [optional] [readonly]
**phoneSettings** | [**\Evva\AirKey\Model\PhoneSettings**](PhoneSettings.md) |  |
**pairingCode** | **string** | Generated pairing code | [optional] [readonly]
**pairingCodeValidUntil** | **string** | Timestamp until when the pairing code is valid (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] [readonly]
**phoneNumber** | **string** | Phone number of the phone starting with &#39;+&#39; followed by 1-49 digits (incl. possible spaces), e.g. +436641234567 |
**sentKeyOn** | **string** | Timestamp when the pairing code was sent to the phone (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
