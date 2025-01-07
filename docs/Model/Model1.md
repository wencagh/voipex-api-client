# Model1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | [**AnyOfModel1UserId**](AnyOfModel1UserId.md) |  | 
**line** | [**AnyOfModel1Line**](AnyOfModel1Line.md) |  | 
**calldate** | [**\DateTime**](\DateTime.md) |  | 
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
**stamp** | [**\DateTime**](\DateTime.md) | creation date | 
**cc_cb** | **float** |  | [optional] 
**queue** | **string** | outgoing queue | [optional] 
**note** | **string** |  | [optional] 
**categories** | [**\Voipex\Ipbx\Model\Categories**](Categories.md) |  | [optional] 
**phone_number** | **string** | Selection from src or dst field. If way is incoming then phoneNumber is source number. If way is outgoing then phoneNumber is destination number. | 
**user** | [**\Voipex\Ipbx\Model\User**](User.md) |  | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) |  | 
**user_answered** | **bool** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

