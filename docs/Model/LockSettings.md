# LockSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier |
**version** | **int** | Current version number of the lock |
**ownership** | **string** | Describes if the lock is your own or it belongs to someone else who has shared it with you. LockSettings attributes may only be visible or updatable for some ownership values, check specific attribute documentation how it is affected by ownership values. | [optional] [readonly]
**lastSynchronizedOn** | **string** | Timestamp of the last full synchronization of the lock (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] [readonly]
**timezone** | **string** | Lock specific timezone which affects authorizations that are only valid for certain time frames. Time zone name according to IANA Time Zone Identifier. Needs lock synchronization to be in effect. Cannot be updated if lock ownership&#x3D;EXTERNAL. | [optional]
**holidayCalendarEnabled** | **bool** | Enables your global holiday calendar for this lock. Check the HolidayCalendar resource on how to modify your global holiday calendar. PERIODICAL authorizations are not valid on holidays and automatic office mode is ignored on holidays. Needs lock synchronization to be in effect. Cannot be updated if lock ownership&#x3D;EXTERNAL. | [optional]
**manualOfficeModeEnabled** | **bool** | Allows the lock to be in office mode which is a state where the lock is permanently released so there is no need to present an authorized medium to release the lock every time. Only media that is (globally, for all your locks) authorized to activate/deactivate the office mode can trigger this lock state. Office mode can also be triggered by someone else if you share this lock with someone else and enable this setting. Needs lock synchronization to be in effect. Cannot be updated if lock ownership&#x3D;EXTERNAL. | [optional]
**automaticOfficeModeEnabled** | **bool** | Allows the office mode to be enabled automatically. The effects are the same as in manually activated office mode, difference being that the office mode is entered/left automatically at a specific time that you can define. Opening/Closing times can be defined with the officeModeSlots attribute. Can only be enabled if manual office mode is also enabled. Needs lock synchronization to be in effect. | [optional]
**normalReleaseDuration** | **int** | Standard release duration in seconds. Needs lock synchronization to be in effect. Cannot be updated if lock ownership&#x3D;EXTERNAL. | [optional]
**extendedReleaseDuration** | **int** | Alternative (usually but not necessarily longer) release duration. Is used by media that is configured to use the alternative release duration. Needs lock synchronization to be in effect. Cannot be updated if lock ownership&#x3D;EXTERNAL. | [optional]
**unlockSyncMode** | **string** | Determines if and when the lock is synchronized after it is unlocked by a smartphone via Bluetooth.  May only be a partial synchronization (depends on how long the mobile phone stays in range). Use value PERIODICALLY if you want to synchronize the lock only every few hours or if important maintenance tasks exist. Cannot be updated if lock ownership&#x3D;EXTERNAL. | [optional]
**rs485LogOutputEnabled** | **bool** | Log output is forwarded to a third-party system via the RS485 interface, if enabled. Needs lock synchronization to be in effect. Can only be updated for locks of type WALLREADER and if lock ownership&#x3D;OWNER. | [optional]
**allowHandsfreeMode** | **bool** | Allows the hands-free mode to be used to unlock this lock. A smartphone user can use hands-free mode to unlock a lock automatically at a given distance to the lock. Only possible if the specific lock allows hands-free mode. Cannot be updated if lock ownership&#x3D;EXTERNAL. | [optional]
**anonymizeEventLog** | [**\Evva\AirKey\Model\AnonymizeEventLog**](AnonymizeEventLog.md) |  |
**anonymizeDataInOwnerProtocol** | **bool** | Determines whether lock owner&#39;s lock protocol entries should be anonymized. Anonymization removes references to used media and associated persons. Only affects entries that include your media, not the lock owner&#39;s media. Can only be seen and updated if lock ownership&#x3D;EXTERNAL. | [optional]
**officeModeSlots** | [**\Evva\AirKey\Model\OfficeModeSlot[]**](OfficeModeSlot.md) | List of office mode slots. Allows a lock to enter/leave the office mode automatically at a specific time. Only in effect if automaticOfficeModeEnabled is set to true and the lock has been synchronized. | [optional]
**assignedAreas** | [**\Evva\AirKey\Model\AssignedArea[]**](AssignedArea.md) | List of assigned areas | [optional] [readonly]
**activeShares** | [**\Evva\AirKey\Model\ActiveShare[]**](ActiveShare.md) | List of shares of the locking component for other AirKey systems | [optional] [readonly]
**sharingCodes** | [**\Evva\AirKey\Model\SharingCode[]**](SharingCode.md) | List of sharing codes for a locking component | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
