# Voipex\Ipbx\PausesApi

All URIs are relative to http://ipbxapi.voipex.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPauses()**](PausesApi.md#getPauses) | **GET** /pauses | Get pauses |


## `getPauses()`

```php
getPauses(): \Voipex\Ipbx\Model\Model9[]
```

Get pauses

Get pbx pauses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\PausesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPauses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PausesApi->getPauses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Voipex\Ipbx\Model\Model9[]**](../Model/Model9.md)

### Authorization

[soap](../../README.md#soap)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
