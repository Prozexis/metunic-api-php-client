# metunic-api-client
## Kapsam
METUnic API kapsamında hazırlanan servisler ilgili başlıklar altında açıklanmıştır. Servislerden dönen hata kodları ve sürümlerde yapılan değişiklikler bu online doküman aracılığıyla yayınlanmaktadır. Servislerden dönen tarih/saat bilgisi `UTC` olarak verilmiştir.  API ile ilgili sorularınızı bir [destek talebi oluşturarak](https://app.metunic.com.tr/client/plugin/support_manager/client_tickets/) iletebilirsiniz.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.3.10
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Prozexis/metunic-api-php-client.git"
    }
  ],
  "require": {
    "Prozexis/metunic-api-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/metunic-api-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: cookieScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'cookieScheme');
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

## Documentation for API Endpoints

All URIs are relative to *https://api-test.metunic.com.tr/v1/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContactsApi* | [**add**](docs/Api/ContactsApi.md#add) | **POST** /contacts/add | İletişim Bilgisi Ekle
*ContactsApi* | [**addContactsPhone**](docs/Api/ContactsApi.md#addcontactsphone) | **POST** /contacts/{id}/phones/add | Contact&#x27;a telefon numarası ekle
*ContactsApi* | [**delete**](docs/Api/ContactsApi.md#delete) | **DELETE** /contacts/{id}/delete | İletişim Bilgisi Silme
*ContactsApi* | [**deleteContactsPhone**](docs/Api/ContactsApi.md#deletecontactsphone) | **DELETE** /contacts/{id}/phones/delete | Contactdan telefon numarası silme
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | İletişim Listesi
*ContactsApi* | [**getContactsAll**](docs/Api/ContactsApi.md#getcontactsall) | **GET** /contacts/{id} | İletişim Bilgisi Getir
*ContactsApi* | [**getContactsPhones**](docs/Api/ContactsApi.md#getcontactsphones) | **GET** /contacts/{id}/phones | Contact&#x27;a ait telefonlar
*ContactsApi* | [**update**](docs/Api/ContactsApi.md#update) | **PUT** /contacts/{id}/edit | İletişim Bilgisi Düzenleme
*DomainsApi* | [**getDomainName**](docs/Api/DomainsApi.md#getdomainname) | **GET** /domains/check | Check Domain
*DomainsApi* | [**getDomainNamev2**](docs/Api/DomainsApi.md#getdomainnamev2) | **GET** /domains/check-for-client | Check Domain for Client
*DomainzonesApi* | [**addDomainZoneTypeA**](docs/Api/DomainzonesApi.md#adddomainzonetypea) | **POST** /domainzones/type/a/service/{serviceId} | /domainzones/type/a/service/{serviceId}
*DomainzonesApi* | [**addDomainZoneTypeAAAA**](docs/Api/DomainzonesApi.md#adddomainzonetypeaaaa) | **POST** /domainzones/type/aaaa/service/{serviceId} | /domainzones/type/aaaa/service/{serviceId}
*DomainzonesApi* | [**addDomainZoneTypeCAA**](docs/Api/DomainzonesApi.md#adddomainzonetypecaa) | **POST** /domainzones/type/caa/service/{serviceId} | /domainzones/type/caa/service/{serviceId}
*DomainzonesApi* | [**addDomainZoneTypeMX**](docs/Api/DomainzonesApi.md#adddomainzonetypemx) | **POST** /domainzones/type/mx/service/{serviceId} | /domainzones/type/mx/service/{serviceId}
*DomainzonesApi* | [**addDomainZoneTypeNS**](docs/Api/DomainzonesApi.md#adddomainzonetypens) | **POST** /domainzones/type/ns/service/{serviceId} | /domainzones/type/ns/service/{serviceId}
*DomainzonesApi* | [**addDomainZoneTypeSRV**](docs/Api/DomainzonesApi.md#adddomainzonetypesrv) | **POST** /domainzones/type/srv/service/{serviceId} | /domainzones/type/srv/service/{serviceId}
*DomainzonesApi* | [**addDomainZoneTypeTXT**](docs/Api/DomainzonesApi.md#adddomainzonetypetxt) | **POST** /domainzones/type/txt/service/{serviceId} | /domainzones/type/txt/service/{serviceId}
*DomainzonesApi* | [**deleteDomainZone**](docs/Api/DomainzonesApi.md#deletedomainzone) | **POST** /domainzones/{recordId}/delete | /domainzones/{recordId}/delete
*DomainzonesApi* | [**getDomainZone**](docs/Api/DomainzonesApi.md#getdomainzone) | **GET** /domainzones/service-domainzones/{serviceId} | Alan Adı Bölge Getir
*DomainzonesApi* | [**getDomainZonebyId**](docs/Api/DomainzonesApi.md#getdomainzonebyid) | **GET** /domainzones/{recordId} | Belirtecine Alan Adı Bölge Getir
*DomainzonesApi* | [**updateDomainZone**](docs/Api/DomainzonesApi.md#updatedomainzone) | **PUT** /domainzones/{id}/type/{type}/service/{serviceId} | /domainzones/{id}/type/{type}/service/{serviceId}
*DomainzonesApi* | [**updateDomainZoneTypeA**](docs/Api/DomainzonesApi.md#updatedomainzonetypea) | **PUT** /domainzones/{id}/type/a/service/{serviceId} | /domainzones/{id}/type/a/service/{serviceId}
*DomainzonesApi* | [**updateDomainZoneTypeAAAA**](docs/Api/DomainzonesApi.md#updatedomainzonetypeaaaa) | **PUT** /domainzones/{id}/type/aaaa/service/{serviceId} | /domainzones/{id}/type/aaaa/service/{serviceId}
*DomainzonesApi* | [**updateDomainZoneTypeCAA**](docs/Api/DomainzonesApi.md#updatedomainzonetypecaa) | **PUT** /domainzones/{id}/type/caa/service/{serviceId} | /domainzones/{id}/type/caa/service/{serviceId}
*DomainzonesApi* | [**updateDomainZoneTypeMX**](docs/Api/DomainzonesApi.md#updatedomainzonetypemx) | **PUT** /domainzones/{id}/type/mx/service/{serviceId} | /domainzones/{id}/type/mx/service/{serviceId}
*DomainzonesApi* | [**updateDomainZoneTypeNS**](docs/Api/DomainzonesApi.md#updatedomainzonetypens) | **PUT** /domainzones/{id}/type/ns/service/{serviceId} | /domainzones/{id}/type/ns/service/{serviceId}
*DomainzonesApi* | [**updateDomainZoneTypeSRV**](docs/Api/DomainzonesApi.md#updatedomainzonetypesrv) | **PUT** /domainzones/{id}/type/srv/service/{serviceId} | /domainzones/{id}/type/srv/service/{serviceId}
*DomainzonesApi* | [**updateDomainZoneTypeTXT**](docs/Api/DomainzonesApi.md#updatedomainzonetypetxt) | **PUT** /domainzones/{id}/type/txt/service/{serviceId} | /domainzones/{id}/type/txt/service/{serviceId}
*FileApi* | [**downloadFile**](docs/Api/FileApi.md#downloadfile) | **GET** /file/downloadFile/{fileName} | Belge İndir
*FileApi* | [**uploadFile**](docs/Api/FileApi.md#uploadfile) | **POST** /file/uploadfile | Belge Ekle
*FileApi* | [**uploadMultipleFiles**](docs/Api/FileApi.md#uploadmultiplefiles) | **POST** /file/uploadMultipleFiles | Çoklu Belge Ekle
*InvoicesApi* | [**getInvoicesByClient**](docs/Api/InvoicesApi.md#getinvoicesbyclient) | **GET** /invoices | Makbuz Getir
*LoginApi* | [**auth**](docs/Api/LoginApi.md#auth) | **POST** /login/auth | Auth
*LookupApi* | [**getCountries**](docs/Api/LookupApi.md#getcountries) | **GET** /lookup/countries | Ülke listesi getir
*LookupApi* | [**getStates**](docs/Api/LookupApi.md#getstates) | **GET** /lookup/states/{countryCode} | İl/eyalet listesi getir
*LookupApi* | [**getTldCountries**](docs/Api/LookupApi.md#gettldcountries) | **GET** /lookup/tld/countries | (TLD) Ülke listesi getir
*LookupApi* | [**getTldStates**](docs/Api/LookupApi.md#gettldstates) | **GET** /lookup/tld/states/{countryCode} | (TLD) İl/eyalet listesi getir
*LookupApi* | [**getTrCountries**](docs/Api/LookupApi.md#gettrcountries) | **GET** /lookup/tr/countries | (TR) Ülke listesi getir
*LookupApi* | [**getTrStates**](docs/Api/LookupApi.md#gettrstates) | **GET** /lookup/tr/states/{countryCode} | (TR) İl/eyalet listesi getir
*OrdersApi* | [**addOrder**](docs/Api/OrdersApi.md#addorder) | **POST** /orders/tr | (TR) Talimat Ekle (Alan Adı Satın Al)
*OrdersApi* | [**addOrderv3**](docs/Api/OrdersApi.md#addorderv3) | **POST** /orders/tld | (TLD) Talimat Ekle (Alan Adı Satın Al)
*PricingsApi* | [**getPricingsByTld**](docs/Api/PricingsApi.md#getpricingsbytld) | **GET** /pricings/pricings-tld | Tld Bazında Fiyat Getir
*ServicesApi* | [**addNameServers**](docs/Api/ServicesApi.md#addnameservers) | **POST** /services/{serviceId}/tld/nameservers/add | (TLD) Alan Adı Sunucusu Ekle
*ServicesApi* | [**addSubName**](docs/Api/ServicesApi.md#addsubname) | **POST** /services/{serviceId}/tld/subns/add | (TLD) Alt Alan Adı Sunucu Ekleme
*ServicesApi* | [**contactDomainEditRelation**](docs/Api/ServicesApi.md#contactdomaineditrelation) | **PUT** /services/{serviceId}/tld/contacts/update | (TLD) Contact Bilgisini Güncelle
*ServicesApi* | [**contactDomainRelation**](docs/Api/ServicesApi.md#contactdomainrelation) | **GET** /services/{serviceId}/tld/contacts | (TLD) Contact Bilgisini Getir
*ServicesApi* | [**deleteSubName**](docs/Api/ServicesApi.md#deletesubname) | **DELETE** /services/{serviceId}/tld/subns/delete | (TLD) Alt Alan Adı Sunucu Silme
*ServicesApi* | [**domainInfo**](docs/Api/ServicesApi.md#domaininfo) | **GET** /services/{serviceId}/tld/info | (TLD) Servis Bilgisi
*ServicesApi* | [**editSubName**](docs/Api/ServicesApi.md#editsubname) | **PUT** /services/{serviceId}/tld/subns/edit | (TLD) Alt Alan Adı Sunucu Düzenleme
*ServicesApi* | [**getListSubDns**](docs/Api/ServicesApi.md#getlistsubdns) | **GET** /services/{serviceId}/tld/subns | (TLD) Alt Alan Adı Sunucu Listeleme
*ServicesApi* | [**getServiceById**](docs/Api/ServicesApi.md#getservicebyid) | **GET** /services/{serviceId} | Servis Getir
*ServicesApi* | [**getServiceStatus**](docs/Api/ServicesApi.md#getservicestatus) | **GET** /services/{serviceId}/status | Servis Durum Getir
*ServicesApi* | [**getServicesByClient**](docs/Api/ServicesApi.md#getservicesbyclient) | **GET** /services/client-services | Müşteri Servis Listesi Sorgula
*ServicesApi* | [**listNameserversTld**](docs/Api/ServicesApi.md#listnameserverstld) | **GET** /services/{serviceId}/tld/nameservers/list | (TLD) Alan Adı Sunucusu Listeleme
*ServicesApi* | [**listNameserversTr**](docs/Api/ServicesApi.md#listnameserverstr) | **GET** /services/{serviceId}/tr/nameservers/list | (TR) Alan Adı Sunucusu Listeleme
*ServicesApi* | [**lockDomain**](docs/Api/ServicesApi.md#lockdomain) | **POST** /services/{serviceId}/tld/transfer/lock | (TLD) Transfer Kilidini Aktif Et
*ServicesApi* | [**queryService**](docs/Api/ServicesApi.md#queryservice) | **GET** /services/queried-services | Servis Sorgula
*ServicesApi* | [**removeDomainNameservers**](docs/Api/ServicesApi.md#removedomainnameservers) | **DELETE** /services/{serviceId}/tld/nameservers/delete | (TLD) Alan Adı Sunucusu Sil
*ServicesApi* | [**renewServiceV2**](docs/Api/ServicesApi.md#renewservicev2) | **POST** /services/{serviceId}/renew-duration | Süreye Göre Servis Yenile
*ServicesApi* | [**setNameserversTld**](docs/Api/ServicesApi.md#setnameserverstld) | **PUT** /services/{serviceId}/tld/nameservers/change | (TLD) Alan Adı Sunucusu Güncelle
*ServicesApi* | [**setNameserversTr**](docs/Api/ServicesApi.md#setnameserverstr) | **PUT** /services/{serviceId}/tr/nameservers/change | (TR) Alan Adı Sunucusu Güncelle
*ServicesApi* | [**transferDomainStatus**](docs/Api/ServicesApi.md#transferdomainstatus) | **GET** /services/{serviceId}/tld/transfer/info | (TLD) Transfer Bilgisi
*ServicesApi* | [**unlockDomain**](docs/Api/ServicesApi.md#unlockdomain) | **POST** /services/{serviceId}/tld/transfer/unlock | (TLD) Transfer Kilidini Deaktif Et
*TransactionsApi* | [**getCredits**](docs/Api/TransactionsApi.md#getcredits) | **GET** /transactions/credit | Müşterinin Kredi Bilgisini Getir
*TransferApi* | [**transferAdd**](docs/Api/TransferApi.md#transferadd) | **POST** /transfers/tld/add | (TLD) Transfer İşlemi Başlat
*TransferApi* | [**transferListTransferIn**](docs/Api/TransferApi.md#transferlisttransferin) | **GET** /transfers/tld/{serviceId}/status | (TLD) Transfer İşlemi Durumu

## Documentation For Models

 - [FileUploadfileBody](docs/Model/FileUploadfileBody.md)
 - [GeneralWebServiceResponse](docs/Model/GeneralWebServiceResponse.md)

## Documentation For Authorization


## cookieScheme

- **Type**: API key
- **API key parameter name**: Cookie
- **Location**: HTTP header


## Author
