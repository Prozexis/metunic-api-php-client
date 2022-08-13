# Swagger\Client\TransferApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transferAdd**](TransferApi.md#transferadd) | **POST** /transfers/tld/add | (TLD) Transfer İşlemi Başlat
[**transferListTransferIn**](TransferApi.md#transferlisttransferin) | **GET** /transfers/tld/{serviceId}/status | (TLD) Transfer İşlemi Durumu

# **transferAdd**
> \Swagger\Client\Model\GeneralWebServiceResponse transferAdd($auth, $domain)

(TLD) Transfer İşlemi Başlat

Belirtilen alan adının transfer işlemini başlatan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth = "auth_example"; // string | 
$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->transferAdd($auth, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth** | **string**|  |
 **domain** | **string**|  |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferListTransferIn**
> \Swagger\Client\Model\GeneralWebServiceResponse transferListTransferIn($service_id)

(TLD) Transfer İşlemi Durumu

Giriş yapmış müşterinin seçili servisinin transfer işleminin mevcut durumu dönülür.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | 

try {
    $result = $apiInstance->transferListTransferIn($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferListTransferIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

