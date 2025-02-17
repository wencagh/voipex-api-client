# Voipex\Ipbx\RecordingsApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRecordings()**](RecordingsApi.md#getRecordings) | **GET** /recordings | Get all recording names based on the input filter. |
| [**getRecordingsDownload()**](RecordingsApi.md#getRecordingsDownload) | **GET** /recordings/download | Download all recordings based on callId as a .zip archive |
| [**getRecordingsFilename()**](RecordingsApi.md#getRecordingsFilename) | **GET** /recordings/{filename} | Play recording specified by filename |
| [**getRecordingsFilenameIpbxPbxid()**](RecordingsApi.md#getRecordingsFilenameIpbxPbxid) | **GET** /recordings/{filename}/ipbx/{pbxId} |  |
| [**postRecordingsBatchdelete()**](RecordingsApi.md#postRecordingsBatchdelete) | **POST** /recordings/batch-delete | Batch delete recordings |


## `getRecordings()`

```php
getRecordings($start_time, $end_time, $page, $page_size, $pbx_id): \Voipex\Ipbx\Model\Model13
```

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
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$page = 1; // float
$page_size = 1000; // float
$pbx_id = 'pbx_id_example'; // string

try {
    $result = $apiInstance->getRecordings($start_time, $end_time, $page, $page_size, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_time** | **\DateTime**| ISO 8601 format | [optional] |
| **end_time** | **\DateTime**| ISO 8601 format | [optional] |
| **page** | **float**|  | [optional] [default to 1] |
| **page_size** | **float**|  | [optional] [default to 1000] |
| **pbx_id** | **string**|  | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model13**](../Model/Model13.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecordingsDownload()`

```php
getRecordingsDownload($call_id): string
```

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
$call_id = array('call_id_example'); // string[] | Represents linkedid

try {
    $result = $apiInstance->getRecordingsDownload($call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordingsDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_id** | [**string[]**](../Model/string.md)| Represents linkedid | |

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecordingsFilename()`

```php
getRecordingsFilename($filename, $pbx_id): string
```

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
$filename = 'filename_example'; // string
$pbx_id = 'pbx_id_example'; // string

try {
    $result = $apiInstance->getRecordingsFilename($filename, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordingsFilename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**|  | |
| **pbx_id** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecordingsFilenameIpbxPbxid()`

```php
getRecordingsFilenameIpbxPbxid($filename, $pbx_id): string
```



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
$filename = 'filename_example'; // string
$pbx_id = 'pbx_id_example'; // string

try {
    $result = $apiInstance->getRecordingsFilenameIpbxPbxid($filename, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->getRecordingsFilenameIpbxPbxid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**|  | |
| **pbx_id** | **string**|  | |

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRecordingsBatchdelete()`

```php
postRecordingsBatchdelete($pbx_id, $model52): \Voipex\Ipbx\Model\Model54
```

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
$pbx_id = 3.4; // float | Optional pbxId
$model52 = new \Voipex\Ipbx\Model\Model52(); // \Voipex\Ipbx\Model\Model52

try {
    $result = $apiInstance->postRecordingsBatchdelete($pbx_id, $model52);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->postRecordingsBatchdelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pbx_id** | **float**| Optional pbxId | [optional] |
| **model52** | [**\Voipex\Ipbx\Model\Model52**](../Model/Model52.md)|  | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model54**](../Model/Model54.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
