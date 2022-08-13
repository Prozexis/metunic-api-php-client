# Swagger\Client\ServicesApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNameServers**](ServicesApi.md#addnameservers) | **POST** /services/{serviceId}/tld/nameservers/add | (TLD) Alan Adı Sunucusu Ekle
[**addSubName**](ServicesApi.md#addsubname) | **POST** /services/{serviceId}/tld/subns/add | (TLD) Alt Alan Adı Sunucu Ekleme
[**contactDomainEditRelation**](ServicesApi.md#contactdomaineditrelation) | **PUT** /services/{serviceId}/tld/contacts/update | (TLD) Contact Bilgisini Güncelle
[**contactDomainRelation**](ServicesApi.md#contactdomainrelation) | **GET** /services/{serviceId}/tld/contacts | (TLD) Contact Bilgisini Getir
[**deleteSubName**](ServicesApi.md#deletesubname) | **DELETE** /services/{serviceId}/tld/subns/delete | (TLD) Alt Alan Adı Sunucu Silme
[**domainInfo**](ServicesApi.md#domaininfo) | **GET** /services/{serviceId}/tld/info | (TLD) Servis Bilgisi
[**editSubName**](ServicesApi.md#editsubname) | **PUT** /services/{serviceId}/tld/subns/edit | (TLD) Alt Alan Adı Sunucu Düzenleme
[**getListSubDns**](ServicesApi.md#getlistsubdns) | **GET** /services/{serviceId}/tld/subns | (TLD) Alt Alan Adı Sunucu Listeleme
[**getServiceById**](ServicesApi.md#getservicebyid) | **GET** /services/{serviceId} | Servis Getir
[**getServiceStatus**](ServicesApi.md#getservicestatus) | **GET** /services/{serviceId}/status | Servis Durum Getir
[**getServicesByClient**](ServicesApi.md#getservicesbyclient) | **GET** /services/client-services | Müşteri Servis Listesi Sorgula
[**listNameserversTld**](ServicesApi.md#listnameserverstld) | **GET** /services/{serviceId}/tld/nameservers/list | (TLD) Alan Adı Sunucusu Listeleme
[**listNameserversTr**](ServicesApi.md#listnameserverstr) | **GET** /services/{serviceId}/tr/nameservers/list | (TR) Alan Adı Sunucusu Listeleme
[**lockDomain**](ServicesApi.md#lockdomain) | **POST** /services/{serviceId}/tld/transfer/lock | (TLD) Transfer Kilidini Aktif Et
[**queryService**](ServicesApi.md#queryservice) | **GET** /services/queried-services | Servis Sorgula
[**removeDomainNameservers**](ServicesApi.md#removedomainnameservers) | **DELETE** /services/{serviceId}/tld/nameservers/delete | (TLD) Alan Adı Sunucusu Sil
[**renewServiceV2**](ServicesApi.md#renewservicev2) | **POST** /services/{serviceId}/renew-duration | Süreye Göre Servis Yenile
[**setNameserversTld**](ServicesApi.md#setnameserverstld) | **PUT** /services/{serviceId}/tld/nameservers/change | (TLD) Alan Adı Sunucusu Güncelle
[**setNameserversTr**](ServicesApi.md#setnameserverstr) | **PUT** /services/{serviceId}/tr/nameservers/change | (TR) Alan Adı Sunucusu Güncelle
[**transferDomainStatus**](ServicesApi.md#transferdomainstatus) | **GET** /services/{serviceId}/tld/transfer/info | (TLD) Transfer Bilgisi
[**unlockDomain**](ServicesApi.md#unlockdomain) | **POST** /services/{serviceId}/tld/transfer/unlock | (TLD) Transfer Kilidini Deaktif Et

# **addNameServers**
> \Swagger\Client\Model\GeneralWebServiceResponse addNameServers($service_id, $nameservers)

(TLD) Alan Adı Sunucusu Ekle

Giriş yapmış müşterinin seçili servisine alan adı sunucusu eklenmesini sağlar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$nameservers = "nameservers_example"; // string | nameservers

try {
    $result = $apiInstance->addNameServers($service_id, $nameservers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->addNameServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **nameservers** | **string**| nameservers |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSubName**
> \Swagger\Client\Model\GeneralWebServiceResponse addSubName($service_id, $hostname_part, $ip)

(TLD) Alt Alan Adı Sunucu Ekleme

Giriş yapmış müşterinin seçili servisine alt alan adı sunucusu eklenmesini sağlar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$hostname_part = "hostname_part_example"; // string | hostname_part
$ip = "ip_example"; // string | ip

try {
    $result = $apiInstance->addSubName($service_id, $hostname_part, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->addSubName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **hostname_part** | **string**| hostname_part |
 **ip** | **string**| ip |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactDomainEditRelation**
> \Swagger\Client\Model\GeneralWebServiceResponse contactDomainEditRelation($service_id, $contact_id, $type)

(TLD) Contact Bilgisini Güncelle

Giriş yapmış müşterinin seçili servisinin contact bilgisi güncellenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$contact_id = 789; // int | contactId
$type = "type_example"; // string | type

try {
    $result = $apiInstance->contactDomainEditRelation($service_id, $contact_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->contactDomainEditRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **contact_id** | **int**| contactId |
 **type** | **string**| type |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactDomainRelation**
> \Swagger\Client\Model\GeneralWebServiceResponse contactDomainRelation($service_id)

(TLD) Contact Bilgisini Getir

Giriş yapmış müşterinin seçili servisinin contact bilgisi dönülür.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->contactDomainRelation($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->contactDomainRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubName**
> \Swagger\Client\Model\GeneralWebServiceResponse deleteSubName($service_id, $hostname_part, $ip)

(TLD) Alt Alan Adı Sunucu Silme

Giriş yapmış müşterinin seçili servisinden seçilen alt alan adı sunucusu kaldırılır.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$hostname_part = "hostname_part_example"; // string | hostname_part
$ip = "ip_example"; // string | ip

try {
    $result = $apiInstance->deleteSubName($service_id, $hostname_part, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteSubName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **hostname_part** | **string**| hostname_part |
 **ip** | **string**| ip |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainInfo**
> \Swagger\Client\Model\GeneralWebServiceResponse domainInfo($service_id)

(TLD) Servis Bilgisi

Giriş yapmış müşterinin seçili servisinin bilgisi döndürülür. Bu serviste EPP status kodları status keyinde pipe(|) ile ayrılarak String olarak verilmiştir. Örnek: `\"status\": \"clientTransferProhibited|clientHold\"`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->domainInfo($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->domainInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editSubName**
> \Swagger\Client\Model\GeneralWebServiceResponse editSubName($service_id, $old_hostname_part, $new_hostname_part, $ip)

(TLD) Alt Alan Adı Sunucu Düzenleme

Giriş yapmış müşterinin seçili servisinden seçilen alt alan adı sunucusu düzenlenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$old_hostname_part = "old_hostname_part_example"; // string | old_hostname_part
$new_hostname_part = "new_hostname_part_example"; // string | new_hostname_part
$ip = "ip_example"; // string | ip

try {
    $result = $apiInstance->editSubName($service_id, $old_hostname_part, $new_hostname_part, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->editSubName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **old_hostname_part** | **string**| old_hostname_part |
 **new_hostname_part** | **string**| new_hostname_part |
 **ip** | **string**| ip |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListSubDns**
> \Swagger\Client\Model\GeneralWebServiceResponse getListSubDns($service_id)

(TLD) Alt Alan Adı Sunucu Listeleme

Giriş yapmış müşterinin seçili servisinin alt alan adı sunucuları listelenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->getListSubDns($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getListSubDns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceById**
> \Swagger\Client\Model\GeneralWebServiceResponse getServiceById($service_id)

Servis Getir

Giriş yapmış müşterinin belirteci verilen servisini getirir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->getServiceById($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getServiceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceStatus**
> \Swagger\Client\Model\GeneralWebServiceResponse getServiceStatus($service_id)

Servis Durum Getir

Giriş yapmış müşterinin seçili servisinin durumu dönülür. Bu servis *deprecated* olarak işaretlenmiştir bu servis yerine [/services/{serviceId}](#operation/getServiceById) servisinin kullanılması tavsiye edilir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->getServiceStatus($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getServiceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServicesByClient**
> \Swagger\Client\Model\GeneralWebServiceResponse getServicesByClient($status, $children)

Müşteri Servis Listesi Sorgula

Giriş yapmış müşterinin servislerini sorgulama metodudur.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "active"; // string | Servisin durum bilgisi
$children = false; // bool | ServiceDVO’da servisin detay bilgilerinin gelip gelmeyeceği bilgisi

try {
    $result = $apiInstance->getServicesByClient($status, $children);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getServicesByClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Servisin durum bilgisi | [optional] [default to active]
 **children** | **bool**| ServiceDVO’da servisin detay bilgilerinin gelip gelmeyeceği bilgisi | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNameserversTld**
> \Swagger\Client\Model\GeneralWebServiceResponse listNameserversTld($service_id)

(TLD) Alan Adı Sunucusu Listeleme

Giriş yapmış müşterinin seçili servisinin alan adı sunucuları listelenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->listNameserversTld($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listNameserversTld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNameserversTr**
> \Swagger\Client\Model\GeneralWebServiceResponse listNameserversTr($service_id)

(TR) Alan Adı Sunucusu Listeleme

Giriş yapmış müşterinin seçili servisinin alan adı sunucuları listelenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->listNameserversTr($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listNameserversTr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lockDomain**
> \Swagger\Client\Model\GeneralWebServiceResponse lockDomain($service_id)

(TLD) Transfer Kilidini Aktif Et

Giriş yapmış müşterinin seçili servisinin transfer kilidi aktif edilir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->lockDomain($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->lockDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryService**
> \Swagger\Client\Model\GeneralWebServiceResponse queryService($domain_name)

Servis Sorgula

Giriş yapmış müşterinin ilgili alan adında servisi varsa getiren servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Servis (alan adı) bilgisi

try {
    $result = $apiInstance->queryService($domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->queryService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Servis (alan adı) bilgisi |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDomainNameservers**
> \Swagger\Client\Model\GeneralWebServiceResponse removeDomainNameservers($service_id, $nameservers)

(TLD) Alan Adı Sunucusu Sil

Giriş yapmış müşterinin seçili servisinden seçilen alan adı sunucusu kaldırılır.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$nameservers = "nameservers_example"; // string | nameservers

try {
    $result = $apiInstance->removeDomainNameservers($service_id, $nameservers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->removeDomainNameservers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **nameservers** | **string**| nameservers |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renewServiceV2**
> \Swagger\Client\Model\GeneralWebServiceResponse renewServiceV2($service_id, $duration)

Süreye Göre Servis Yenile

Giriş yapmış müşterinin seçili servisi yenilenir. Eğer yeterli kredisi varsa ödeme yapılır.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$duration = 56; // int | Uzatma süresi (yıl)

try {
    $result = $apiInstance->renewServiceV2($service_id, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->renewServiceV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **duration** | **int**| Uzatma süresi (yıl) |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setNameserversTld**
> \Swagger\Client\Model\GeneralWebServiceResponse setNameserversTld($service_id, $nameservers)

(TLD) Alan Adı Sunucusu Güncelle

Giriş yapmış müşterinin seçili servisinin alan adı sunucuları güncellenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$nameservers = array("nameservers_example"); // string[] | Alan Adı Sunucuları

try {
    $result = $apiInstance->setNameserversTld($service_id, $nameservers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->setNameserversTld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **nameservers** | [**string[]**](../Model/string.md)| Alan Adı Sunucuları |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setNameserversTr**
> \Swagger\Client\Model\GeneralWebServiceResponse setNameserversTr($service_id, $ns1, $ip1, $ns2, $ip2, $ns3, $ip3, $ns4, $ip4, $ns5, $ip5)

(TR) Alan Adı Sunucusu Güncelle

Giriş yapmış müşterinin seçili servisinin seçilen alan adı sunucusu güncellenir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no
$ns1 = "ns1_example"; // string | ns1
$ip1 = "ip1_example"; // string | ip1
$ns2 = "ns2_example"; // string | ns2
$ip2 = "ip2_example"; // string | ip2
$ns3 = "ns3_example"; // string | ns3
$ip3 = "ip3_example"; // string | ip3
$ns4 = "ns4_example"; // string | ns4
$ip4 = "ip4_example"; // string | ip4
$ns5 = "ns5_example"; // string | ns5
$ip5 = "ip5_example"; // string | ip5

try {
    $result = $apiInstance->setNameserversTr($service_id, $ns1, $ip1, $ns2, $ip2, $ns3, $ip3, $ns4, $ip4, $ns5, $ip5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->setNameserversTr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |
 **ns1** | **string**| ns1 |
 **ip1** | **string**| ip1 | [optional]
 **ns2** | **string**| ns2 | [optional]
 **ip2** | **string**| ip2 | [optional]
 **ns3** | **string**| ns3 | [optional]
 **ip3** | **string**| ip3 | [optional]
 **ns4** | **string**| ns4 | [optional]
 **ip4** | **string**| ip4 | [optional]
 **ns5** | **string**| ns5 | [optional]
 **ip5** | **string**| ip5 | [optional]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferDomainStatus**
> \Swagger\Client\Model\GeneralWebServiceResponse transferDomainStatus($service_id)

(TLD) Transfer Bilgisi

Giriş yapmış müşterinin seçili servisinin transfer bilgisi döndürülür. Bu servis *deprecated* olarak işaretlenmiştir bu servis yerine [/services/{serviceId}/tld/info](#operation/DomainInfo) servisinin kullanılması tavsiye edilir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->transferDomainStatus($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->transferDomainStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlockDomain**
> \Swagger\Client\Model\GeneralWebServiceResponse unlockDomain($service_id)

(TLD) Transfer Kilidini Deaktif Et

Giriş yapmış müşterinin seçili servisinin transfer kilidi deaktif edilir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 789; // int | Servis no

try {
    $result = $apiInstance->unlockDomain($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->unlockDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis no |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

