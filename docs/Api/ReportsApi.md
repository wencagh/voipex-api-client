# Voipex\Ipbx\ReportsApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReportsAgentsActivity()**](ReportsApi.md#getReportsAgentsActivity) | **GET** /reports/agents/activity | Get agents activity |
| [**getReportsAgentsActivitydurations()**](ReportsApi.md#getReportsAgentsActivitydurations) | **GET** /reports/agents/activity-durations | Get agents activity durations |
| [**getReportsAgentsDailystats()**](ReportsApi.md#getReportsAgentsDailystats) | **GET** /reports/agents/daily-stats | Daily agent statistics |
| [**getReportsCalls()**](ReportsApi.md#getReportsCalls) | **GET** /reports/calls | Returns extended calls information |
| [**getReportsQueues()**](ReportsApi.md#getReportsQueues) | **GET** /reports/queues | Return statistics for queues |


## `getReportsAgentsActivity()`

```php
getReportsAgentsActivity($start_time, $end_time, $timezone, $queues, $agents, $events, $page, $page_size): \Voipex\Ipbx\Model\Model38
```

Get agents activity

Return information about agents activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$timezone = 'Europe/Prague'; // string | Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/)
$queues = array('queues_example'); // string[]
$agents = array('agents_example'); // string[]
$events = array('events_example'); // string[] | Possible values: UNPAUSE, PAUSE, ADDMEMBER, REMOVEMEMBER, ADDMEMBEREXTEN, COMPLETEAGENT, COMPLETECALLER, MEMBERSTATUS, MEMBERPRESENCE
$page = 1; // float
$page_size = 1000; // float | Maximum is 5000

try {
    $result = $apiInstance->getReportsAgentsActivity($start_time, $end_time, $timezone, $queues, $agents, $events, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportsAgentsActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_time** | **\DateTime**| ISO 8601 format | [optional] |
| **end_time** | **\DateTime**| ISO 8601 format | [optional] |
| **timezone** | **string**| Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/) | [optional] [default to &#39;Europe/Prague&#39;] |
| **queues** | [**string[]**](../Model/string.md)|  | [optional] |
| **agents** | [**string[]**](../Model/string.md)|  | [optional] |
| **events** | [**string[]**](../Model/string.md)| Possible values: UNPAUSE, PAUSE, ADDMEMBER, REMOVEMEMBER, ADDMEMBEREXTEN, COMPLETEAGENT, COMPLETECALLER, MEMBERSTATUS, MEMBERPRESENCE | [optional] |
| **page** | **float**|  | [optional] [default to 1] |
| **page_size** | **float**| Maximum is 5000 | [optional] [default to 1000] |

### Return type

[**\Voipex\Ipbx\Model\Model38**](../Model/Model38.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportsAgentsActivitydurations()`

```php
getReportsAgentsActivitydurations($start_time, $end_time, $agents, $timezone): \Voipex\Ipbx\Model\Model39[]
```

Get agents activity durations

Return information about agents activity durations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$agents = array('agents_example'); // string[]
$timezone = 'Europe/Prague'; // string | Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/)

try {
    $result = $apiInstance->getReportsAgentsActivitydurations($start_time, $end_time, $agents, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportsAgentsActivitydurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_time** | **\DateTime**| ISO 8601 format | [optional] |
| **end_time** | **\DateTime**| ISO 8601 format | [optional] |
| **agents** | [**string[]**](../Model/string.md)|  | [optional] |
| **timezone** | **string**| Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/) | [optional] [default to &#39;Europe/Prague&#39;] |

### Return type

[**\Voipex\Ipbx\Model\Model39[]**](../Model/Model39.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportsAgentsDailystats()`

```php
getReportsAgentsDailystats($agents, $users_id): \Voipex\Ipbx\Model\Model41[]
```

Daily agent statistics

Returns daily agent call statistics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agents = array('agents_example'); // string[]
$users_id = array('users_id_example'); // string[]

try {
    $result = $apiInstance->getReportsAgentsDailystats($agents, $users_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportsAgentsDailystats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agents** | [**string[]**](../Model/string.md)|  | [optional] |
| **users_id** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model41[]**](../Model/Model41.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportsCalls()`

```php
getReportsCalls($start_time, $end_time, $queues, $agents, $answered, $direction, $timezone): \Voipex\Ipbx\Model\Model22[]
```

Returns extended calls information

Return extended calls information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | ISO 8601 format
$queues = array('queues_example'); // string[]
$agents = array('agents_example'); // string[]
$answered = True; // bool
$direction = 'direction_example'; // string
$timezone = 'Europe/Prague'; // string | Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/)

try {
    $result = $apiInstance->getReportsCalls($start_time, $end_time, $queues, $agents, $answered, $direction, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportsCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_time** | **\DateTime**| ISO 8601 format | [optional] |
| **end_time** | **\DateTime**| ISO 8601 format | [optional] |
| **queues** | [**string[]**](../Model/string.md)|  | [optional] |
| **agents** | [**string[]**](../Model/string.md)|  | [optional] |
| **answered** | **bool**|  | [optional] |
| **direction** | **string**|  | [optional] |
| **timezone** | **string**| Enter the timezone in which you want to return the call time (possible options get on https://momentjs.com/timezone/) | [optional] [default to &#39;Europe/Prague&#39;] |

### Return type

[**\Voipex\Ipbx\Model\Model22[]**](../Model/Model22.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportsQueues()`

```php
getReportsQueues($start_time, $end_time, $queues, $sla): \Voipex\Ipbx\Model\Model24[]
```

Return statistics for queues

Return call statistics for selected time period for all (or specified) queues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_time = 'start_time_example'; // string | ISO 8601 format
$end_time = 'end_time_example'; // string | ISO 8601 format
$queues = array('queues_example'); // string[] | Queue names to filter
$sla = 20; // float | SLA limit for hold time

try {
    $result = $apiInstance->getReportsQueues($start_time, $end_time, $queues, $sla);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportsQueues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_time** | **string**| ISO 8601 format | [optional] |
| **end_time** | **string**| ISO 8601 format | [optional] |
| **queues** | [**string[]**](../Model/string.md)| Queue names to filter | [optional] |
| **sla** | **float**| SLA limit for hold time | [optional] [default to 20] |

### Return type

[**\Voipex\Ipbx\Model\Model24[]**](../Model/Model24.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
