# Authorization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**version** | **int** | Current version number of the authorization |
**medium** | [**\Evva\AirKey\Model\SimpleMedium**](SimpleMedium.md) |  |
**lock** | [**\Evva\AirKey\Model\SimpleLock**](SimpleLock.md) |  | [optional]
**area** | [**\Evva\AirKey\Model\SimpleArea**](SimpleArea.md) |  | [optional]
**personId** | **int** | Owner of this authorization | [optional]
**currentState** | **string** | Current state of authorization | [optional] [readonly]
**createdOn** | **string** | Timestamp when the authorization was created (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] [readonly]
**updatedOn** | **string** | Timestamp when the authorization was last updated (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] [readonly]
**synchronizedOn** | **string** | Timestamp when the authorization was last synchronized with the medium (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] [readonly]
**deletionRequested** | **bool** | Is a deletion of the authorization requested or not | [optional] [readonly]
**authorizationInfoList** | [**\Evva\AirKey\Model\AuthorizationInfo[]**](AuthorizationInfo.md) | List of authorization details |
**custom** | **bool** | Authorization combines different authorization types | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
