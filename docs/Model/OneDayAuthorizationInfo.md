# OneDayAuthorizationInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | One day type of authorization |
**validAtDate** | **string** | Date when the authorization is valid regardless of the time zone (ISO 8601-format compliant date without time zone: yyyy-mm-dd) |
**startTime** | **string** | Starting time on the day specified by validAtDate, not necessary when the authorization should be valid for the whole day (format: hh:mm) | [optional]
**endTime** | **string** | Ending time on the day specified by validAtDate, max value: 24:00, not necessary when authorization should be valid for the whole day (format: hh:mm) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
