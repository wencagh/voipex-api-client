# Voipex\Ipbx\ServiceApi

All URIs are relative to *http://ipbxapi.voipex.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**putServiceReload**](ServiceApi.md#putservicereload) | **PUT** /service/reload | Apply changes

# **putServiceReload**
> string putServiceReload($hostname, $pbx_id, $type)

Apply changes

Force Reload. Use hostname or pbxId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostname = "hostname_example"; // string | (deprecated) PBX hostname
$pbx_id = 1.2; // float | 
$type = "full"; // string | PBX reload type

try {
    $result = $apiInstance->putServiceReload($hostname, $pbx_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->putServiceReload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hostname** | **string**| (deprecated) PBX hostname | [optional]
 **pbx_id** | **float**|  | [optional]
 **type** | **string**| PBX reload type | [optional] [default to full]

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

