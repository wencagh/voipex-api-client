# # Model1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | [**\Voipex\Ipbx\Model\Model1UserId**](Model1UserId.md) |  |
**line** | [**\Voipex\Ipbx\Model\Model1Line**](Model1Line.md) |  |
**calldate** | **\DateTime** |  |
**clid** | **string** |  | [optional]
**src** | **string** |  |
**dst** | **string** |  |
**duration** | **float** |  |
**billsec** | **float** |  |
**disposition** | **string** | asterisk hangup cause |
**accountcode** | **string** |  | [optional]
**userfield** | **string** | custom data | [optional]
**filename** | **string** | name of call recording | [optional]
**way** | [**\Voipex\Ipbx\Model\Way**](Way.md) |  |
**trunk** | **string** | used SIP trunk | [optional]
**hangupcause** | **string** |  | [optional]
**uniqueid** | **string** |  | [optional]
**linkedid** | **string** |  | [optional]
**organization** | **string** | calling organization from API8 |
**organization_person** | **string** |  | [optional]
**data** | **string** | metadata | [optional]
**sipcallid** | **string** |  | [optional]
**stamp** | **\DateTime** | creation date |
**cc_cb** | **float** |  | [optional]
**queue** | **string** | outgoing queue | [optional]
**note** | **string** |  | [optional]
**categories** | **string[]** | List of call categories | [optional]
**phone_number** | **string** | Selection from src or dst field. If way is incoming then phoneNumber is source number. If way is outgoing then phoneNumber is destination number. |
**user** | [**\Voipex\Ipbx\Model\User**](User.md) |  | [optional]
**end_time** | **\DateTime** |  |
**user_answered** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
