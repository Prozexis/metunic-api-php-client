# Swagger\Client\TransactionsApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCredits**](TransactionsApi.md#getcredits) | **GET** /transactions/credit | Müşterinin Kredi Bilgisini Getir

# **getCredits**
> \Swagger\Client\Model\GeneralWebServiceResponse getCredits($currency)

Müşterinin Kredi Bilgisini Getir

Giriş yapmış müşterinin hesabındaki kredi miktarını getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = "TRY"; // string | Kredi bilgisi istenen kur.

try {
    $result = $apiInstance->getCredits($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Kredi bilgisi istenen kur. | [default to TRY]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

