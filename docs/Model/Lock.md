# Lock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**version** | **int** | Current version number of the lock |
**lockType** | **string** | Type of lock | [optional] [readonly]
**ownership** | **string** | Describes if the lock is your own or it belongs to someone else who has shared it with you. | [optional] [readonly]
**lockTechnology** | **string** | Type of lock technology | [optional] [readonly]
**lockIdentifier** | **string** | Identifier of the lock | [optional] [readonly]
**lockingSystemId** | **int** | Technical identifier of the lock | [optional] [readonly]
**lockDoor** | [**\Evva\AirKey\Model\LockDoor**](LockDoor.md) |  |
**lockFirmware** | [**\Evva\AirKey\Model\LockFirmware**](LockFirmware.md) |  | [optional]
**comment** | **string** | Comment | [optional]
**removalRequested** | **bool** | Indicates if a lock is to be removed. Needs lock synchronization to actually remove the lock. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
