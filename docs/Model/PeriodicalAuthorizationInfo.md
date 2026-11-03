# PeriodicalAuthorizationInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Periodical type of authorization |
**periodicalPeriods** | [**\Evva\AirKey\Model\PeriodicalPeriod[]**](PeriodicalPeriod.md) | List of periodical periods in which the medium is authorized for a lock or area (max. 28 entries - 4 per week day) |
**validFromDate** | **string** | Date from when the authorization is valid regardless of the time zone (ISO 8601-format compliant date without time zone: yyyy-mm-dd) |
**validToDate** | **string** | Date until when the authorization is valid regardless of the time zone, not necessary if there should be no limit (ISO 8601-format compliant date without time zone: yyyy-mm-dd) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
