# AuthorizationCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mediumId** | **int** | Medium to which this authorization should be defined |
**areaId** | **int** | Area for which the given medium should be authorized. Required when no lock id is set. | [optional]
**lockId** | **int** | Lock for which the given medium should be authorized. Required when no area id is set. | [optional]
**authorizationInfoList** | [**\Evva\AirKey\Model\AuthorizationInfo[]**](AuthorizationInfo.md) | List of authorization details |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
