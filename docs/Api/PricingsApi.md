# Swagger\Client\PricingsApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPricingsByTld**](PricingsApi.md#getpricingsbytld) | **GET** /pricings/pricings-tld | Tld Bazında Fiyat Getir

# **getPricingsByTld**
> \Swagger\Client\Model\GeneralWebServiceResponse getPricingsByTld($tld, $duration)

Tld Bazında Fiyat Getir

Giriş yapmış müşterinin seçebileceği fiyat bilgilerini tld’ye göre getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\PricingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tld = ""; // string | Alan adının tld bilgisi.
$duration = 56; // int | Yıl bilgisi.

try {
    $result = $apiInstance->getPricingsByTld($tld, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingsApi->getPricingsByTld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tld** | **string**| Alan adının tld bilgisi. |
 **duration** | **int**| Yıl bilgisi. |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

