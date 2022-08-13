# Swagger\Client\InvoicesApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoicesByClient**](InvoicesApi.md#getinvoicesbyclient) | **GET** /invoices | Makbuz Getir

# **getInvoicesByClient**
> \Swagger\Client\Model\GeneralWebServiceResponse getInvoicesByClient($status, $currency)

Makbuz Getir

Giriş yapmış müşterinin makbuz bilgilerini getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "open"; // string | Makbuzun durumu.
$currency = "TRY"; // string | Makbuzun ödenmesi gereken para kuru.

try {
    $result = $apiInstance->getInvoicesByClient($status, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoicesByClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Makbuzun durumu. | [optional] [default to open]
 **currency** | **string**| Makbuzun ödenmesi gereken para kuru. | [optional] [default to TRY]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

