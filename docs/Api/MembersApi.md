# Voipex\Ipbx\MembersApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMembers()**](MembersApi.md#getMembers) | **GET** /members | Get list of members |


## `getMembers()`

```php
getMembers($login, $user_id): \Voipex\Ipbx\Model\Model5[]
```

Get list of members

Get list of members with information about queues and skills group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login = 'login_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getMembers($login, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model5[]**](../Model/Model5.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
