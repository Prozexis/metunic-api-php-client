# metunic-api-client
# Kapsam  METUnic API kapsamında hazırlanan servisler ilgili başlıklar altında açıklanmıştır. Servislerden dönen hata kodları ve sürümlerde yapılan değişiklikler bu online doküman aracılığıyla yayınlanmaktadır. Servislerden dönen tarih/saat bilgisi `UTC` olarak verilmiştir.  API ile ilgili sorularınızı bir [destek talebi oluşturarak](https://app.metunic.com.tr/client/plugin/support_manager/client_tickets/) iletebilirsiniz.  # Hata Kodları ve Açıklamaları  |  Hata kodu  | Açıklama                                                            | |:-----------:|:--------------------------------------------------------------------| |     `0`     | Kayıt Bulunamadı.                                                   | |     `1`     | İşlem Başarılıdır.                                                  | |     `2`     | İşlem Başarısızdır.                                                 | |     `3`     | Sisteme Giriş Yapılmalıdır                                          | |     `4`     | Aykırı durum oluşmuştur.                                            | |     `5`     | Veri müşteriye ait değildir.                                        | |     `6`     | Girilen veri tutarsızdır.                                           | |     `7`     | Yeterli kredi yoktur.                                               | |     `8`     | Alan adı kullanımdadır.                                             | |     `9`     | Bu alan adına ait ticket bulunamamıştır.                            | |    `10`     | Müşteri kredisi bulunmaktadır.                                      | |    `11`     | Müşteri kredisi bulunmamaktadır.                                    | |    `12`     | Alan adı kullanıma uygundur.                                        | |    `13`     | Bekleyen durumunda istek olduğu için bu servis iptal edilmiştir.    | |    `14`     | 2 kere üst üste lock ya da unlock yapmaya çalıştınız.               | |    `15`     | Benzer alan adı sunucusunu ekleme çalışıyorsunuz.                   | |    `16`     | Mevcut olmayan alan adı sunucusunu silmeye çalışıyorsunuz.          | |    `17`     | Benzer alt alan adı sunucusunu ekleme çalışıyorsunuz.               | |    `18`     | Mevcut olmayan alt alan adı sunucusunu güncellemeye çalışıyorsunuz. | |    `19`     | Mevcut olmayan alt alan adı sunucusunu güncellemeye çalışıyorsunuz. | |    `20`     | İlgili kayıt silinmiştir.                                           | |    `21`     | Lütfen Tld uzantı (.com,.net,.org) ile ilgili işlem yapınız.        | |    `22`     | İlgili contact bulunamamistir.                                      |  # Akışlar  ## (TLD) Kayıt Süreci   1. Kaydedilmek istenen alan adının kayıt için uygunluk durumu     [/domains/check](#operation/getDomainName) servisi ile sorgulanır.  2. Kaydedilmek istenen alan adının kayıt ücretinin öğrenmek için [/pricings/pricings-tld](#operation/getPricingsByTld) servisi kullanılır.   3. Müşterinin mevcut kredi miktarını [/transactions/credit](#operation/getCredits) servisinden öğrenilir.  4. Kayıt sırasında istenen `owner`,  `billing`, `technical` ve     `admin` alanlarına yazılacak sorumlu kodu (**id**) [/contacts](#operation/getContacts) servisinden öğrenilir eğer yeni     sorumlu eklenecekse  [/contacts/add](#operation/add) servisi kullanılır.  5. Kayıt sırasında en az iki en fazla beş alan adı sunucusu belirtilebilir.  6. Kayıt sırasında istenen `duration` parametresi ilgili alan adının     kaç yıl boyunca kaydedileceğini belirler bu değer en az `1` en fazla `10` olabilir.   ## (TR) Kayıt Süreci   1. Kaydedilmek istenen alan adının kayıt için uygunluk durumu     [/domains/check](#operation/getDomainName) servisi ile sorgulanır.  2. Kaydedilmek istenen alan adının kayıt ücretinin öğrenmek için [/pricings/pricings-tld](#operation/getPricingsByTld) servisi kullanılır.   3. Müşterinin mevcut kredi miktarını [/transactions/credit](#operation/getCredits) servisinden öğrenilir.  4. Eğer registrant_type = individual ise registrant_citizen_id ve registrant_name alanları girilmelidir.  5. Eğer registrant_type = organization ise registrant_organization, registrant_tax_office ve registrant_tax_number alanları girilmelidir.  6. Kayıt sırasında istenen registrant_country alanına yazılacak değer [/lookup/tr/countries](#operation/getTrCountries) servisinden öğrenilir.  7. Kayıt sırasında istenen registrant_city alanına yazılacak değer [/lookup/tr/states/](#operation/getTrStates) servisinden öğrenilir.  7. Kayıt sırasında en az iki en fazla beş alan adı sunucusu belirtilebilir.  8. Kayıt sırasında istenen `duration` parametresi ilgili alan adının kaç yıl boyunca kaydedileceğini belirler bu değer en az `1` en fazla `5` olabilir.  9. Eğer belgeli alan adı başvurusu yapıldıysa [/file/uploadfile](#operation/uploadFile) servisi kullanılarak ilgili alan adı için belge gönderilir. # Sürüm Notları  ## v1.3.10  - [/orders/tld](#operation/addOrderv3) servisine idn desteği eklendi. - [/domainzones](#tag/domainzones) altındaki servisler *deprecated* olarak işaretlenmiştir. Bu servisler ilerleyen sürümlerde API'den kaldırılacağı için kullanılmamaları tavsiye edilmektedir.  ## v1.3.9  Bugfix:  - [/services/{serviceId}/renew-duration](#operation/renewServiceV2)  ## v1.3.8  Bugfix:  - [/services/{serviceId}/tld/nameservers/add](#operation/addNameServers)  ## v1.3.7  Contact'a ait telefon numaralarıyla ilgili listeleme, ekleme ve silme servisleri eklendi:  - [/contacts/{id}/phones](#operation/getContactsPhones) - [/contacts/{id}/phones/add](#operation/addContactsPhone) - [/contacts/{id}/phones/delete](#operation/deleteContactsPhone)  Bugfix:  - [/services/{serviceId}/tld/info](#operation/DomainInfo) - [/services/{serviceId}/tld/nameservers/change](#operation/setNameserversTld) - [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)  ## v1.3.6  Bugfix:  - [/services/{serviceId}/tld/info](#operation/DomainInfo) - [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)  ## v1.3.5  Minor bugfix.  ## v1.3.4  Bugfix:  - [/services/queried-services](#operation/queryService)  ## v1.3.3  API'nin bu versiyonunda bazı servisler *deprecated* olarak işaretlenmiştir. Bu servisler ilk major versiyon geçişinde API'den kaldırılacağı için kullanılmamaları / alternatiflerinin kullanılmaya başlanması tavsiye edilmektedir. Tüm istemci uygulamalar için tekrar swagger client üretilerek değişikliklerin gözden geçirilmesi önerilmektedir.  - Aşağıdaki servislerin kullanılmaması tavsiye edilmiştir. Bu servisler yerine (yeni eklenen/var olan) servislerin kullanılması önerilmektedir.   - <del>[/lookup/countries](#operation/getCountries)</del> -> [/lookup/tld/countries](#operation/getTldCountries)    - <del>[/lookup/states/{countryCode}](#operation/getStates)</del> -> [/lookup/tld/states/{countryCode}](#operation/getTldStates)   - <del>[/services/{serviceId}/status](#operation/getServiceStatus)</del> -> [/services/{serviceId}](#operation/getServiceById)   - <del>[/services/{serviceId}/tld/transfer/info](#operation/transferDomainStatus)</del> -> [/services/{serviceId}/tld/info](#operation/DomainInfo) - .tr alan adı başvurusu için gerekli ülke ve il/eyalet kodlarını sorgulamak için lookup servisleri eklendi.   - [/lookup/tr/countries](#operation/getTrCountries)   - [/lookup/tr/states/{countryCode}](#operation/getTrStates) - (TLD) Alan adı sunucusu güncellemek için yeni bir servis eklendi. Bu servis mevcut ekleme, silme ve listeleme servislerinin bir bütünü olup çalışması normalden uzun sürebilmektedir. Servis client tarafında yapılacak isteklerin azaltılması amacıyla eklenmiştir.   - [/services/{serviceId}/tld/nameservers/change](#operation/setNameserversTld) - Alan adı başvuruları sırasında izlenmesi gereken [Akışlar](#section/Akislar) dokümana eklendi. - Bugfix:   - [/services/{serviceId}/tld/transfer/unlock](#operation/unlockDomain)   - [/services/{serviceId}/tld/subns](#operation/getListSubDns)  ## v1.3.2  Bugfix:  - [/contacts/{id}/edit](#operation/update)  ## v1.3.1  Bugfix:  - [/services/{serviceId}/tld/contacts](#operation/contactDomainRelation) - [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)  ## v1.3.0  API'nin bu versiyonunda önceki sürümlerle uyumlu olmayan değişiklikler bulunmaktadır. Tüm istemci uygulamalar için tekrar swagger client üretilerek değişikliklerin gözden geçirilmesi önerilmektedir.  - Hata kodları güncellendi. - Servislerde HTTP method'ları (`GET`, `POST`, `PUT`, `DELETE`) düzenlendi. - Servislerde zorunlu parametreler düzenlendi. - [/pricings/pricings-tld](#operation/getPricingsByTld) servisine `duration` parametresi eklendi. - [/services/{serviceId}/tr/nameservers/change](#operation/setNameserversTr) servis parametreleri güncellendi. - Contact oluşturmak için gerekli ülke ve il/eyalet kodlarını sorgulamak için lookup servisleri eklendi.   - [/lookup/countries](#operation/getCountries)   - [/lookup/states/{countryCode}](#operation/getStates) - Bazı servislerde karşılaşılan hatalar giderildi. - Aşağıdaki tabloda bulunan endpoint'lerde;    - path'den okunması gerekirken query'den okunan `serviceId` parametreleri düzeltildi   - \"subns\" servislerinin endpoint'leri düzenlendi.   - \".tr\" dışında kalan \"tld\" servisler özelindeki endpoint'lerin isimleri güncellendi.    | Endpoint                                                                       |                       Örnek  (eski)                        |             Örnek (yeni)             |   |--------------------------------------------------------------------------------|:------------------------------------------------------------------------------:|:------------------------------------:|   | [/services/{serviceId}/tld/subns/add]( #operation/addSubName )                   |          /services/{serviceId}/add?serviceId=1234          |       /services/1234/tld/subns/add       |   | [/services/{serviceId}/tld/subns/delete](#operation/deleteSubName)                 |        /services/{serviceId}/delete?serviceId=1234         |     /services/1234/tld/subns/delete      |   | [/services/{serviceId}/tld/subns/edit](#operation/editSubName)                     |         /services/{serviceId}/edit?serviceId=1234          |      /services/1234/tld/subns/edit       |   | [/services/{serviceId}/tld/subns](#operation/getListSubDns)                        |         /services/{serviceId}/subns?serviceId=1234         |         /services/1234/tld/subns         |   | [/services/{serviceId}/tld/contacts](#operation/contactDomainRelation)         |        /services/{serviceId}/contact?serviceId=1234        |     /services/1234/tld/contacts      |   | [/services/{serviceId}/tld/contacts/update](#operation/contactDomainEditRelation) |    /services/{serviceId}/contacts/update?serviceId=1234    |    /services/1234/tld/contacts/update    |   | [/services/{serviceId}/tld/nameservers/add](#operation/addNameServers)             |    /services/{serviceId}/nameservers/add?serviceId=1234    |    /services/1234/tld/nameservers/add    |   | [/services/{serviceId}/tld/nameservers/delete](#operation/removeDomainNameservers) |  /services/{serviceId}/nameservers/delete?serviceId=1234   |  /services/1234/tld/nameservers/delete   |   | [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)   | /services/{serviceId}/tld/nameservers/list?serviceId=1234  | /services/1234/tld/nameservers/list  |   | [/services/{serviceId}/tr/nameservers/change](#operation/setNameserversTr)     | /services/{serviceId}/tr/nameservers/change?serviceId=1234 | /services/1234/tr/nameservers/change |   | [/services/{serviceId}/tr/nameservers/list](#operation/listNameserversTr)      |  /services/{serviceId}/tr/nameservers/list?serviceId=1234  |  /services/1234/tr/nameservers/list  |   | [/services/{serviceId}/tld/transfer/info](#operation/transferDomainStatus)         |     /services/{serviceId}/transfer/info?serviceId=1234     |     /services/1234/tld/transfer/info     |   | [/services/{serviceId}/tld/transfer/unlock](#operation/unlockDomain)               |    /services/{serviceId}/transfer/unlock?serviceId=1234    |    /services/1234/tld/transfer/unlock    |   | [/transfers/tld/{serviceId}/status](#operation/transferListTransferIn)         |      /transfers/tld/{serviceId}/status?serviceId=1234      |      /transfers/tld/1234/status      |

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
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
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
