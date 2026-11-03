# Medium

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**version** | **int** | Current version number of the medium |
**name** | **string** | Name of the medium (max. 50 characters) | [optional]
**mediumIdentifier** | **string** | Identifier of the medium | [optional] [readonly]
**lockingSystemId** | **int** | Technical identifier of the medium | [optional] [readonly]
**mediumType** | **string** | Type of the medium | [optional] [readonly]
**lastSynchronizedOn** | **string** | Timestamp of the last synchronization (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] [readonly]
**comment** | **string** | Comment (max. 500 characters) | [optional]
**releaseDurationExtended** | **bool** | Release duration is extended or not |
**permanentOpeningEnabled** | **bool** | Permanent opening is enabled or not |
**activated** | **bool** | Activated or not | [optional] [readonly]
**personId** | **int** | Person this medium is assigned to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
