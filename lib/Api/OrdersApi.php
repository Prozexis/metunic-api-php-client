<?php
/**
 * OrdersApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * METUnic API
 *
 * # Kapsam  METUnic API kapsamında hazırlanan servisler ilgili başlıklar altında açıklanmıştır. Servislerden dönen hata kodları ve sürümlerde yapılan değişiklikler bu online doküman aracılığıyla yayınlanmaktadır. Servislerden dönen tarih/saat bilgisi `UTC` olarak verilmiştir.  API ile ilgili sorularınızı bir [destek talebi oluşturarak](https://app.metunic.com.tr/client/plugin/support_manager/client_tickets/) iletebilirsiniz.  # Hata Kodları ve Açıklamaları  |  Hata kodu  | Açıklama                                                            | |:-----------:|:--------------------------------------------------------------------| |     `0`     | Kayıt Bulunamadı.                                                   | |     `1`     | İşlem Başarılıdır.                                                  | |     `2`     | İşlem Başarısızdır.                                                 | |     `3`     | Sisteme Giriş Yapılmalıdır                                          | |     `4`     | Aykırı durum oluşmuştur.                                            | |     `5`     | Veri müşteriye ait değildir.                                        | |     `6`     | Girilen veri tutarsızdır.                                           | |     `7`     | Yeterli kredi yoktur.                                               | |     `8`     | Alan adı kullanımdadır.                                             | |     `9`     | Bu alan adına ait ticket bulunamamıştır.                            | |    `10`     | Müşteri kredisi bulunmaktadır.                                      | |    `11`     | Müşteri kredisi bulunmamaktadır.                                    | |    `12`     | Alan adı kullanıma uygundur.                                        | |    `13`     | Bekleyen durumunda istek olduğu için bu servis iptal edilmiştir.    | |    `14`     | 2 kere üst üste lock ya da unlock yapmaya çalıştınız.               | |    `15`     | Benzer alan adı sunucusunu ekleme çalışıyorsunuz.                   | |    `16`     | Mevcut olmayan alan adı sunucusunu silmeye çalışıyorsunuz.          | |    `17`     | Benzer alt alan adı sunucusunu ekleme çalışıyorsunuz.               | |    `18`     | Mevcut olmayan alt alan adı sunucusunu güncellemeye çalışıyorsunuz. | |    `19`     | Mevcut olmayan alt alan adı sunucusunu güncellemeye çalışıyorsunuz. | |    `20`     | İlgili kayıt silinmiştir.                                           | |    `21`     | Lütfen Tld uzantı (.com,.net,.org) ile ilgili işlem yapınız.        | |    `22`     | İlgili contact bulunamamistir.                                      |  # Akışlar  ## (TLD) Kayıt Süreci   1. Kaydedilmek istenen alan adının kayıt için uygunluk durumu     [/domains/check](#operation/getDomainName) servisi ile sorgulanır.  2. Kaydedilmek istenen alan adının kayıt ücretinin öğrenmek için [/pricings/pricings-tld](#operation/getPricingsByTld) servisi kullanılır.   3. Müşterinin mevcut kredi miktarını [/transactions/credit](#operation/getCredits) servisinden öğrenilir.  4. Kayıt sırasında istenen `owner`,  `billing`, `technical` ve     `admin` alanlarına yazılacak sorumlu kodu (**id**) [/contacts](#operation/getContacts) servisinden öğrenilir eğer yeni     sorumlu eklenecekse  [/contacts/add](#operation/add) servisi kullanılır.  5. Kayıt sırasında en az iki en fazla beş alan adı sunucusu belirtilebilir.  6. Kayıt sırasında istenen `duration` parametresi ilgili alan adının     kaç yıl boyunca kaydedileceğini belirler bu değer en az `1` en fazla `10` olabilir.   ## (TR) Kayıt Süreci   1. Kaydedilmek istenen alan adının kayıt için uygunluk durumu     [/domains/check](#operation/getDomainName) servisi ile sorgulanır.  2. Kaydedilmek istenen alan adının kayıt ücretinin öğrenmek için [/pricings/pricings-tld](#operation/getPricingsByTld) servisi kullanılır.   3. Müşterinin mevcut kredi miktarını [/transactions/credit](#operation/getCredits) servisinden öğrenilir.  4. Eğer registrant_type = individual ise registrant_citizen_id ve registrant_name alanları girilmelidir.  5. Eğer registrant_type = organization ise registrant_organization, registrant_tax_office ve registrant_tax_number alanları girilmelidir.  6. Kayıt sırasında istenen registrant_country alanına yazılacak değer [/lookup/tr/countries](#operation/getTrCountries) servisinden öğrenilir.  7. Kayıt sırasında istenen registrant_city alanına yazılacak değer [/lookup/tr/states/](#operation/getTrStates) servisinden öğrenilir.  7. Kayıt sırasında en az iki en fazla beş alan adı sunucusu belirtilebilir.  8. Kayıt sırasında istenen `duration` parametresi ilgili alan adının kaç yıl boyunca kaydedileceğini belirler bu değer en az `1` en fazla `5` olabilir.  9. Eğer belgeli alan adı başvurusu yapıldıysa [/file/uploadfile](#operation/uploadFile) servisi kullanılarak ilgili alan adı için belge gönderilir. # Sürüm Notları  ## v1.3.10  - [/orders/tld](#operation/addOrderv3) servisine idn desteği eklendi. - [/domainzones](#tag/domainzones) altındaki servisler *deprecated* olarak işaretlenmiştir. Bu servisler ilerleyen sürümlerde API'den kaldırılacağı için kullanılmamaları tavsiye edilmektedir.  ## v1.3.9  Bugfix:  - [/services/{serviceId}/renew-duration](#operation/renewServiceV2)  ## v1.3.8  Bugfix:  - [/services/{serviceId}/tld/nameservers/add](#operation/addNameServers)  ## v1.3.7  Contact'a ait telefon numaralarıyla ilgili listeleme, ekleme ve silme servisleri eklendi:  - [/contacts/{id}/phones](#operation/getContactsPhones) - [/contacts/{id}/phones/add](#operation/addContactsPhone) - [/contacts/{id}/phones/delete](#operation/deleteContactsPhone)  Bugfix:  - [/services/{serviceId}/tld/info](#operation/DomainInfo) - [/services/{serviceId}/tld/nameservers/change](#operation/setNameserversTld) - [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)  ## v1.3.6  Bugfix:  - [/services/{serviceId}/tld/info](#operation/DomainInfo) - [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)  ## v1.3.5  Minor bugfix.  ## v1.3.4  Bugfix:  - [/services/queried-services](#operation/queryService)  ## v1.3.3  API'nin bu versiyonunda bazı servisler *deprecated* olarak işaretlenmiştir. Bu servisler ilk major versiyon geçişinde API'den kaldırılacağı için kullanılmamaları / alternatiflerinin kullanılmaya başlanması tavsiye edilmektedir. Tüm istemci uygulamalar için tekrar swagger client üretilerek değişikliklerin gözden geçirilmesi önerilmektedir.  - Aşağıdaki servislerin kullanılmaması tavsiye edilmiştir. Bu servisler yerine (yeni eklenen/var olan) servislerin kullanılması önerilmektedir.   - <del>[/lookup/countries](#operation/getCountries)</del> -> [/lookup/tld/countries](#operation/getTldCountries)    - <del>[/lookup/states/{countryCode}](#operation/getStates)</del> -> [/lookup/tld/states/{countryCode}](#operation/getTldStates)   - <del>[/services/{serviceId}/status](#operation/getServiceStatus)</del> -> [/services/{serviceId}](#operation/getServiceById)   - <del>[/services/{serviceId}/tld/transfer/info](#operation/transferDomainStatus)</del> -> [/services/{serviceId}/tld/info](#operation/DomainInfo) - .tr alan adı başvurusu için gerekli ülke ve il/eyalet kodlarını sorgulamak için lookup servisleri eklendi.   - [/lookup/tr/countries](#operation/getTrCountries)   - [/lookup/tr/states/{countryCode}](#operation/getTrStates) - (TLD) Alan adı sunucusu güncellemek için yeni bir servis eklendi. Bu servis mevcut ekleme, silme ve listeleme servislerinin bir bütünü olup çalışması normalden uzun sürebilmektedir. Servis client tarafında yapılacak isteklerin azaltılması amacıyla eklenmiştir.   - [/services/{serviceId}/tld/nameservers/change](#operation/setNameserversTld) - Alan adı başvuruları sırasında izlenmesi gereken [Akışlar](#section/Akislar) dokümana eklendi. - Bugfix:   - [/services/{serviceId}/tld/transfer/unlock](#operation/unlockDomain)   - [/services/{serviceId}/tld/subns](#operation/getListSubDns)  ## v1.3.2  Bugfix:  - [/contacts/{id}/edit](#operation/update)  ## v1.3.1  Bugfix:  - [/services/{serviceId}/tld/contacts](#operation/contactDomainRelation) - [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)  ## v1.3.0  API'nin bu versiyonunda önceki sürümlerle uyumlu olmayan değişiklikler bulunmaktadır. Tüm istemci uygulamalar için tekrar swagger client üretilerek değişikliklerin gözden geçirilmesi önerilmektedir.  - Hata kodları güncellendi. - Servislerde HTTP method'ları (`GET`, `POST`, `PUT`, `DELETE`) düzenlendi. - Servislerde zorunlu parametreler düzenlendi. - [/pricings/pricings-tld](#operation/getPricingsByTld) servisine `duration` parametresi eklendi. - [/services/{serviceId}/tr/nameservers/change](#operation/setNameserversTr) servis parametreleri güncellendi. - Contact oluşturmak için gerekli ülke ve il/eyalet kodlarını sorgulamak için lookup servisleri eklendi.   - [/lookup/countries](#operation/getCountries)   - [/lookup/states/{countryCode}](#operation/getStates) - Bazı servislerde karşılaşılan hatalar giderildi. - Aşağıdaki tabloda bulunan endpoint'lerde;    - path'den okunması gerekirken query'den okunan `serviceId` parametreleri düzeltildi   - \"subns\" servislerinin endpoint'leri düzenlendi.   - \".tr\" dışında kalan \"tld\" servisler özelindeki endpoint'lerin isimleri güncellendi.    | Endpoint                                                                       |                       Örnek  (eski)                        |             Örnek (yeni)             |   |--------------------------------------------------------------------------------|:------------------------------------------------------------------------------:|:------------------------------------:|   | [/services/{serviceId}/tld/subns/add]( #operation/addSubName )                   |          /services/{serviceId}/add?serviceId=1234          |       /services/1234/tld/subns/add       |   | [/services/{serviceId}/tld/subns/delete](#operation/deleteSubName)                 |        /services/{serviceId}/delete?serviceId=1234         |     /services/1234/tld/subns/delete      |   | [/services/{serviceId}/tld/subns/edit](#operation/editSubName)                     |         /services/{serviceId}/edit?serviceId=1234          |      /services/1234/tld/subns/edit       |   | [/services/{serviceId}/tld/subns](#operation/getListSubDns)                        |         /services/{serviceId}/subns?serviceId=1234         |         /services/1234/tld/subns         |   | [/services/{serviceId}/tld/contacts](#operation/contactDomainRelation)         |        /services/{serviceId}/contact?serviceId=1234        |     /services/1234/tld/contacts      |   | [/services/{serviceId}/tld/contacts/update](#operation/contactDomainEditRelation) |    /services/{serviceId}/contacts/update?serviceId=1234    |    /services/1234/tld/contacts/update    |   | [/services/{serviceId}/tld/nameservers/add](#operation/addNameServers)             |    /services/{serviceId}/nameservers/add?serviceId=1234    |    /services/1234/tld/nameservers/add    |   | [/services/{serviceId}/tld/nameservers/delete](#operation/removeDomainNameservers) |  /services/{serviceId}/nameservers/delete?serviceId=1234   |  /services/1234/tld/nameservers/delete   |   | [/services/{serviceId}/tld/nameservers/list](#operation/listNameserversTld)   | /services/{serviceId}/tld/nameservers/list?serviceId=1234  | /services/1234/tld/nameservers/list  |   | [/services/{serviceId}/tr/nameservers/change](#operation/setNameserversTr)     | /services/{serviceId}/tr/nameservers/change?serviceId=1234 | /services/1234/tr/nameservers/change |   | [/services/{serviceId}/tr/nameservers/list](#operation/listNameserversTr)      |  /services/{serviceId}/tr/nameservers/list?serviceId=1234  |  /services/1234/tr/nameservers/list  |   | [/services/{serviceId}/tld/transfer/info](#operation/transferDomainStatus)         |     /services/{serviceId}/transfer/info?serviceId=1234     |     /services/1234/tld/transfer/info     |   | [/services/{serviceId}/tld/transfer/unlock](#operation/unlockDomain)               |    /services/{serviceId}/transfer/unlock?serviceId=1234    |    /services/1234/tld/transfer/unlock    |   | [/transfers/tld/{serviceId}/status](#operation/transferListTransferIn)         |      /transfers/tld/{serviceId}/status?serviceId=1234      |      /transfers/tld/1234/status      |
 *
 * OpenAPI spec version: 1.3.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation addOrder
     *
     * (TR) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $registrant_type Kayıt yapan türü (required)
     * @param  string $registrant_address1 Kayıt yapan adres 1 (required)
     * @param  string $registrant_address2 Kayıt yapan adres 2 (required)
     * @param  string $registrant_country Kayıt yapan ülke kodu (required)
     * @param  string $registrant_city Kayıt yapan il kodu (required)
     * @param  string $registrant_postal_code Kayıt yapan posta kodu (required)
     * @param  string $registrant_phone Kayıt yapan telefon no (required)
     * @param  string $registrant_email_address Kayıt yapan eposta adresi (required)
     * @param  string $domain Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  string $registrant_name Kayıt yapan kişi ad soyad (optional)
     * @param  string $registrant_citizen_id Kayıt yapan kişi kimlik no (optional)
     * @param  string $registrant_organization Kayıt yapan organizasyon adı (optional)
     * @param  string $registrant_tax_office Kayıt yapan vergi dairesi (optional)
     * @param  string $registrant_tax_number Kayıt yapan vergi no (optional)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addOrder($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name = null, $registrant_citizen_id = null, $registrant_organization = null, $registrant_tax_office = null, $registrant_tax_number = null, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        list($response) = $this->addOrderWithHttpInfo($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name, $registrant_citizen_id, $registrant_organization, $registrant_tax_office, $registrant_tax_number, $ns3, $ns4, $ns5);
        return $response;
    }

    /**
     * Operation addOrderWithHttpInfo
     *
     * (TR) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $registrant_type Kayıt yapan türü (required)
     * @param  string $registrant_address1 Kayıt yapan adres 1 (required)
     * @param  string $registrant_address2 Kayıt yapan adres 2 (required)
     * @param  string $registrant_country Kayıt yapan ülke kodu (required)
     * @param  string $registrant_city Kayıt yapan il kodu (required)
     * @param  string $registrant_postal_code Kayıt yapan posta kodu (required)
     * @param  string $registrant_phone Kayıt yapan telefon no (required)
     * @param  string $registrant_email_address Kayıt yapan eposta adresi (required)
     * @param  string $domain Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  string $registrant_name Kayıt yapan kişi ad soyad (optional)
     * @param  string $registrant_citizen_id Kayıt yapan kişi kimlik no (optional)
     * @param  string $registrant_organization Kayıt yapan organizasyon adı (optional)
     * @param  string $registrant_tax_office Kayıt yapan vergi dairesi (optional)
     * @param  string $registrant_tax_number Kayıt yapan vergi no (optional)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addOrderWithHttpInfo($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name = null, $registrant_citizen_id = null, $registrant_organization = null, $registrant_tax_office = null, $registrant_tax_number = null, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addOrderRequest($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name, $registrant_citizen_id, $registrant_organization, $registrant_tax_office, $registrant_tax_number, $ns3, $ns4, $ns5);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GeneralWebServiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addOrderAsync
     *
     * (TR) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $registrant_type Kayıt yapan türü (required)
     * @param  string $registrant_address1 Kayıt yapan adres 1 (required)
     * @param  string $registrant_address2 Kayıt yapan adres 2 (required)
     * @param  string $registrant_country Kayıt yapan ülke kodu (required)
     * @param  string $registrant_city Kayıt yapan il kodu (required)
     * @param  string $registrant_postal_code Kayıt yapan posta kodu (required)
     * @param  string $registrant_phone Kayıt yapan telefon no (required)
     * @param  string $registrant_email_address Kayıt yapan eposta adresi (required)
     * @param  string $domain Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  string $registrant_name Kayıt yapan kişi ad soyad (optional)
     * @param  string $registrant_citizen_id Kayıt yapan kişi kimlik no (optional)
     * @param  string $registrant_organization Kayıt yapan organizasyon adı (optional)
     * @param  string $registrant_tax_office Kayıt yapan vergi dairesi (optional)
     * @param  string $registrant_tax_number Kayıt yapan vergi no (optional)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addOrderAsync($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name = null, $registrant_citizen_id = null, $registrant_organization = null, $registrant_tax_office = null, $registrant_tax_number = null, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        return $this->addOrderAsyncWithHttpInfo($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name, $registrant_citizen_id, $registrant_organization, $registrant_tax_office, $registrant_tax_number, $ns3, $ns4, $ns5)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addOrderAsyncWithHttpInfo
     *
     * (TR) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $registrant_type Kayıt yapan türü (required)
     * @param  string $registrant_address1 Kayıt yapan adres 1 (required)
     * @param  string $registrant_address2 Kayıt yapan adres 2 (required)
     * @param  string $registrant_country Kayıt yapan ülke kodu (required)
     * @param  string $registrant_city Kayıt yapan il kodu (required)
     * @param  string $registrant_postal_code Kayıt yapan posta kodu (required)
     * @param  string $registrant_phone Kayıt yapan telefon no (required)
     * @param  string $registrant_email_address Kayıt yapan eposta adresi (required)
     * @param  string $domain Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  string $registrant_name Kayıt yapan kişi ad soyad (optional)
     * @param  string $registrant_citizen_id Kayıt yapan kişi kimlik no (optional)
     * @param  string $registrant_organization Kayıt yapan organizasyon adı (optional)
     * @param  string $registrant_tax_office Kayıt yapan vergi dairesi (optional)
     * @param  string $registrant_tax_number Kayıt yapan vergi no (optional)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addOrderAsyncWithHttpInfo($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name = null, $registrant_citizen_id = null, $registrant_organization = null, $registrant_tax_office = null, $registrant_tax_number = null, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addOrderRequest($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name, $registrant_citizen_id, $registrant_organization, $registrant_tax_office, $registrant_tax_number, $ns3, $ns4, $ns5);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'addOrder'
     *
     * @param  string $registrant_type Kayıt yapan türü (required)
     * @param  string $registrant_address1 Kayıt yapan adres 1 (required)
     * @param  string $registrant_address2 Kayıt yapan adres 2 (required)
     * @param  string $registrant_country Kayıt yapan ülke kodu (required)
     * @param  string $registrant_city Kayıt yapan il kodu (required)
     * @param  string $registrant_postal_code Kayıt yapan posta kodu (required)
     * @param  string $registrant_phone Kayıt yapan telefon no (required)
     * @param  string $registrant_email_address Kayıt yapan eposta adresi (required)
     * @param  string $domain Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  string $registrant_name Kayıt yapan kişi ad soyad (optional)
     * @param  string $registrant_citizen_id Kayıt yapan kişi kimlik no (optional)
     * @param  string $registrant_organization Kayıt yapan organizasyon adı (optional)
     * @param  string $registrant_tax_office Kayıt yapan vergi dairesi (optional)
     * @param  string $registrant_tax_number Kayıt yapan vergi no (optional)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addOrderRequest($registrant_type, $registrant_address1, $registrant_address2, $registrant_country, $registrant_city, $registrant_postal_code, $registrant_phone, $registrant_email_address, $domain, $ns1, $ns2, $duration, $registrant_name = null, $registrant_citizen_id = null, $registrant_organization = null, $registrant_tax_office = null, $registrant_tax_number = null, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        // verify the required parameter 'registrant_type' is set
        if ($registrant_type === null || (is_array($registrant_type) && count($registrant_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_type when calling addOrder'
            );
        }
        // verify the required parameter 'registrant_address1' is set
        if ($registrant_address1 === null || (is_array($registrant_address1) && count($registrant_address1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_address1 when calling addOrder'
            );
        }
        // verify the required parameter 'registrant_address2' is set
        if ($registrant_address2 === null || (is_array($registrant_address2) && count($registrant_address2) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_address2 when calling addOrder'
            );
        }
        // verify the required parameter 'registrant_country' is set
        if ($registrant_country === null || (is_array($registrant_country) && count($registrant_country) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_country when calling addOrder'
            );
        }
        // verify the required parameter 'registrant_city' is set
        if ($registrant_city === null || (is_array($registrant_city) && count($registrant_city) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_city when calling addOrder'
            );
        }
        // verify the required parameter 'registrant_postal_code' is set
        if ($registrant_postal_code === null || (is_array($registrant_postal_code) && count($registrant_postal_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_postal_code when calling addOrder'
            );
        }
        // verify the required parameter 'registrant_phone' is set
        if ($registrant_phone === null || (is_array($registrant_phone) && count($registrant_phone) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_phone when calling addOrder'
            );
        }
        // verify the required parameter 'registrant_email_address' is set
        if ($registrant_email_address === null || (is_array($registrant_email_address) && count($registrant_email_address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_email_address when calling addOrder'
            );
        }
        // verify the required parameter 'domain' is set
        if ($domain === null || (is_array($domain) && count($domain) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain when calling addOrder'
            );
        }
        // verify the required parameter 'ns1' is set
        if ($ns1 === null || (is_array($ns1) && count($ns1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ns1 when calling addOrder'
            );
        }
        // verify the required parameter 'ns2' is set
        if ($ns2 === null || (is_array($ns2) && count($ns2) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ns2 when calling addOrder'
            );
        }
        // verify the required parameter 'duration' is set
        if ($duration === null || (is_array($duration) && count($duration) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $duration when calling addOrder'
            );
        }

        $resourcePath = '/orders/tr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($registrant_type !== null) {
            $queryParams['registrant_type'] = ObjectSerializer::toQueryValue($registrant_type, null);
        }
        // query params
        if ($registrant_name !== null) {
            $queryParams['registrant_name'] = ObjectSerializer::toQueryValue($registrant_name, null);
        }
        // query params
        if ($registrant_citizen_id !== null) {
            $queryParams['registrant_citizen_id'] = ObjectSerializer::toQueryValue($registrant_citizen_id, null);
        }
        // query params
        if ($registrant_organization !== null) {
            $queryParams['registrant_organization'] = ObjectSerializer::toQueryValue($registrant_organization, null);
        }
        // query params
        if ($registrant_tax_office !== null) {
            $queryParams['registrant_tax_office'] = ObjectSerializer::toQueryValue($registrant_tax_office, null);
        }
        // query params
        if ($registrant_tax_number !== null) {
            $queryParams['registrant_tax_number'] = ObjectSerializer::toQueryValue($registrant_tax_number, null);
        }
        // query params
        if ($registrant_address1 !== null) {
            $queryParams['registrant_address1'] = ObjectSerializer::toQueryValue($registrant_address1, null);
        }
        // query params
        if ($registrant_address2 !== null) {
            $queryParams['registrant_address2'] = ObjectSerializer::toQueryValue($registrant_address2, null);
        }
        // query params
        if ($registrant_country !== null) {
            $queryParams['registrant_country'] = ObjectSerializer::toQueryValue($registrant_country, null);
        }
        // query params
        if ($registrant_city !== null) {
            $queryParams['registrant_city'] = ObjectSerializer::toQueryValue($registrant_city, null);
        }
        // query params
        if ($registrant_postal_code !== null) {
            $queryParams['registrant_postal_code'] = ObjectSerializer::toQueryValue($registrant_postal_code, null);
        }
        // query params
        if ($registrant_phone !== null) {
            $queryParams['registrant_phone'] = ObjectSerializer::toQueryValue($registrant_phone, null);
        }
        // query params
        if ($registrant_email_address !== null) {
            $queryParams['registrant_email_address'] = ObjectSerializer::toQueryValue($registrant_email_address, null);
        }
        // query params
        if ($domain !== null) {
            $queryParams['domain'] = ObjectSerializer::toQueryValue($domain, null);
        }
        // query params
        if ($ns1 !== null) {
            $queryParams['ns1'] = ObjectSerializer::toQueryValue($ns1, null);
        }
        // query params
        if ($ns2 !== null) {
            $queryParams['ns2'] = ObjectSerializer::toQueryValue($ns2, null);
        }
        // query params
        if ($ns3 !== null) {
            $queryParams['ns3'] = ObjectSerializer::toQueryValue($ns3, null);
        }
        // query params
        if ($ns4 !== null) {
            $queryParams['ns4'] = ObjectSerializer::toQueryValue($ns4, null);
        }
        // query params
        if ($ns5 !== null) {
            $queryParams['ns5'] = ObjectSerializer::toQueryValue($ns5, null);
        }
        // query params
        if ($duration !== null) {
            $queryParams['duration'] = ObjectSerializer::toQueryValue($duration, 'int32');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Cookie');
        if ($apiKey !== null) {
            $headers['Cookie'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation addOrderv3
     *
     * (TLD) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $domain_name Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  int $owner owner (required)
     * @param  int $billing billing (required)
     * @param  int $technical technical (required)
     * @param  int $admin admin (required)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addOrderv3($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        list($response) = $this->addOrderv3WithHttpInfo($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3, $ns4, $ns5);
        return $response;
    }

    /**
     * Operation addOrderv3WithHttpInfo
     *
     * (TLD) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $domain_name Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  int $owner owner (required)
     * @param  int $billing billing (required)
     * @param  int $technical technical (required)
     * @param  int $admin admin (required)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addOrderv3WithHttpInfo($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addOrderv3Request($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3, $ns4, $ns5);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GeneralWebServiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addOrderv3Async
     *
     * (TLD) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $domain_name Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  int $owner owner (required)
     * @param  int $billing billing (required)
     * @param  int $technical technical (required)
     * @param  int $admin admin (required)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addOrderv3Async($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        return $this->addOrderv3AsyncWithHttpInfo($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3, $ns4, $ns5)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addOrderv3AsyncWithHttpInfo
     *
     * (TLD) Talimat Ekle (Alan Adı Satın Al)
     *
     * @param  string $domain_name Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  int $owner owner (required)
     * @param  int $billing billing (required)
     * @param  int $technical technical (required)
     * @param  int $admin admin (required)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addOrderv3AsyncWithHttpInfo($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addOrderv3Request($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3, $ns4, $ns5);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'addOrderv3'
     *
     * @param  string $domain_name Alan Adı (required)
     * @param  string $ns1 Alan adı sunucusu 1 (required)
     * @param  string $ns2 Alan adı sunucusu 2 (required)
     * @param  int $duration Süre (required)
     * @param  int $owner owner (required)
     * @param  int $billing billing (required)
     * @param  int $technical technical (required)
     * @param  int $admin admin (required)
     * @param  string $ns3 Alan adı sunucusu 3 (optional)
     * @param  string $ns4 Alan adı sunucusu 4 (optional)
     * @param  string $ns5 Alan adı sunucusu 5 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addOrderv3Request($domain_name, $ns1, $ns2, $duration, $owner, $billing, $technical, $admin, $ns3 = null, $ns4 = null, $ns5 = null)
    {
        // verify the required parameter 'domain_name' is set
        if ($domain_name === null || (is_array($domain_name) && count($domain_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_name when calling addOrderv3'
            );
        }
        // verify the required parameter 'ns1' is set
        if ($ns1 === null || (is_array($ns1) && count($ns1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ns1 when calling addOrderv3'
            );
        }
        // verify the required parameter 'ns2' is set
        if ($ns2 === null || (is_array($ns2) && count($ns2) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ns2 when calling addOrderv3'
            );
        }
        // verify the required parameter 'duration' is set
        if ($duration === null || (is_array($duration) && count($duration) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $duration when calling addOrderv3'
            );
        }
        // verify the required parameter 'owner' is set
        if ($owner === null || (is_array($owner) && count($owner) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $owner when calling addOrderv3'
            );
        }
        // verify the required parameter 'billing' is set
        if ($billing === null || (is_array($billing) && count($billing) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $billing when calling addOrderv3'
            );
        }
        // verify the required parameter 'technical' is set
        if ($technical === null || (is_array($technical) && count($technical) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $technical when calling addOrderv3'
            );
        }
        // verify the required parameter 'admin' is set
        if ($admin === null || (is_array($admin) && count($admin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $admin when calling addOrderv3'
            );
        }

        $resourcePath = '/orders/tld';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($domain_name !== null) {
            $queryParams['domainName'] = ObjectSerializer::toQueryValue($domain_name, null);
        }
        // query params
        if ($ns1 !== null) {
            $queryParams['ns1'] = ObjectSerializer::toQueryValue($ns1, null);
        }
        // query params
        if ($ns2 !== null) {
            $queryParams['ns2'] = ObjectSerializer::toQueryValue($ns2, null);
        }
        // query params
        if ($ns3 !== null) {
            $queryParams['ns3'] = ObjectSerializer::toQueryValue($ns3, null);
        }
        // query params
        if ($ns4 !== null) {
            $queryParams['ns4'] = ObjectSerializer::toQueryValue($ns4, null);
        }
        // query params
        if ($ns5 !== null) {
            $queryParams['ns5'] = ObjectSerializer::toQueryValue($ns5, null);
        }
        // query params
        if ($duration !== null) {
            $queryParams['duration'] = ObjectSerializer::toQueryValue($duration, 'int32');
        }
        // query params
        if ($owner !== null) {
            $queryParams['owner'] = ObjectSerializer::toQueryValue($owner, 'int64');
        }
        // query params
        if ($billing !== null) {
            $queryParams['billing'] = ObjectSerializer::toQueryValue($billing, 'int64');
        }
        // query params
        if ($technical !== null) {
            $queryParams['technical'] = ObjectSerializer::toQueryValue($technical, 'int64');
        }
        // query params
        if ($admin !== null) {
            $queryParams['admin'] = ObjectSerializer::toQueryValue($admin, 'int64');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Cookie');
        if ($apiKey !== null) {
            $headers['Cookie'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
