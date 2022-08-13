# Swagger\Client\DomainzonesApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDomainZoneTypeA**](DomainzonesApi.md#adddomainzonetypea) | **POST** /domainzones/type/a/service/{serviceId} | /domainzones/type/a/service/{serviceId}
[**addDomainZoneTypeAAAA**](DomainzonesApi.md#adddomainzonetypeaaaa) | **POST** /domainzones/type/aaaa/service/{serviceId} | /domainzones/type/aaaa/service/{serviceId}
[**addDomainZoneTypeCAA**](DomainzonesApi.md#adddomainzonetypecaa) | **POST** /domainzones/type/caa/service/{serviceId} | /domainzones/type/caa/service/{serviceId}
[**addDomainZoneTypeMX**](DomainzonesApi.md#adddomainzonetypemx) | **POST** /domainzones/type/mx/service/{serviceId} | /domainzones/type/mx/service/{serviceId}
[**addDomainZoneTypeNS**](DomainzonesApi.md#adddomainzonetypens) | **POST** /domainzones/type/ns/service/{serviceId} | /domainzones/type/ns/service/{serviceId}
[**addDomainZoneTypeSRV**](DomainzonesApi.md#adddomainzonetypesrv) | **POST** /domainzones/type/srv/service/{serviceId} | /domainzones/type/srv/service/{serviceId}
[**addDomainZoneTypeTXT**](DomainzonesApi.md#adddomainzonetypetxt) | **POST** /domainzones/type/txt/service/{serviceId} | /domainzones/type/txt/service/{serviceId}
[**deleteDomainZone**](DomainzonesApi.md#deletedomainzone) | **POST** /domainzones/{recordId}/delete | /domainzones/{recordId}/delete
[**getDomainZone**](DomainzonesApi.md#getdomainzone) | **GET** /domainzones/service-domainzones/{serviceId} | Alan Adı Bölge Getir
[**getDomainZonebyId**](DomainzonesApi.md#getdomainzonebyid) | **GET** /domainzones/{recordId} | Belirtecine Alan Adı Bölge Getir
[**updateDomainZone**](DomainzonesApi.md#updatedomainzone) | **PUT** /domainzones/{id}/type/{type}/service/{serviceId} | /domainzones/{id}/type/{type}/service/{serviceId}
[**updateDomainZoneTypeA**](DomainzonesApi.md#updatedomainzonetypea) | **PUT** /domainzones/{id}/type/a/service/{serviceId} | /domainzones/{id}/type/a/service/{serviceId}
[**updateDomainZoneTypeAAAA**](DomainzonesApi.md#updatedomainzonetypeaaaa) | **PUT** /domainzones/{id}/type/aaaa/service/{serviceId} | /domainzones/{id}/type/aaaa/service/{serviceId}
[**updateDomainZoneTypeCAA**](DomainzonesApi.md#updatedomainzonetypecaa) | **PUT** /domainzones/{id}/type/caa/service/{serviceId} | /domainzones/{id}/type/caa/service/{serviceId}
[**updateDomainZoneTypeMX**](DomainzonesApi.md#updatedomainzonetypemx) | **PUT** /domainzones/{id}/type/mx/service/{serviceId} | /domainzones/{id}/type/mx/service/{serviceId}
[**updateDomainZoneTypeNS**](DomainzonesApi.md#updatedomainzonetypens) | **PUT** /domainzones/{id}/type/ns/service/{serviceId} | /domainzones/{id}/type/ns/service/{serviceId}
[**updateDomainZoneTypeSRV**](DomainzonesApi.md#updatedomainzonetypesrv) | **PUT** /domainzones/{id}/type/srv/service/{serviceId} | /domainzones/{id}/type/srv/service/{serviceId}
[**updateDomainZoneTypeTXT**](DomainzonesApi.md#updatedomainzonetypetxt) | **PUT** /domainzones/{id}/type/txt/service/{serviceId} | /domainzones/{id}/type/txt/service/{serviceId}

# **addDomainZoneTypeA**
> \Swagger\Client\Model\GeneralWebServiceResponse addDomainZoneTypeA($service_id, $hostname, $ipv4, $ttl)

/domainzones/type/a/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin eklenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ipv4 = ""; // string | IP v4 adresi
$ttl = 789; // int | Geçerlilik süresi (saniye)

try {
    $result = $apiInstance->addDomainZoneTypeA($service_id, $hostname, $ipv4, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->addDomainZoneTypeA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ipv4** | **string**| IP v4 adresi |
 **ttl** | **int**| Geçerlilik süresi (saniye) |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDomainZoneTypeAAAA**
> \Swagger\Client\Model\GeneralWebServiceResponse addDomainZoneTypeAAAA($service_id, $hostname, $ipv6, $ttl)

/domainzones/type/aaaa/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin eklenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ipv6 = ""; // string | IP v6 adresi
$ttl = 789; // int | Geçerlilik süresi (saniye)

try {
    $result = $apiInstance->addDomainZoneTypeAAAA($service_id, $hostname, $ipv6, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->addDomainZoneTypeAAAA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ipv6** | **string**| IP v6 adresi |
 **ttl** | **int**| Geçerlilik süresi (saniye) |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDomainZoneTypeCAA**
> \Swagger\Client\Model\GeneralWebServiceResponse addDomainZoneTypeCAA($service_id, $hostname, $granted, $ttl, $tag, $flags)

/domainzones/type/caa/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin eklenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$granted = ""; // string | granted
$ttl = 789; // int | Geçerlilik süresi (saniye)
$tag = ""; // string | tag
$flags = ""; // string | flags

try {
    $result = $apiInstance->addDomainZoneTypeCAA($service_id, $hostname, $granted, $ttl, $tag, $flags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->addDomainZoneTypeCAA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **granted** | **string**| granted |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **tag** | **string**| tag |
 **flags** | **string**| flags |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDomainZoneTypeMX**
> \Swagger\Client\Model\GeneralWebServiceResponse addDomainZoneTypeMX($service_id, $hostname, $ttl, $mail_server, $priority)

/domainzones/type/mx/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin eklenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ttl = 789; // int | Geçerlilik süresi (saniye)
$mail_server = ""; // string | Mail Sunucusu
$priority = 56; // int | Öncelik

try {
    $result = $apiInstance->addDomainZoneTypeMX($service_id, $hostname, $ttl, $mail_server, $priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->addDomainZoneTypeMX: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **mail_server** | **string**| Mail Sunucusu |
 **priority** | **int**| Öncelik |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDomainZoneTypeNS**
> \Swagger\Client\Model\GeneralWebServiceResponse addDomainZoneTypeNS($service_id, $hostname, $name_server, $ttl)

/domainzones/type/ns/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin eklenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$name_server = ""; // string | Alan adı sunucusu
$ttl = 789; // int | Geçerlilik süresi (saniye)

try {
    $result = $apiInstance->addDomainZoneTypeNS($service_id, $hostname, $name_server, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->addDomainZoneTypeNS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **name_server** | **string**| Alan adı sunucusu |
 **ttl** | **int**| Geçerlilik süresi (saniye) |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDomainZoneTypeSRV**
> \Swagger\Client\Model\GeneralWebServiceResponse addDomainZoneTypeSRV($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)

/domainzones/type/srv/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin eklenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$direct_to = ""; // string | Yönlendirilen sunucu
$ttl = 789; // int | Geçerlilik süresi (saniye)
$priority = 56; // int | Öncelik
$value = ""; // string | value
$port = 56; // int | Port numarası
$weight = 56; // int | Ağırlık

try {
    $result = $apiInstance->addDomainZoneTypeSRV($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->addDomainZoneTypeSRV: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **direct_to** | **string**| Yönlendirilen sunucu |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **priority** | **int**| Öncelik |
 **value** | **string**| value |
 **port** | **int**| Port numarası |
 **weight** | **int**| Ağırlık |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDomainZoneTypeTXT**
> \Swagger\Client\Model\GeneralWebServiceResponse addDomainZoneTypeTXT($service_id, $hostname, $ttl, $value)

/domainzones/type/txt/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin eklenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ttl = 789; // int | Geçerlilik süresi (saniye)
$value = ""; // string | value

try {
    $result = $apiInstance->addDomainZoneTypeTXT($service_id, $hostname, $ttl, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->addDomainZoneTypeTXT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **value** | **string**| value |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDomainZone**
> \Swagger\Client\Model\GeneralWebServiceResponse deleteDomainZone($record_id)

/domainzones/{recordId}/delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_id = 56; // int | Alan Adı bölge belirteci

try {
    $result = $apiInstance->deleteDomainZone($record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->deleteDomainZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| Alan Adı bölge belirteci |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomainZone**
> \Swagger\Client\Model\GeneralWebServiceResponse getDomainZone($service_id)

Alan Adı Bölge Getir

İlgili servisin DNS'inin zone bilgisinin sorgulanmasını sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int | Servis belirteci

try {
    $result = $apiInstance->getDomainZone($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->getDomainZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| Servis belirteci |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomainZonebyId**
> \Swagger\Client\Model\GeneralWebServiceResponse getDomainZonebyId($record_id)

Belirtecine Alan Adı Bölge Getir

İlgili servisin DNS'inin zone bilgisinin sorgulanmasını sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_id = 56; // int | Alan Adı bölge belirteci

try {
    $result = $apiInstance->getDomainZonebyId($record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->getDomainZonebyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| Alan Adı bölge belirteci |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZone**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZone($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags)

/domainzones/{id}/type/{type}/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$type = "type_example"; // string | Tipi
$hostname = ""; // string | Sunucu adı
$ipv4 = ""; // string | IP v4 adresi
$ipv6 = ""; // string | IP v6 adresi
$alias = ""; // string | Alias
$name_server = ""; // string | Alan adı sunucusu
$direct_to = ""; // string | Yönlendirilen sunucu
$granted = ""; // string | granted
$ttl = 789; // int | Geçerlilik süresi (saniye)
$mail_server = ""; // string | Mail Sunucusu
$priority = 56; // int | Öncelik
$value = ""; // string | value
$port = 56; // int | Port numarası
$weight = 56; // int | Ağırlık
$tag = ""; // string | tag
$flags = ""; // string | flags

try {
    $result = $apiInstance->updateDomainZone($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **type** | **string**| Tipi |
 **hostname** | **string**| Sunucu adı |
 **ipv4** | **string**| IP v4 adresi |
 **ipv6** | **string**| IP v6 adresi |
 **alias** | **string**| Alias |
 **name_server** | **string**| Alan adı sunucusu |
 **direct_to** | **string**| Yönlendirilen sunucu |
 **granted** | **string**| granted |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **mail_server** | **string**| Mail Sunucusu |
 **priority** | **int**| Öncelik |
 **value** | **string**| value |
 **port** | **int**| Port numarası |
 **weight** | **int**| Ağırlık |
 **tag** | **string**| tag |
 **flags** | **string**| flags |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZoneTypeA**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZoneTypeA($id, $service_id, $hostname, $ipv4, $ttl)

/domainzones/{id}/type/a/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ipv4 = ""; // string | IP v4 adresi
$ttl = 789; // int | Geçerlilik süresi (saniye)

try {
    $result = $apiInstance->updateDomainZoneTypeA($id, $service_id, $hostname, $ipv4, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZoneTypeA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ipv4** | **string**| IP v4 adresi |
 **ttl** | **int**| Geçerlilik süresi (saniye) |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZoneTypeAAAA**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZoneTypeAAAA($id, $service_id, $hostname, $ipv6, $ttl)

/domainzones/{id}/type/aaaa/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ipv6 = ""; // string | IP v6 adresi
$ttl = 789; // int | Geçerlilik süresi (saniye)

try {
    $result = $apiInstance->updateDomainZoneTypeAAAA($id, $service_id, $hostname, $ipv6, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZoneTypeAAAA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ipv6** | **string**| IP v6 adresi |
 **ttl** | **int**| Geçerlilik süresi (saniye) |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZoneTypeCAA**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZoneTypeCAA($id, $service_id, $hostname, $granted, $ttl, $tag, $flags)

/domainzones/{id}/type/caa/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$granted = ""; // string | granted
$ttl = 789; // int | Geçerlilik süresi (saniye)
$tag = ""; // string | tag
$flags = ""; // string | flags

try {
    $result = $apiInstance->updateDomainZoneTypeCAA($id, $service_id, $hostname, $granted, $ttl, $tag, $flags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZoneTypeCAA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **granted** | **string**| granted |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **tag** | **string**| tag |
 **flags** | **string**| flags |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZoneTypeMX**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZoneTypeMX($id, $service_id, $hostname, $ttl, $mail_server, $priority)

/domainzones/{id}/type/mx/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ttl = 789; // int | Geçerlilik süresi (saniye)
$mail_server = ""; // string | Mail Sunucusu
$priority = 56; // int | Öncelik

try {
    $result = $apiInstance->updateDomainZoneTypeMX($id, $service_id, $hostname, $ttl, $mail_server, $priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZoneTypeMX: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **mail_server** | **string**| Mail Sunucusu |
 **priority** | **int**| Öncelik |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZoneTypeNS**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZoneTypeNS($id, $service_id, $hostname, $name_server, $ttl)

/domainzones/{id}/type/ns/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$name_server = ""; // string | Alan adı sunucusu
$ttl = 789; // int | Geçerlilik süresi (saniye)

try {
    $result = $apiInstance->updateDomainZoneTypeNS($id, $service_id, $hostname, $name_server, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZoneTypeNS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **name_server** | **string**| Alan adı sunucusu |
 **ttl** | **int**| Geçerlilik süresi (saniye) |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZoneTypeSRV**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZoneTypeSRV($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)

/domainzones/{id}/type/srv/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$direct_to = ""; // string | Yönlendirilen sunucu
$ttl = 789; // int | Geçerlilik süresi (saniye)
$priority = 56; // int | Öncelik
$value = ""; // string | value
$port = 56; // int | Port numarası
$weight = 56; // int | Ağırlık

try {
    $result = $apiInstance->updateDomainZoneTypeSRV($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZoneTypeSRV: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **direct_to** | **string**| Yönlendirilen sunucu |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **priority** | **int**| Öncelik |
 **value** | **string**| value |
 **port** | **int**| Port numarası |
 **weight** | **int**| Ağırlık |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainZoneTypeTXT**
> \Swagger\Client\Model\GeneralWebServiceResponse updateDomainZoneTypeTXT($id, $service_id, $hostname, $ttl, $value)

/domainzones/{id}/type/txt/service/{serviceId}

İlgili alan adının DNS'inin zone bilgisinin güncellenmesini sağlayan servistir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\DomainzonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id
$service_id = 56; // int | Servis belirteci
$hostname = ""; // string | Sunucu adı
$ttl = 789; // int | Geçerlilik süresi (saniye)
$value = ""; // string | value

try {
    $result = $apiInstance->updateDomainZoneTypeTXT($id, $service_id, $hostname, $ttl, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainzonesApi->updateDomainZoneTypeTXT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **service_id** | **int**| Servis belirteci |
 **hostname** | **string**| Sunucu adı |
 **ttl** | **int**| Geçerlilik süresi (saniye) |
 **value** | **string**| value |

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

