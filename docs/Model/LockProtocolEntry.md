# LockProtocolEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eventCategory** | **string** | Category of event | [optional] [readonly]
**event** | [**\Evva\AirKey\Model\LockProtocolEvent**](LockProtocolEvent.md) |  | [optional]
**details** | [**\Evva\AirKey\Model\LockProtocolDetails**](LockProtocolDetails.md) |  | [optional]
**lockUtcDelta** | **int** | Time difference of locking component regarding UTC | [optional] [readonly]
**medium** | [**\Evva\AirKey\Model\SimpleMedium**](SimpleMedium.md) |  | [optional]
**operatorName** | **string** | Name of person who was responsible for this event | [optional] [readonly]
**sourceLock** | **bool** | Locking component has verified event or not | [optional] [readonly]
**sourceMedium** | **bool** | Medium has verified event or not | [optional] [readonly]
**timestamp** | **string** | Timestamp of the event (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
