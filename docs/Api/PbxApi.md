# Voipex\Ipbx\PbxApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPbxUsers()**](PbxApi.md#getPbxUsers) | **GET** /pbx/users | Get user list |
| [**getPbxUsersUserid()**](PbxApi.md#getPbxUsersUserid) | **GET** /pbx/users/{userId} | Get user |


## `getPbxUsers()`

```php
getPbxUsers($pbx_id, $exten, $login, $callcenter): \Voipex\Ipbx\Model\Model20[]
```

Get user list

Get info about all users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\PbxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pbx_id = 3.4; // float | PBX id
$exten = 3.4; // float | User line number
$login = 'login_example'; // string
$callcenter = True; // bool | Return users with allowed callcenter

try {
    $result = $apiInstance->getPbxUsers($pbx_id, $exten, $login, $callcenter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PbxApi->getPbxUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pbx_id** | **float**| PBX id | [optional] |
| **exten** | **float**| User line number | [optional] |
| **login** | **string**|  | [optional] |
| **callcenter** | **bool**| Return users with allowed callcenter | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model20[]**](../Model/Model20.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxUsersUserid()`

```php
getPbxUsersUserid($user_id, $pbx_id): \Voipex\Ipbx\Model\Model20
```

Get user

Get user info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\PbxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Anvil id
$pbx_id = 3.4; // float | PBX id

try {
    $result = $apiInstance->getPbxUsersUserid($user_id, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PbxApi->getPbxUsersUserid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Anvil id | |
| **pbx_id** | **float**| PBX id | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model20**](../Model/Model20.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
