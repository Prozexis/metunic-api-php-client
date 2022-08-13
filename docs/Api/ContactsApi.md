# Swagger\Client\ContactsApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](ContactsApi.md#add) | **POST** /contacts/add | İletişim Bilgisi Ekle
[**addContactsPhone**](ContactsApi.md#addcontactsphone) | **POST** /contacts/{id}/phones/add | Contact&#x27;a telefon numarası ekle
[**delete**](ContactsApi.md#delete) | **DELETE** /contacts/{id}/delete | İletişim Bilgisi Silme
[**deleteContactsPhone**](ContactsApi.md#deletecontactsphone) | **DELETE** /contacts/{id}/phones/delete | Contactdan telefon numarası silme
[**getContacts**](ContactsApi.md#getcontacts) | **GET** /contacts | İletişim Listesi
[**getContactsAll**](ContactsApi.md#getcontactsall) | **GET** /contacts/{id} | İletişim Bilgisi Getir
[**getContactsPhones**](ContactsApi.md#getcontactsphones) | **GET** /contacts/{id}/phones | Contact&#x27;a ait telefonlar
[**update**](ContactsApi.md#update) | **PUT** /contacts/{id}/edit | İletişim Bilgisi Düzenleme

# **add**
> \Swagger\Client\Model\GeneralWebServiceResponse add($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location)

İletişim Bilgisi Ekle

Giriş yapmış müşteriye yeni iletişim bilgisi eklenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$email = "email_example"; // string | 
$address1 = "address1_example"; // string | 
$city = "city_example"; // string | 
$state = "state_example"; // string | 
$zip = "zip_example"; // string | 
$country = "country_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$title = "title_example"; // string | 
$company = "company_example"; // string | 
$address2 = "address2_example"; // string | 
$phone_number_type = "phone"; // string | 
$phone_number_location = "home"; // string | 

try {
    $result = $apiInstance->add($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **email** | **string**|  |
 **address1** | **string**|  |
 **city** | **string**|  |
 **state** | **string**|  |
 **zip** | **string**|  |
 **country** | **string**|  |
 **phone_number** | **string**|  |
 **title** | **string**|  | [optional]
 **company** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **phone_number_type** | **string**|  | [optional] [default to phone]
 **phone_number_location** | **string**|  | [optional] [default to home]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContactsPhone**
> \Swagger\Client\Model\GeneralWebServiceResponse addContactsPhone($id, $phone_number, $phone_number_type, $phone_number_location)

Contact'a telefon numarası ekle

Giriş yapmış müşterinin seçili contact'ına yeni telefon bilgisi eklenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Contact id
$phone_number = "phone_number_example"; // string | 
$phone_number_type = "phone"; // string | 
$phone_number_location = "home"; // string | 

try {
    $result = $apiInstance->addContactsPhone($id, $phone_number, $phone_number_type, $phone_number_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactsPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Contact id |
 **phone_number** | **string**|  |
 **phone_number_type** | **string**|  | [optional] [default to phone]
 **phone_number_location** | **string**|  | [optional] [default to home]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> \Swagger\Client\Model\GeneralWebServiceResponse delete($id)

İletişim Bilgisi Silme

Giriş yapmış müşterinin seçili iletişim bilgisi silinir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | 

try {
    $result = $apiInstance->delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsPhone**
> \Swagger\Client\Model\GeneralWebServiceResponse deleteContactsPhone($id, $phone_number_id)

Contactdan telefon numarası silme

Giriş yapmış müşterinin seçili contact'ına ait seçili telefon bilgisi silinir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | 
$phone_number_id = 789; // int | 

try {
    $result = $apiInstance->deleteContactsPhone($id, $phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactsPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **phone_number_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Swagger\Client\Model\GeneralWebServiceResponse getContacts()

İletişim Listesi

Giriş yapmış müşterinin iletişim listesi dönülür.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContacts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
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

# **getContactsAll**
> \Swagger\Client\Model\GeneralWebServiceResponse getContactsAll($id)

İletişim Bilgisi Getir

Giriş yapmış müşterinin seçili iletişim bilgisi dönülür.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Contact id

try {
    $result = $apiInstance->getContactsAll($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Contact id |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsPhones**
> \Swagger\Client\Model\GeneralWebServiceResponse getContactsPhones($id)

Contact'a ait telefonlar

Giriş yapmış müşterinin seçili contact'ına ait telefon bilgileri dönülür.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Contact id

try {
    $result = $apiInstance->getContactsPhones($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsPhones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Contact id |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Swagger\Client\Model\GeneralWebServiceResponse update($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location)

İletişim Bilgisi Düzenleme

Giriş yapmış müşterinin seçili iletişim bilgisi düzenlenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | 
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$email = "email_example"; // string | 
$address1 = "address1_example"; // string | 
$city = "city_example"; // string | 
$state = "state_example"; // string | 
$zip = "zip_example"; // string | 
$country = "country_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$title = "title_example"; // string | 
$company = "company_example"; // string | 
$address2 = "address2_example"; // string | 
$phone_number_type = "phone"; // string | 
$phone_number_location = "home"; // string | 

try {
    $result = $apiInstance->update($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **email** | **string**|  |
 **address1** | **string**|  |
 **city** | **string**|  |
 **state** | **string**|  |
 **zip** | **string**|  |
 **country** | **string**|  |
 **phone_number** | **string**|  |
 **title** | **string**|  | [optional]
 **company** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **phone_number_type** | **string**|  | [optional] [default to phone]
 **phone_number_location** | **string**|  | [optional] [default to home]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

