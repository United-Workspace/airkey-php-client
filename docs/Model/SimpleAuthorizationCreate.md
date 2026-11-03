# SimpleAuthorizationCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorizationInfo** | [**\Evva\AirKey\Model\SimpleAuthorizationInfo**](SimpleAuthorizationInfo.md) |  |
**mediumId** | **int** | Medium to which this authorization should be defined |
**lockId** | **int** | Lock for which the medium should be authorized. Required when no area id is set. | [optional]
**areaId** | **int** | Area for which the medium should be authorized. Required when no lock id is set. | [optional]
**removeAllExistingAuthorizationsForPair** | **bool** | Removes all authorizations for the given medium – lock or medium – area pair before creating the given simple authorization (avoids conflict potential which may result in failure). | [optional]
**pushMessage** | **string** | Notification text that will be shown on the phone for new/changed authorizations. Default text will be used if not set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
