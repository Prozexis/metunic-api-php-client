# Swagger\Client\OrdersApi

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrder**](OrdersApi.md#addorder) | **POST** /orders/tr | (TR) Talimat Ekle (Alan Adı Satın Al)
[**addOrderv3**](OrdersApi.md#addorderv3) | **POST** /orders/tld | (TLD) Talimat Ekle (Alan Adı Satın Al)

# **addOrder**
> \Swagger\Client\Model\GeneralWebServiceResponse addOrder($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name, $registrant_citizen_id, $registrant_organization, $registrant_tax_office, $registrant_tax_number, $ns3, $ns4, $ns5)

(TR) Talimat Ekle (Alan Adı Satın Al)

Order ekleme servisidir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_type = "individual"; // string | Kayıt yapan türü
$registrant_address1 = ""; // string | Kayıt yapan adres 1
$registrant_address2 = ""; // string | Kayıt yapan adres 2
$registrant_country = ""; // string | Kayıt yapan ülke kodu
$registrant_city = ""; // string | Kayıt yapan il kodu
$registrant_postal_code = ""; // string | Kayıt yapan posta kodu
$registrant_phone = ""; // string | Kayıt yapan telefon no
$registrant_email_address = ""; // string | Kayıt yapan eposta adresi
$domain = "domain_example"; // string | Alan Adı
$ns1 = "ns1_example"; // string | Alan adı sunucusu 1
$ns2 = "ns2_example"; // string | Alan adı sunucusu 2
$duration = 1; // int | Süre
$registrant_name = "registrant_name_example"; // string | Kayıt yapan kişi ad soyad
$registrant_citizen_id = "registrant_citizen_id_example"; // string | Kayıt yapan kişi kimlik no
$registrant_organization = "registrant_organization_example"; // string | Kayıt yapan organizasyon adı
$registrant_tax_office = "registrant_tax_office_example"; // string | Kayıt yapan vergi dairesi
$registrant_tax_number = "registrant_tax_number_example"; // string | Kayıt yapan vergi no
$ns3 = ""; // string | Alan adı sunucusu 3
$ns4 = ""; // string | Alan adı sunucusu 4
$ns5 = ""; // string | Alan adı sunucusu 5

try {
    $result = $apiInstance->addOrder($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name, $registrant_citizen_id, $registrant_organization, $registrant_tax_office, $registrant_tax_number, $ns3, $ns4, $ns5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->addOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_type** | **string**| Kayıt yapan türü | [default to individual]
 **registrant_address1** | **string**| Kayıt yapan adres 1 |
 **registrant_address2** | **string**| Kayıt yapan adres 2 |
 **registrant_country** | **string**| Kayıt yapan ülke kodu |
 **registrant_city** | **string**| Kayıt yapan il kodu |
 **registrant_postal_code** | **string**| Kayıt yapan posta kodu |
 **registrant_phone** | **string**| Kayıt yapan telefon no |
 **registrant_email_address** | **string**| Kayıt yapan eposta adresi |
 **domain** | **string**| Alan Adı |
 **ns1** | **string**| Alan adı sunucusu 1 |
 **ns2** | **string**| Alan adı sunucusu 2 |
 **duration** | **int**| Süre | [default to 1]
 **registrant_name** | **string**| Kayıt yapan kişi ad soyad | [optional]
 **registrant_citizen_id** | **string**| Kayıt yapan kişi kimlik no | [optional]
 **registrant_organization** | **string**| Kayıt yapan organizasyon adı | [optional]
 **registrant_tax_office** | **string**| Kayıt yapan vergi dairesi | [optional]
 **registrant_tax_number** | **string**| Kayıt yapan vergi no | [optional]
 **ns3** | **string**| Alan adı sunucusu 3 | [optional]
 **ns4** | **string**| Alan adı sunucusu 4 | [optional]
 **ns5** | **string**| Alan adı sunucusu 5 | [optional]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderv3**
> \Swagger\Client\Model\GeneralWebServiceResponse addOrderv3($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3, $ns4, $ns5)

(TLD) Talimat Ekle (Alan Adı Satın Al)

Order ekleme servisidir.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = "domain_name_example"; // string | Alan Adı
$ns1 = "ns1_example"; // string | Alan adı sunucusu 1
$ns2 = "ns2_example"; // string | Alan adı sunucusu 2
$duration = 1; // int | Süre
$owner = 789; // int | owner
$billing = 789; // int | billing
$technical = 789; // int | technical
$admin = 789; // int | admin
$ns3 = ""; // string | Alan adı sunucusu 3
$ns4 = ""; // string | Alan adı sunucusu 4
$ns5 = ""; // string | Alan adı sunucusu 5

try {
    $result = $apiInstance->addOrderv3($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3, $ns4, $ns5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->addOrderv3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_name** | **string**| Alan Adı |
 **ns1** | **string**| Alan adı sunucusu 1 |
 **ns2** | **string**| Alan adı sunucusu 2 |
 **duration** | **int**| Süre | [default to 1]
 **owner** | **int**| owner |
 **billing** | **int**| billing |
 **technical** | **int**| technical |
 **admin** | **int**| admin |
 **ns3** | **string**| Alan adı sunucusu 3 | [optional]
 **ns4** | **string**| Alan adı sunucusu 4 | [optional]
 **ns5** | **string**| Alan adı sunucusu 5 | [optional]

### Return type

[**\Swagger\Client\Model\GeneralWebServiceResponse**](../Model/GeneralWebServiceResponse.md)

### Authorization

[cookieScheme](../../README.md#cookieScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

