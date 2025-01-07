# Voipex\Ipbx\RecordingsApi

All URIs are relative to *http://ipbxapi.voipex.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRecordings**](RecordingsApi.md#getrecordings) | **GET** /recordings | Get all recording names based on the input filter.
[**getRecordingsDownload**](RecordingsApi.md#getrecordingsdownload) | **GET** /recordings/download | Download all recordings based on callId as a .zip archive
[**getRecordingsFilename**](RecordingsApi.md#getrecordingsfilename) | **GET** /recordings/{filename} | Play recording specified by filename
[**getRecordingsFilenameIpbxPbxid**](RecordingsApi.md#getrecordingsfilenameipbxpbxid) | **GET** /recordings/{filename}/ipbx/{pbxId} | 
[**postRecordingsBatchdelete**](RecordingsApi.md#postrecordingsbatchdelete) | **POST** /recordings/batch-delete | Batch delete recordings

# **getRecordings**
> \Voipex\Ipbx\Model\Model13 getRecordings($start_time, $end_time, $page, $page_size, $pbx_id)

Get all recording names based on the input filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO 8601 format
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO 8601 format
$page = 1; // float | 
$page_size = 1000; // float | 
$pbx_id = "pbx_id_example"; // string | 

try {
    $result = $apiInstance->getRecordings($start_time, $end_time, $page, $page_size, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **\DateTime**| ISO 8601 format | [optional]
 **end_time** | **\DateTime**| ISO 8601 format | [optional]
 **page** | **float**|  | [optional] [default to 1]
 **page_size** | **float**|  | [optional] [default to 1000]
 **pbx_id** | **string**|  | [optional]

### Return type

[**\Voipex\Ipbx\Model\Model13**](../Model/Model13.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingsDownload**
> string getRecordingsDownload($call_id)

Download all recordings based on callId as a .zip archive

CallId is represented as linkedid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_id = array("call_id_example"); // string[] | Represents linkedid

try {
    $result = $apiInstance->getRecordingsDownload($call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordingsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_id** | [**string[]**](../Model/string.md)| Represents linkedid |

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingsFilename**
> string getRecordingsFilename($filename, $pbx_id)

Play recording specified by filename

Extension must be provided in filename parameter. Extension .flac for filename is allowed only for PBX with enabled module enhanced recordings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = "filename_example"; // string | 
$pbx_id = "pbx_id_example"; // string | 

try {
    $result = $apiInstance->getRecordingsFilename($filename, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordingsFilename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**|  |
 **pbx_id** | **string**|  | [optional]

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingsFilenameIpbxPbxid**
> string getRecordingsFilenameIpbxPbxid($filename, $pbx_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = "filename_example"; // string | 
$pbx_id = "pbx_id_example"; // string | 

try {
    $result = $apiInstance->getRecordingsFilenameIpbxPbxid($filename, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordingsFilenameIpbxPbxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**|  |
 **pbx_id** | **string**|  |

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingsBatchdelete**
> \Voipex\Ipbx\Model\Model54 postRecordingsBatchdelete($body, $pbx_id)

Batch delete recordings

Filenames obtained from the CDR. It is possible to delete mp3 and also flac files. You can use a list of file names or a user filter to delete recordings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Voipex\Ipbx\Model\Model52(); // \Voipex\Ipbx\Model\Model52 | 
$pbx_id = 1.2; // float | Optional pbxId

try {
    $result = $apiInstance->postRecordingsBatchdelete($body, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->postRecordingsBatchdelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Voipex\Ipbx\Model\Model52**](../Model/Model52.md)|  | [optional]
 **pbx_id** | **float**| Optional pbxId | [optional]

### Return type

[**\Voipex\Ipbx\Model\Model54**](../Model/Model54.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

