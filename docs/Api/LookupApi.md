# Swagger\Client\LookupApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries**](LookupApi.md#getcountries) | **GET** /lookup/countries | Ülke listesi getir
[**getStates**](LookupApi.md#getstates) | **GET** /lookup/states/{countryCode} | İl/eyalet listesi getir
[**getTldCountries**](LookupApi.md#gettldcountries) | **GET** /lookup/tld/countries | (TLD) Ülke listesi getir
[**getTldStates**](LookupApi.md#gettldstates) | **GET** /lookup/tld/states/{countryCode} | (TLD) İl/eyalet listesi getir
[**getTrCountries**](LookupApi.md#gettrcountries) | **GET** /lookup/tr/countries | (TR) Ülke listesi getir
[**getTrStates**](LookupApi.md#gettrstates) | **GET** /lookup/tr/states/{countryCode} | (TR) İl/eyalet listesi getir

# **getCountries**
> \Swagger\Client\Model\GeneralWebServiceResponse getCountries()

Ülke listesi getir

Contact oluştururken kullanılabilecek alfa-2 ülke kodlarının listesini getirir. Bu servis *deprecated* olarak işaretlenmiştir bu servis yerine [/lookup/tld/countries](#operation/getTldCountries) servisinin kullanılması tavsiye edilir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStates**
> \Swagger\Client\Model\GeneralWebServiceResponse getStates($country_code)

İl/eyalet listesi getir

Contact oluştururken kullanılabilecek il/eyalet kodlarının listesini getirir. Bu servis *deprecated* olarak işaretlenmiştir bu servis yerine [/lookup/tld/states/{countryCode}](#operation/getTldStates) servisinin kullanılması tavsiye edilir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | Alfa-2 ülke kodu

try {
    $result = $apiInstance->getStates($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Alfa-2 ülke kodu |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTldCountries**
> \Swagger\Client\Model\GeneralWebServiceResponse getTldCountries()

(TLD) Ülke listesi getir

Contact oluştururken kullanılabilecek alfa-2 ülke kodlarının listesini getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTldCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getTldCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTldStates**
> \Swagger\Client\Model\GeneralWebServiceResponse getTldStates($country_code)

(TLD) İl/eyalet listesi getir

Contact oluştururken kullanılabilecek il/eyalet kodlarının listesini getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | Alfa-2 ülke kodu

try {
    $result = $apiInstance->getTldStates($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getTldStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Alfa-2 ülke kodu |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrCountries**
> \Swagger\Client\Model\GeneralWebServiceResponse getTrCountries()

(TR) Ülke listesi getir

.TR siparişi verilirken kullanılabilecek ülke kodlarının listesini getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTrCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getTrCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrStates**
> \Swagger\Client\Model\GeneralWebServiceResponse getTrStates($country_code)

(TR) İl/eyalet listesi getir

.TR siparişi verilirken kullanılabilecek il/eyalet kodlarının listesini getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 56; // int | 

try {
    $result = $apiInstance->getTrStates($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getTrStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **int**|  |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

