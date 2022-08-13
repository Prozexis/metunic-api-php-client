# Swagger\Client\FileApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadFile**](FileApi.md#downloadfile) | **GET** /file/downloadFile/{fileName} | Belge İndir
[**uploadFile**](FileApi.md#uploadfile) | **POST** /file/uploadfile | Belge Ekle
[**uploadMultipleFiles**](FileApi.md#uploadmultiplefiles) | **POST** /file/uploadMultipleFiles | Çoklu Belge Ekle

# **downloadFile**
> \Swagger\Client\Model\GeneralWebServiceResponse downloadFile($file_name)

Belge İndir

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | Dosya Adı

try {
    $result = $apiInstance->downloadFile($file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Dosya Adı |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \Swagger\Client\Model\GeneralWebServiceResponse uploadFile($domain_name_, $file)

Belge Ekle

Alan adı başvurusuna belge ekleme servisidir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name_ = "domain_name__example"; // string | Alan Adı
$file = "file_example"; // string | 

try {
    $result = $apiInstance->uploadFile($domain_name_, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name_** | **string**| Alan Adı |
 **file** | **string****string**|  | [optional]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMultipleFiles**
> \Swagger\Client\Model\GeneralWebServiceResponse uploadMultipleFiles($files, $domain_name)

Çoklu Belge Ekle

Alan adı başvurusuna belge ekleme servisidir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = array("files_example"); // string[] | Yüklenecek dosyalar
$domain_name = "domain_name_example"; // string | Alan Adı

try {
    $result = $apiInstance->uploadMultipleFiles($files, $domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->uploadMultipleFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)| Yüklenecek dosyalar |
 **domain_name** | **string**| Alan Adı |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

