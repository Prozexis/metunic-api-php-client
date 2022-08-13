<?php
/**
 * ContactsApi
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
 * ContactsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactsApi
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
     * Operation add
     *
     * İletişim Bilgisi Ekle
     *
     * @param  string $first_name first_name (required)
     * @param  string $last_name last_name (required)
     * @param  string $email email (required)
     * @param  string $address1 address1 (required)
     * @param  string $city city (required)
     * @param  string $state state (required)
     * @param  string $zip zip (required)
     * @param  string $country country (required)
     * @param  string $phone_number phone_number (required)
     * @param  string $title title (optional)
     * @param  string $company company (optional)
     * @param  string $address2 address2 (optional)
     * @param  string $phone_number_type phone_number_type (optional, default to phone)
     * @param  string $phone_number_location phone_number_location (optional, default to home)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function add($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        list($response) = $this->addWithHttpInfo($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);
        return $response;
    }

    /**
     * Operation addWithHttpInfo
     *
     * İletişim Bilgisi Ekle
     *
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addWithHttpInfo($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addRequest($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);

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
     * Operation addAsync
     *
     * İletişim Bilgisi Ekle
     *
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        return $this->addAsyncWithHttpInfo($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addAsyncWithHttpInfo
     *
     * İletişim Bilgisi Ekle
     *
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsyncWithHttpInfo($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addRequest($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);

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
     * Create request for operation 'add'
     *
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addRequest($first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        // verify the required parameter 'first_name' is set
        if ($first_name === null || (is_array($first_name) && count($first_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $first_name when calling add'
            );
        }
        // verify the required parameter 'last_name' is set
        if ($last_name === null || (is_array($last_name) && count($last_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $last_name when calling add'
            );
        }
        // verify the required parameter 'email' is set
        if ($email === null || (is_array($email) && count($email) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $email when calling add'
            );
        }
        // verify the required parameter 'address1' is set
        if ($address1 === null || (is_array($address1) && count($address1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address1 when calling add'
            );
        }
        // verify the required parameter 'city' is set
        if ($city === null || (is_array($city) && count($city) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $city when calling add'
            );
        }
        // verify the required parameter 'state' is set
        if ($state === null || (is_array($state) && count($state) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $state when calling add'
            );
        }
        // verify the required parameter 'zip' is set
        if ($zip === null || (is_array($zip) && count($zip) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip when calling add'
            );
        }
        // verify the required parameter 'country' is set
        if ($country === null || (is_array($country) && count($country) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country when calling add'
            );
        }
        // verify the required parameter 'phone_number' is set
        if ($phone_number === null || (is_array($phone_number) && count($phone_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $phone_number when calling add'
            );
        }

        $resourcePath = '/contacts/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($first_name !== null) {
            $queryParams['firstName'] = ObjectSerializer::toQueryValue($first_name, null);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['lastName'] = ObjectSerializer::toQueryValue($last_name, null);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = ObjectSerializer::toQueryValue($title, null);
        }
        // query params
        if ($company !== null) {
            $queryParams['company'] = ObjectSerializer::toQueryValue($company, null);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email, null);
        }
        // query params
        if ($address1 !== null) {
            $queryParams['address1'] = ObjectSerializer::toQueryValue($address1, null);
        }
        // query params
        if ($address2 !== null) {
            $queryParams['address2'] = ObjectSerializer::toQueryValue($address2, null);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = ObjectSerializer::toQueryValue($city, null);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state, null);
        }
        // query params
        if ($zip !== null) {
            $queryParams['zip'] = ObjectSerializer::toQueryValue($zip, null);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = ObjectSerializer::toQueryValue($country, null);
        }
        // query params
        if ($phone_number !== null) {
            $queryParams['phoneNumber'] = ObjectSerializer::toQueryValue($phone_number, null);
        }
        // query params
        if ($phone_number_type !== null) {
            $queryParams['phoneNumberType'] = ObjectSerializer::toQueryValue($phone_number_type, null);
        }
        // query params
        if ($phone_number_location !== null) {
            $queryParams['phoneNumberLocation'] = ObjectSerializer::toQueryValue($phone_number_location, null);
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
     * Operation addContactsPhone
     *
     * Contact'a telefon numarası ekle
     *
     * @param  int $id Contact id (required)
     * @param  string $phone_number phone_number (required)
     * @param  string $phone_number_type phone_number_type (optional, default to phone)
     * @param  string $phone_number_location phone_number_location (optional, default to home)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addContactsPhone($id, $phone_number, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        list($response) = $this->addContactsPhoneWithHttpInfo($id, $phone_number, $phone_number_type, $phone_number_location);
        return $response;
    }

    /**
     * Operation addContactsPhoneWithHttpInfo
     *
     * Contact'a telefon numarası ekle
     *
     * @param  int $id Contact id (required)
     * @param  string $phone_number (required)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addContactsPhoneWithHttpInfo($id, $phone_number, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addContactsPhoneRequest($id, $phone_number, $phone_number_type, $phone_number_location);

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
     * Operation addContactsPhoneAsync
     *
     * Contact'a telefon numarası ekle
     *
     * @param  int $id Contact id (required)
     * @param  string $phone_number (required)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addContactsPhoneAsync($id, $phone_number, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        return $this->addContactsPhoneAsyncWithHttpInfo($id, $phone_number, $phone_number_type, $phone_number_location)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addContactsPhoneAsyncWithHttpInfo
     *
     * Contact'a telefon numarası ekle
     *
     * @param  int $id Contact id (required)
     * @param  string $phone_number (required)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addContactsPhoneAsyncWithHttpInfo($id, $phone_number, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addContactsPhoneRequest($id, $phone_number, $phone_number_type, $phone_number_location);

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
     * Create request for operation 'addContactsPhone'
     *
     * @param  int $id Contact id (required)
     * @param  string $phone_number (required)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addContactsPhoneRequest($id, $phone_number, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling addContactsPhone'
            );
        }
        // verify the required parameter 'phone_number' is set
        if ($phone_number === null || (is_array($phone_number) && count($phone_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $phone_number when calling addContactsPhone'
            );
        }

        $resourcePath = '/contacts/{id}/phones/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($phone_number !== null) {
            $queryParams['phoneNumber'] = ObjectSerializer::toQueryValue($phone_number, null);
        }
        // query params
        if ($phone_number_type !== null) {
            $queryParams['phoneNumberType'] = ObjectSerializer::toQueryValue($phone_number_type, null);
        }
        // query params
        if ($phone_number_location !== null) {
            $queryParams['phoneNumberLocation'] = ObjectSerializer::toQueryValue($phone_number_location, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
     * Operation delete
     *
     * İletişim Bilgisi Silme
     *
     * @param  int $id id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function delete($id)
    {
        list($response) = $this->deleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteWithHttpInfo
     *
     * İletişim Bilgisi Silme
     *
     * @param  int $id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->deleteRequest($id);

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
     * Operation deleteAsync
     *
     * İletişim Bilgisi Silme
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync($id)
    {
        return $this->deleteAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteAsyncWithHttpInfo
     *
     * İletişim Bilgisi Silme
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->deleteRequest($id);

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
     * Create request for operation 'delete'
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling delete'
            );
        }

        $resourcePath = '/contacts/{id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteContactsPhone
     *
     * Contactdan telefon numarası silme
     *
     * @param  int $id id (required)
     * @param  int $phone_number_id phone_number_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function deleteContactsPhone($id, $phone_number_id)
    {
        list($response) = $this->deleteContactsPhoneWithHttpInfo($id, $phone_number_id);
        return $response;
    }

    /**
     * Operation deleteContactsPhoneWithHttpInfo
     *
     * Contactdan telefon numarası silme
     *
     * @param  int $id (required)
     * @param  int $phone_number_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteContactsPhoneWithHttpInfo($id, $phone_number_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->deleteContactsPhoneRequest($id, $phone_number_id);

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
     * Operation deleteContactsPhoneAsync
     *
     * Contactdan telefon numarası silme
     *
     * @param  int $id (required)
     * @param  int $phone_number_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContactsPhoneAsync($id, $phone_number_id)
    {
        return $this->deleteContactsPhoneAsyncWithHttpInfo($id, $phone_number_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteContactsPhoneAsyncWithHttpInfo
     *
     * Contactdan telefon numarası silme
     *
     * @param  int $id (required)
     * @param  int $phone_number_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContactsPhoneAsyncWithHttpInfo($id, $phone_number_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->deleteContactsPhoneRequest($id, $phone_number_id);

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
     * Create request for operation 'deleteContactsPhone'
     *
     * @param  int $id (required)
     * @param  int $phone_number_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteContactsPhoneRequest($id, $phone_number_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteContactsPhone'
            );
        }
        // verify the required parameter 'phone_number_id' is set
        if ($phone_number_id === null || (is_array($phone_number_id) && count($phone_number_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $phone_number_id when calling deleteContactsPhone'
            );
        }

        $resourcePath = '/contacts/{id}/phones/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($phone_number_id !== null) {
            $queryParams['phoneNumberId'] = ObjectSerializer::toQueryValue($phone_number_id, 'int64');
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getContacts
     *
     * İletişim Listesi
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function getContacts()
    {
        list($response) = $this->getContactsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getContactsWithHttpInfo
     *
     * İletişim Listesi
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactsWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getContactsRequest();

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
     * Operation getContactsAsync
     *
     * İletişim Listesi
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAsync()
    {
        return $this->getContactsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getContactsAsyncWithHttpInfo
     *
     * İletişim Listesi
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getContactsRequest();

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
     * Create request for operation 'getContacts'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactsRequest()
    {

        $resourcePath = '/contacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getContactsAll
     *
     * İletişim Bilgisi Getir
     *
     * @param  int $id Contact id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function getContactsAll($id)
    {
        list($response) = $this->getContactsAllWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getContactsAllWithHttpInfo
     *
     * İletişim Bilgisi Getir
     *
     * @param  int $id Contact id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactsAllWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getContactsAllRequest($id);

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
     * Operation getContactsAllAsync
     *
     * İletişim Bilgisi Getir
     *
     * @param  int $id Contact id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAllAsync($id)
    {
        return $this->getContactsAllAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getContactsAllAsyncWithHttpInfo
     *
     * İletişim Bilgisi Getir
     *
     * @param  int $id Contact id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsAllAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getContactsAllRequest($id);

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
     * Create request for operation 'getContactsAll'
     *
     * @param  int $id Contact id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactsAllRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getContactsAll'
            );
        }

        $resourcePath = '/contacts/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getContactsPhones
     *
     * Contact'a ait telefonlar
     *
     * @param  int $id Contact id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function getContactsPhones($id)
    {
        list($response) = $this->getContactsPhonesWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getContactsPhonesWithHttpInfo
     *
     * Contact'a ait telefonlar
     *
     * @param  int $id Contact id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactsPhonesWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getContactsPhonesRequest($id);

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
     * Operation getContactsPhonesAsync
     *
     * Contact'a ait telefonlar
     *
     * @param  int $id Contact id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsPhonesAsync($id)
    {
        return $this->getContactsPhonesAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getContactsPhonesAsyncWithHttpInfo
     *
     * Contact'a ait telefonlar
     *
     * @param  int $id Contact id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactsPhonesAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getContactsPhonesRequest($id);

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
     * Create request for operation 'getContactsPhones'
     *
     * @param  int $id Contact id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactsPhonesRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getContactsPhones'
            );
        }

        $resourcePath = '/contacts/{id}/phones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation update
     *
     * İletişim Bilgisi Düzenleme
     *
     * @param  int $id id (required)
     * @param  string $first_name first_name (required)
     * @param  string $last_name last_name (required)
     * @param  string $email email (required)
     * @param  string $address1 address1 (required)
     * @param  string $city city (required)
     * @param  string $state state (required)
     * @param  string $zip zip (required)
     * @param  string $country country (required)
     * @param  string $phone_number phone_number (required)
     * @param  string $title title (optional)
     * @param  string $company company (optional)
     * @param  string $address2 address2 (optional)
     * @param  string $phone_number_type phone_number_type (optional, default to phone)
     * @param  string $phone_number_location phone_number_location (optional, default to home)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function update($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        list($response) = $this->updateWithHttpInfo($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * İletişim Bilgisi Düzenleme
     *
     * @param  int $id (required)
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateRequest($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);

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
     * Operation updateAsync
     *
     * İletişim Bilgisi Düzenleme
     *
     * @param  int $id (required)
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        return $this->updateAsyncWithHttpInfo($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateAsyncWithHttpInfo
     *
     * İletişim Bilgisi Düzenleme
     *
     * @param  int $id (required)
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsyncWithHttpInfo($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateRequest($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title, $company, $address2, $phone_number_type, $phone_number_location);

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
     * Create request for operation 'update'
     *
     * @param  int $id (required)
     * @param  string $first_name (required)
     * @param  string $last_name (required)
     * @param  string $email (required)
     * @param  string $address1 (required)
     * @param  string $city (required)
     * @param  string $state (required)
     * @param  string $zip (required)
     * @param  string $country (required)
     * @param  string $phone_number (required)
     * @param  string $title (optional)
     * @param  string $company (optional)
     * @param  string $address2 (optional)
     * @param  string $phone_number_type (optional, default to phone)
     * @param  string $phone_number_location (optional, default to home)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateRequest($id, $first_name, $last_name, $email, $address1, $city, $state, $zip, $country, $phone_number, $title = null, $company = null, $address2 = null, $phone_number_type = 'phone', $phone_number_location = 'home')
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling update'
            );
        }
        // verify the required parameter 'first_name' is set
        if ($first_name === null || (is_array($first_name) && count($first_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $first_name when calling update'
            );
        }
        // verify the required parameter 'last_name' is set
        if ($last_name === null || (is_array($last_name) && count($last_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $last_name when calling update'
            );
        }
        // verify the required parameter 'email' is set
        if ($email === null || (is_array($email) && count($email) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $email when calling update'
            );
        }
        // verify the required parameter 'address1' is set
        if ($address1 === null || (is_array($address1) && count($address1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address1 when calling update'
            );
        }
        // verify the required parameter 'city' is set
        if ($city === null || (is_array($city) && count($city) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $city when calling update'
            );
        }
        // verify the required parameter 'state' is set
        if ($state === null || (is_array($state) && count($state) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $state when calling update'
            );
        }
        // verify the required parameter 'zip' is set
        if ($zip === null || (is_array($zip) && count($zip) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip when calling update'
            );
        }
        // verify the required parameter 'country' is set
        if ($country === null || (is_array($country) && count($country) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country when calling update'
            );
        }
        // verify the required parameter 'phone_number' is set
        if ($phone_number === null || (is_array($phone_number) && count($phone_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $phone_number when calling update'
            );
        }

        $resourcePath = '/contacts/{id}/edit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($first_name !== null) {
            $queryParams['firstName'] = ObjectSerializer::toQueryValue($first_name, null);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['lastName'] = ObjectSerializer::toQueryValue($last_name, null);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = ObjectSerializer::toQueryValue($title, null);
        }
        // query params
        if ($company !== null) {
            $queryParams['company'] = ObjectSerializer::toQueryValue($company, null);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email, null);
        }
        // query params
        if ($address1 !== null) {
            $queryParams['address1'] = ObjectSerializer::toQueryValue($address1, null);
        }
        // query params
        if ($address2 !== null) {
            $queryParams['address2'] = ObjectSerializer::toQueryValue($address2, null);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = ObjectSerializer::toQueryValue($city, null);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state, null);
        }
        // query params
        if ($zip !== null) {
            $queryParams['zip'] = ObjectSerializer::toQueryValue($zip, null);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = ObjectSerializer::toQueryValue($country, null);
        }
        // query params
        if ($phone_number !== null) {
            $queryParams['phoneNumber'] = ObjectSerializer::toQueryValue($phone_number, null);
        }
        // query params
        if ($phone_number_type !== null) {
            $queryParams['phoneNumberType'] = ObjectSerializer::toQueryValue($phone_number_type, null);
        }
        // query params
        if ($phone_number_location !== null) {
            $queryParams['phoneNumberLocation'] = ObjectSerializer::toQueryValue($phone_number_location, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
            'PUT',
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
