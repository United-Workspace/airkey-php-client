# SimpleLock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**lockType** | **string** | Type of lock | [optional] [readonly]
**lockIdentifier** | **string** | Identifier of the lock | [optional] [readonly]
**name** | **string** | Name of the lock | [optional] [readonly]
**additionalInformation** | **string** | Additional information about the lock | [optional] [readonly]
**alternativeName** | **string** | Alternative name of the lock (can be set for locks with ownership EXTERNAL as alternative to the name given by its owner, may be null). Never returned (not serialized) for locks with ownership OWNER. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
