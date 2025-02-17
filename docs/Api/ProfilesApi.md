# Voipex\Ipbx\ProfilesApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfiles()**](ProfilesApi.md#getProfiles) | **GET** /profiles | Get profiles |
| [**putProfilesProfileid()**](ProfilesApi.md#putProfilesProfileid) | **PUT** /profiles/{profileId} | Update profile settings |


## `getProfiles()`

```php
getProfiles($user_id): \Voipex\Ipbx\Model\Model11[]
```

Get profiles

Get list of user profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.

try {
    $result = $apiInstance->getProfiles($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model11[]**](../Model/Model11.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileid()`

```php
putProfilesProfileid($profile_id, $model47): string
```

Update profile settings

You can update some settings in profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 56; // int | Profile id.
$model47 = new \Voipex\Ipbx\Model\Model47(); // \Voipex\Ipbx\Model\Model47

try {
    $result = $apiInstance->putProfilesProfileid($profile_id, $model47);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->putProfilesProfileid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **int**| Profile id. | |
| **model47** | [**\Voipex\Ipbx\Model\Model47**](../Model/Model47.md)|  | [optional] |

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
