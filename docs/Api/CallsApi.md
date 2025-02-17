# Voipex\Ipbx\CallsApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCalls()**](CallsApi.md#deleteCalls) | **DELETE** /calls | Hangup call |
| [**deleteCallsTransfer()**](CallsApi.md#deleteCallsTransfer) | **DELETE** /calls/transfer | Cancel an attended transfer |
| [**getCalls()**](CallsApi.md#getCalls) | **GET** /calls | Returns list of calls |
| [**getCallsCallidDetail()**](CallsApi.md#getCallsCallidDetail) | **GET** /calls/{callId}/detail | Returns data for specified callId |
| [**getCallsCallidRecordings()**](CallsApi.md#getCallsCallidRecordings) | **GET** /calls/{callId}/recordings | Returns all recordings for specified callId |
| [**getCallsCallidTranscript()**](CallsApi.md#getCallsCallidTranscript) | **GET** /calls/{callId}/transcript | Returns transcript of all recordings for specified callId |
| [**getCallsCurrent()**](CallsApi.md#getCallsCurrent) | **GET** /calls/current | Return current calls |
| [**getCallsMissed()**](CallsApi.md#getCallsMissed) | **GET** /calls/missed | Missed and abandoned calls from the call center queues. |
| [**getCallsTransferDestinations()**](CallsApi.md#getCallsTransferDestinations) | **GET** /calls/transfer/destinations | List of destinations for a transferred call. |
| [**postCalls()**](CallsApi.md#postCalls) | **POST** /calls | Create new call |
| [**putCallsMonitor()**](CallsApi.md#putCallsMonitor) | **PUT** /calls/monitor | Monitor call |
| [**putCallsTransfer()**](CallsApi.md#putCallsTransfer) | **PUT** /calls/transfer | Transfer a call |


## `deleteCalls()`

```php
deleteCalls($channel_id, $call_id, $user_id): string
```

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
$channel_id = 'channel_id_example'; // string | Channel ID
$call_id = 'call_id_example'; // string | Call Id
$user_id = 'user_id_example'; // string | User ID

try {
    $result = $apiInstance->deleteCalls($channel_id, $call_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->deleteCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Channel ID | [optional] |
| **call_id** | **string**| Call Id | [optional] |
| **user_id** | **string**| User ID | [optional] |

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

## `deleteCallsTransfer()`

```php
deleteCallsTransfer($model55): string
```

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
$model55 = new \Voipex\Ipbx\Model\Model55(); // \Voipex\Ipbx\Model\Model55

try {
    $result = $apiInstance->deleteCallsTransfer($model55);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->deleteCallsTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model55** | [**\Voipex\Ipbx\Model\Model55**](../Model/Model55.md)|  | [optional] |

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

## `getCalls()`

```php
getCalls($linkedid, $src, $dst, $line, $trunk, $phone_number, $categories, $teams, $extensions, $metadata, $disposition, $way, $page, $page_size, $start_time, $end_time, $src_filter, $dst_filter, $line_filter, $trunk_filter, $phone_number_filter, $sort_column, $sort_direction, $timezone): \Voipex\Ipbx\Model\Model3
```

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
$linkedid = 'linkedid_example'; // string
$src = 'src_example'; // string
$dst = 'dst_example'; // string
$line = 'line_example'; // string
$trunk = 'trunk_example'; // string
$phone_number = 'phone_number_example'; // string
$categories = array(new \Voipex\Ipbx\Model\float[]()); // float[][] | Nested array of call category ID to filter. Example: [[1,2] , [3]] => (1 or 2) and 3
$teams = array(3.4); // float[] | Array of team ID to filter
$extensions = array('extensions_example'); // string[] | Array of extensions to filter
$metadata = True; // bool | Add metadata to call (category, note)
$disposition = 'disposition_example'; // string
$way = 'way_example'; // string | Call direction (Loc - local, In - incoming, Out - outgoing)
$page = 1; // float
$page_size = 100; // float | Maximum is 5000
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$src_filter = 'equal'; // string
$dst_filter = 'equal'; // string
$line_filter = 'equal'; // string
$trunk_filter = 'equal'; // string
$phone_number_filter = 'equal'; // string
$sort_column = 'sort_column_example'; // string | Enter column name for sorting
$sort_direction = 'asc'; // string | Enter sort direction
$timezone = 'Europe/Prague'; // string | Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/)

try {
    $result = $apiInstance->getCalls($linkedid, $src, $dst, $line, $trunk, $phone_number, $categories, $teams, $extensions, $metadata, $disposition, $way, $page, $page_size, $start_time, $end_time, $src_filter, $dst_filter, $line_filter, $trunk_filter, $phone_number_filter, $sort_column, $sort_direction, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkedid** | **string**|  | [optional] |
| **src** | **string**|  | [optional] |
| **dst** | **string**|  | [optional] |
| **line** | **string**|  | [optional] |
| **trunk** | **string**|  | [optional] |
| **phone_number** | **string**|  | [optional] |
| **categories** | [**float[][]**](../Model/float[].md)| Nested array of call category ID to filter. Example: [[1,2] , [3]] &#x3D;&gt; (1 or 2) and 3 | [optional] |
| **teams** | [**float[]**](../Model/float.md)| Array of team ID to filter | [optional] |
| **extensions** | [**string[]**](../Model/string.md)| Array of extensions to filter | [optional] |
| **metadata** | **bool**| Add metadata to call (category, note) | [optional] |
| **disposition** | **string**|  | [optional] |
| **way** | **string**| Call direction (Loc - local, In - incoming, Out - outgoing) | [optional] |
| **page** | **float**|  | [optional] [default to 1] |
| **page_size** | **float**| Maximum is 5000 | [optional] [default to 100] |
| **start_time** | **\DateTime**| ISO 8601 format | [optional] |
| **end_time** | **\DateTime**| ISO 8601 format | [optional] |
| **src_filter** | **string**|  | [optional] [default to &#39;equal&#39;] |
| **dst_filter** | **string**|  | [optional] [default to &#39;equal&#39;] |
| **line_filter** | **string**|  | [optional] [default to &#39;equal&#39;] |
| **trunk_filter** | **string**|  | [optional] [default to &#39;equal&#39;] |
| **phone_number_filter** | **string**|  | [optional] [default to &#39;equal&#39;] |
| **sort_column** | **string**| Enter column name for sorting | [optional] |
| **sort_direction** | **string**| Enter sort direction | [optional] [default to &#39;asc&#39;] |
| **timezone** | **string**| Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/) | [optional] [default to &#39;Europe/Prague&#39;] |

### Return type

[**\Voipex\Ipbx\Model\Model3**](../Model/Model3.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallsCallidDetail()`

```php
getCallsCallidDetail($call_id, $pbx_id, $timezone): \Voipex\Ipbx\Model\Model30[]
```

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
$call_id = 'call_id_example'; // string | Represents linkedid
$pbx_id = 3.4; // float | Pbx id
$timezone = 'Europe/Prague'; // string | Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/)

try {
    $result = $apiInstance->getCallsCallidDetail($call_id, $pbx_id, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCallidDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_id** | **string**| Represents linkedid | |
| **pbx_id** | **float**| Pbx id | [optional] |
| **timezone** | **string**| Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/) | [optional] [default to &#39;Europe/Prague&#39;] |

### Return type

[**\Voipex\Ipbx\Model\Model30[]**](../Model/Model30.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallsCallidRecordings()`

```php
getCallsCallidRecordings($call_id, $pbx_id, $extensions): \Voipex\Ipbx\Model\Model28[]
```

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
$call_id = 'call_id_example'; // string | Represents linkedid
$pbx_id = 3.4; // float | Pbx id
$extensions = array([[\"mp3\"]]); // string[]

try {
    $result = $apiInstance->getCallsCallidRecordings($call_id, $pbx_id, $extensions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCallidRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_id** | **string**| Represents linkedid | |
| **pbx_id** | **float**| Pbx id | [optional] |
| **extensions** | [**string[]**](../Model/string.md)|  | [optional] [default to [[&quot;mp3&quot;]]] |

### Return type

[**\Voipex\Ipbx\Model\Model28[]**](../Model/Model28.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallsCallidTranscript()`

```php
getCallsCallidTranscript($call_id, $pbx_id): \Voipex\Ipbx\Model\Model33[]
```

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
$call_id = 'call_id_example'; // string | Call ID
$pbx_id = 3.4; // float | PBX ID

try {
    $result = $apiInstance->getCallsCallidTranscript($call_id, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCallidTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_id** | **string**| Call ID | |
| **pbx_id** | **float**| PBX ID | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model33[]**](../Model/Model33.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallsCurrent()`

```php
getCallsCurrent($pbx_id, $user_id, $user_login, $call_id): \Voipex\Ipbx\Model\Model15[]
```

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
$pbx_id = 3.4; // float | PBX ID
$user_id = 'user_id_example'; // string | User Id
$user_login = 'user_login_example'; // string | User login
$call_id = 'call_id_example'; // string | Call id

try {
    $result = $apiInstance->getCallsCurrent($pbx_id, $user_id, $user_login, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pbx_id** | **float**| PBX ID | [optional] |
| **user_id** | **string**| User Id | [optional] |
| **user_login** | **string**| User login | [optional] |
| **call_id** | **string**| Call id | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model15[]**](../Model/Model15.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallsMissed()`

```php
getCallsMissed(): \Voipex\Ipbx\Model\Model18[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Voipex\Ipbx\Model\Model18[]**](../Model/Model18.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallsTransferDestinations()`

```php
getCallsTransferDestinations(): \Voipex\Ipbx\Model\Model26[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Voipex\Ipbx\Model\Model26[]**](../Model/Model26.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCalls()`

```php
postCalls($pbx_id, $model50): \Voipex\Ipbx\Model\Model51
```

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
$pbx_id = 3.4; // float
$model50 = new \Voipex\Ipbx\Model\Model50(); // \Voipex\Ipbx\Model\Model50

try {
    $result = $apiInstance->postCalls($pbx_id, $model50);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->postCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pbx_id** | **float**|  | [optional] |
| **model50** | [**\Voipex\Ipbx\Model\Model50**](../Model/Model50.md)|  | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model51**](../Model/Model51.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCallsMonitor()`

```php
putCallsMonitor($channel_id, $user_id, $type): \Voipex\Ipbx\Model\Model43
```

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
$channel_id = 'channel_id_example'; // string | Channel ID
$user_id = 'user_id_example'; // string | Monitoring user ID. By default, the user is taken from the authentication data. (Optional)
$type = 'spy'; // string | Spy or whisper

try {
    $result = $apiInstance->putCallsMonitor($channel_id, $user_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->putCallsMonitor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Channel ID | |
| **user_id** | **string**| Monitoring user ID. By default, the user is taken from the authentication data. (Optional) | [optional] |
| **type** | **string**| Spy or whisper | [optional] [default to &#39;spy&#39;] |

### Return type

[**\Voipex\Ipbx\Model\Model43**](../Model/Model43.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCallsTransfer()`

```php
putCallsTransfer($model45): string
```

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
$model45 = new \Voipex\Ipbx\Model\Model45(); // \Voipex\Ipbx\Model\Model45

try {
    $result = $apiInstance->putCallsTransfer($model45);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->putCallsTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model45** | [**\Voipex\Ipbx\Model\Model45**](../Model/Model45.md)|  | [optional] |

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
