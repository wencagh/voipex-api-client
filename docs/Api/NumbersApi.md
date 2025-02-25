# Voipex\Ipbx\NumbersApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNumbers()**](NumbersApi.md#getNumbers) | **GET** /numbers | Get all numbers |
| [**getNumbersNumberid()**](NumbersApi.md#getNumbersNumberid) | **GET** /numbers/{numberId} | Get number info |


## `getNumbers()`

```php
getNumbers($pbx_id, $type, $owner_type): \Voipex\Ipbx\Model\Model7[]
```

Get all numbers

Get all lines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pbx_id = 3.4; // float | Pbx id
$type = 'type_example'; // string
$owner_type = 'owner_type_example'; // string

try {
    $result = $apiInstance->getNumbers($pbx_id, $type, $owner_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pbx_id** | **float**| Pbx id | [optional] |
| **type** | **string**|  | [optional] |
| **owner_type** | **string**|  | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model7[]**](../Model/Model7.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumbersNumberid()`

```php
getNumbersNumberid($number_id, $pbx_id): \Voipex\Ipbx\Model\Model7
```

Get number info

Get info about concrete number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number_id = 'number_id_example'; // string | Number id
$pbx_id = 3.4; // float | Pbx id

try {
    $result = $apiInstance->getNumbersNumberid($number_id, $pbx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getNumbersNumberid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number_id** | **string**| Number id | |
| **pbx_id** | **float**| Pbx id | [optional] |

### Return type

[**\Voipex\Ipbx\Model\Model7**](../Model/Model7.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
