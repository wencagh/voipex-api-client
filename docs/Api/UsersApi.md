# Voipex\Ipbx\UsersApi

All URIs are relative to *http://ipbxapi.voipex.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**putUsersProfile**](UsersApi.md#putusersprofile) | **PUT** /users/profile | Set profile to user

# **putUsersProfile**
> \Voipex\Ipbx\Model\Model49 putUsersProfile($body)

Set profile to user

Set profile to user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Voipex\Ipbx\Model\Model48(); // \Voipex\Ipbx\Model\Model48 | 

try {
    $result = $apiInstance->putUsersProfile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUsersProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Voipex\Ipbx\Model\Model48**](../Model/Model48.md)|  | [optional]

### Return type

[**\Voipex\Ipbx\Model\Model49**](../Model/Model49.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

