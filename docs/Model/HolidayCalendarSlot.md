# HolidayCalendarSlot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**version** | **int** | Current version number of the holiday calendar slot | [readonly]
**slotName** | **string** | Name of the holiday calendar slot (max. 50 characters) | [readonly]
**validFrom** | **string** | Holiday calendar slot start time regardless of the time zone (ISO 8601-format compliant date with time, without time zone: yyyy-mm-ddThh:mm) | [readonly]
**validTo** | **string** | Holiday calendar slot end time regardless of the time zone (ISO 8601-format compliant date with time, without time zone: yyyy-mm-ddThh:mm) | [readonly]
**series** | [**\Evva\AirKey\Model\HolidayCalendarSeries**](HolidayCalendarSeries.md) |  | [optional]
**seriesSequenceNumber** | **int** | Sequence number of this holiday calendar slot in the time series | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
