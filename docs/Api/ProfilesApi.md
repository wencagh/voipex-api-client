# Voipex\Ipbx\ProfilesApi

All URIs are relative to *http://ipbxapi.voipex.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfiles**](ProfilesApi.md#getprofiles) | **GET** /profiles | Get profiles
[**putProfilesProfileid**](ProfilesApi.md#putprofilesprofileid) | **PUT** /profiles/{profileId} | Update profile settings

# **getProfiles**
> \Voipex\Ipbx\Model\Model12 getProfiles($user_id)

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
$user_id = "user_id_example"; // string | User id.

try {
    $result = $apiInstance->getProfiles($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User id. | [optional]

### Return type

[**\Voipex\Ipbx\Model\Model12**](../Model/Model12.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProfilesProfileid**
> string putProfilesProfileid($profile_id, $body)

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
$body = new \Voipex\Ipbx\Model\Model47(); // \Voipex\Ipbx\Model\Model47 | 

try {
    $result = $apiInstance->putProfilesProfileid($profile_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->putProfilesProfileid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **int**| Profile id. |
 **body** | [**\Voipex\Ipbx\Model\Model47**](../Model/Model47.md)|  | [optional]

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

