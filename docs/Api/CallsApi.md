# Voipex\Ipbx\CallsApi

All URIs are relative to *http://ipbxapi.voipex.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCalls**](CallsApi.md#deletecalls) | **DELETE** /calls | Hangup call
[**deleteCallsTransfer**](CallsApi.md#deletecallstransfer) | **DELETE** /calls/transfer | Cancel an attended transfer
[**getCalls**](CallsApi.md#getcalls) | **GET** /calls | Returns list of calls
[**getCallsCallidDetail**](CallsApi.md#getcallscalliddetail) | **GET** /calls/{callId}/detail | Returns data for specified callId
[**getCallsCallidRecordings**](CallsApi.md#getcallscallidrecordings) | **GET** /calls/{callId}/recordings | Returns all recordings for specified callId
[**getCallsCallidTranscript**](CallsApi.md#getcallscallidtranscript) | **GET** /calls/{callId}/transcript | Returns transcript of all recordings for specified callId
[**getCallsCurrent**](CallsApi.md#getcallscurrent) | **GET** /calls/current | Return current calls
[**getCallsMissed**](CallsApi.md#getcallsmissed) | **GET** /calls/missed | Missed and abandoned calls from the call center queues.
[**getCallsTransferDestinations**](CallsApi.md#getcallstransferdestinations) | **GET** /calls/transfer/destinations | List of destinations for a transferred call.
[**postCalls**](CallsApi.md#postcalls) | **POST** /calls | Create new call
[**putCallsMonitor**](CallsApi.md#putcallsmonitor) | **PUT** /calls/monitor | Monitor call
[**putCallsTransfer**](CallsApi.md#putcallstransfer) | **PUT** /calls/transfer | Transfer a call

# **deleteCalls**
> string deleteCalls($channel_id, $call_id, $user_id)

Hangup call

Hangup call based on a specified identifier. The default identifier is the userId from the authentication data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "channel_id_example"; // string | Channel ID
$call_id = "call_id_example"; // string | Call Id
$user_id = "user_id_example"; // string | User ID

try {
    $result = $apiInstance->deleteCalls($channel_id, $call_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->deleteCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel ID | [optional]
 **call_id** | **string**| Call Id | [optional]
 **user_id** | **string**| User ID | [optional]

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCallsTransfer**
> string deleteCallsTransfer($body)

Cancel an attended transfer

Cancel an attended transfer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Voipex\Ipbx\Model\Model55(); // \Voipex\Ipbx\Model\Model55 | 

try {
    $result = $apiInstance->deleteCallsTransfer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->deleteCallsTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Voipex\Ipbx\Model\Model55**](../Model/Model55.md)|  | [optional]

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalls**
> \Voipex\Ipbx\Model\Model3 getCalls($linkedid, $src, $dst, $line, $trunk, $phone_number, $categories, $teams, $extensions, $metadata, $disposition, $way, $page, $page_size, $start_time, $end_time, $src_filter, $dst_filter, $line_filter, $trunk_filter, $phone_number_filter, $sort_column, $sort_direction, $timezone)

Returns list of calls

Returns list of calls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkedid = "linkedid_example"; // string | 
$src = "src_example"; // string | 
$dst = "dst_example"; // string | 
$line = "line_example"; // string | 
$trunk = "trunk_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$categories = array(new \Voipex\Ipbx\Model\float[]()); // float[][] | Nested array of call category ID to filter. Example: [[1,2] , [3]] => (1 or 2) and 3
$teams = array(3.4); // float[] | Array of team ID to filter
$extensions = array("extensions_example"); // string[] | Array of extensions to filter
$metadata = true; // bool | Add metadata to call (category, note)
$disposition = "disposition_example"; // string | 
$way = "way_example"; // string | Call direction (Loc - local, In - incoming, Out - outgoing)
$page = 1; // float | 
$page_size = 100; // float | Maximum is 5000
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO 8601 format
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO 8601 format
$src_filter = "equal"; // string | 
$dst_filter = "equal"; // string | 
$line_filter = "equal"; // string | 
$trunk_filter = "equal"; // string | 
$phone_number_filter = "equal"; // string | 
$sort_column = "sort_column_example"; // string | Enter column name for sorting
$sort_direction = "asc"; // string | Enter sort direction
$timezone = "Europe/Prague"; // string | Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/)

try {
    $result = $apiInstance->getCalls($linkedid, $src, $dst, $line, $trunk, $phone_number, $categories, $teams, $extensions, $metadata, $disposition, $way, $page, $page_size, $start_time, $end_time, $src_filter, $dst_filter, $line_filter, $trunk_filter, $phone_number_filter, $sort_column, $sort_direction, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkedid** | **string**|  | [optional]
 **src** | **string**|  | [optional]
 **dst** | **string**|  | [optional]
 **line** | **string**|  | [optional]
 **trunk** | **string**|  | [optional]
 **phone_number** | **string**|  | [optional]
 **categories** | [**float[][]**](../Model/float[].md)| Nested array of call category ID to filter. Example: [[1,2] , [3]] &#x3D;&gt; (1 or 2) and 3 | [optional]
 **teams** | [**float[]**](../Model/float.md)| Array of team ID to filter | [optional]
 **extensions** | [**string[]**](../Model/string.md)| Array of extensions to filter | [optional]
 **metadata** | **bool**| Add metadata to call (category, note) | [optional]
 **disposition** | **string**|  | [optional]
 **way** | **string**| Call direction (Loc - local, In - incoming, Out - outgoing) | [optional]
 **page** | **float**|  | [optional] [default to 1]
 **page_size** | **float**| Maximum is 5000 | [optional] [default to 100]
 **start_time** | **\DateTime**| ISO 8601 format | [optional]
 **end_time** | **\DateTime**| ISO 8601 format | [optional]
 **src_filter** | **string**|  | [optional] [default to equal]
 **dst_filter** | **string**|  | [optional] [default to equal]
 **line_filter** | **string**|  | [optional] [default to equal]
 **trunk_filter** | **string**|  | [optional] [default to equal]
 **phone_number_filter** | **string**|  | [optional] [default to equal]
 **sort_column** | **string**| Enter column name for sorting | [optional]
 **sort_direction** | **string**| Enter sort direction | [optional] [default to asc]
 **timezone** | **string**| Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/) | [optional] [default to Europe/Prague]

### Return type

[**\Voipex\Ipbx\Model\Model3**](../Model/Model3.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsCallidDetail**
> \Voipex\Ipbx\Model\Model31 getCallsCallidDetail($call_id, $pbx_id, $timezone)

Returns data for specified callId

Return data for specified callId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_id = "call_id_example"; // string | Represents linkedid
$pbx_id = 1.2; // float | Pbx id
$timezone = "Europe/Prague"; // string | Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/)

try {
    $result = $apiInstance->getCallsCallidDetail($call_id, $pbx_id, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCallidDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_id** | **string**| Represents linkedid |
 **pbx_id** | **float**| Pbx id | [optional]
 **timezone** | **string**| Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/) | [optional] [default to Europe/Prague]

### Return type

[**\Voipex\Ipbx\Model\Model31**](../Model/Model31.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsCallidRecordings**
> \Voipex\Ipbx\Model\Model29 getCallsCallidRecordings($call_id, $pbx_id, $extensions)

Returns all recordings for specified callId

Returns all recordings for specified callId from database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_id = "call_id_example"; // string | Represents linkedid
$pbx_id = 1.2; // float | Pbx id
$extensions = array("[\"mp3\"]"); // string[] | 

try {
    $result = $apiInstance->getCallsCallidRecordings($call_id, $pbx_id, $extensions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCallidRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_id** | **string**| Represents linkedid |
 **pbx_id** | **float**| Pbx id | [optional]
 **extensions** | [**string[]**](../Model/string.md)|  | [optional] [default to [&quot;mp3&quot;]]

### Return type

[**\Voipex\Ipbx\Model\Model29**](../Model/Model29.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsCallidTranscript**
> \Voipex\Ipbx\Model\Model34 getCallsCallidTranscript($call_id, $pbx_id)

Returns transcript of all recordings for specified callId

Returns transcript of all recordings for specified callId. <a href=\"https://cloud.google.com/speech-to-text/quotas\">Limits and restrictions </a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_id = "call_id_example"; // string | Call ID
$pbx_id = 1.2; // float | PBX ID

try {
    $result = $apiInstance->getCallsCallidTranscript($call_id, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCallidTranscript: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_id** | **string**| Call ID |
 **pbx_id** | **float**| PBX ID | [optional]

### Return type

[**\Voipex\Ipbx\Model\Model34**](../Model/Model34.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsCurrent**
> \Voipex\Ipbx\Model\Model16 getCallsCurrent($pbx_id, $user_id, $user_login, $call_id)

Return current calls

Return current calls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pbx_id = 1.2; // float | PBX ID
$user_id = "user_id_example"; // string | User Id
$user_login = "user_login_example"; // string | User login
$call_id = "call_id_example"; // string | Call id

try {
    $result = $apiInstance->getCallsCurrent($pbx_id, $user_id, $user_login, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCurrent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_id** | **float**| PBX ID | [optional]
 **user_id** | **string**| User Id | [optional]
 **user_login** | **string**| User login | [optional]
 **call_id** | **string**| Call id | [optional]

### Return type

[**\Voipex\Ipbx\Model\Model16**](../Model/Model16.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsMissed**
> \Voipex\Ipbx\Model\Model19 getCallsMissed()

Missed and abandoned calls from the call center queues.

Returns missed and abandoned calls from the call center queues. This is the same data as in the agent/supervisor panel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCallsMissed();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsMissed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Voipex\Ipbx\Model\Model19**](../Model/Model19.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsTransferDestinations**
> \Voipex\Ipbx\Model\Model27 getCallsTransferDestinations()

List of destinations for a transferred call.

List of destinations for a transferred call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCallsTransferDestinations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsTransferDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Voipex\Ipbx\Model\Model27**](../Model/Model27.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCalls**
> \Voipex\Ipbx\Model\Model51 postCalls($body, $pbx_id)

Create new call

Create new call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Voipex\Ipbx\Model\Model50(); // \Voipex\Ipbx\Model\Model50 | 
$pbx_id = 1.2; // float | 

try {
    $result = $apiInstance->postCalls($body, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->postCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Voipex\Ipbx\Model\Model50**](../Model/Model50.md)|  | [optional]
 **pbx_id** | **float**|  | [optional]

### Return type

[**\Voipex\Ipbx\Model\Model51**](../Model/Model51.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCallsMonitor**
> \Voipex\Ipbx\Model\Model43 putCallsMonitor($channel_id, $user_id, $type)

Monitor call

Monitor call specified by channel ID. Choose monitor type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = "channel_id_example"; // string | Channel ID
$user_id = "user_id_example"; // string | Monitoring user ID. By default, the user is taken from the authentication data. (Optional)
$type = "spy"; // string | Spy or whisper

try {
    $result = $apiInstance->putCallsMonitor($channel_id, $user_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->putCallsMonitor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel ID |
 **user_id** | **string**| Monitoring user ID. By default, the user is taken from the authentication data. (Optional) | [optional]
 **type** | **string**| Spy or whisper | [optional] [default to spy]

### Return type

[**\Voipex\Ipbx\Model\Model43**](../Model/Model43.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCallsTransfer**
> string putCallsTransfer($body)

Transfer a call

The remote caller be transferred to a given destination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Voipex\Ipbx\Model\Model45(); // \Voipex\Ipbx\Model\Model45 | 

try {
    $result = $apiInstance->putCallsTransfer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->putCallsTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Voipex\Ipbx\Model\Model45**](../Model/Model45.md)|  | [optional]

### Return type

**string**

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

