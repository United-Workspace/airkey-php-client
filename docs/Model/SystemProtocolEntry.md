# SystemProtocolEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**event** | [**\Evva\AirKey\Model\SystemProtocolEvent**](SystemProtocolEvent.md) |  | [optional]
**details** | [**\Evva\AirKey\Model\SystemProtocolDetails**](SystemProtocolDetails.md) |  | [optional]
**timestamp** | **string** | Timestamp of the event (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] [readonly]
**lockIdentifier** | **string** | Identifier of the locking component which was involved in the event, otherwise empty if no locking component was involved | [optional] [readonly]
**lockId** | **int** | Unique id of the locking component which was involved in the event if it still exists in the access control system, otherwise empty | [optional] [readonly]
**mediumIdentifier** | **string** | Identifier of the medium which was involved in the event, otherwise empty if no medium was involved, | [optional] [readonly]
**mediumId** | **int** | Unique id of the medium which was involved in the event if it still exists in the access control system, otherwise empty | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
