<?php
/**
 * DomainzonesApi
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
 * DomainzonesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainzonesApi
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
     * Operation addDomainZoneTypeA
     *
     * /domainzones/type/a/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addDomainZoneTypeA($service_id, $hostname, $ipv4, $ttl)
    {
        list($response) = $this->addDomainZoneTypeAWithHttpInfo($service_id, $hostname, $ipv4, $ttl);
        return $response;
    }

    /**
     * Operation addDomainZoneTypeAWithHttpInfo
     *
     * /domainzones/type/a/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDomainZoneTypeAWithHttpInfo($service_id, $hostname, $ipv4, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeARequest($service_id, $hostname, $ipv4, $ttl);

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
     * Operation addDomainZoneTypeAAsync
     *
     * /domainzones/type/a/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeAAsync($service_id, $hostname, $ipv4, $ttl)
    {
        return $this->addDomainZoneTypeAAsyncWithHttpInfo($service_id, $hostname, $ipv4, $ttl)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addDomainZoneTypeAAsyncWithHttpInfo
     *
     * /domainzones/type/a/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeAAsyncWithHttpInfo($service_id, $hostname, $ipv4, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeARequest($service_id, $hostname, $ipv4, $ttl);

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
     * Create request for operation 'addDomainZoneTypeA'
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addDomainZoneTypeARequest($service_id, $hostname, $ipv4, $ttl)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling addDomainZoneTypeA'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling addDomainZoneTypeA'
            );
        }
        // verify the required parameter 'ipv4' is set
        if ($ipv4 === null || (is_array($ipv4) && count($ipv4) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ipv4 when calling addDomainZoneTypeA'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling addDomainZoneTypeA'
            );
        }

        $resourcePath = '/domainzones/type/a/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ipv4 !== null) {
            $queryParams['ipv4'] = ObjectSerializer::toQueryValue($ipv4, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation addDomainZoneTypeAAAA
     *
     * /domainzones/type/aaaa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addDomainZoneTypeAAAA($service_id, $hostname, $ipv6, $ttl)
    {
        list($response) = $this->addDomainZoneTypeAAAAWithHttpInfo($service_id, $hostname, $ipv6, $ttl);
        return $response;
    }

    /**
     * Operation addDomainZoneTypeAAAAWithHttpInfo
     *
     * /domainzones/type/aaaa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDomainZoneTypeAAAAWithHttpInfo($service_id, $hostname, $ipv6, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeAAAARequest($service_id, $hostname, $ipv6, $ttl);

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
     * Operation addDomainZoneTypeAAAAAsync
     *
     * /domainzones/type/aaaa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeAAAAAsync($service_id, $hostname, $ipv6, $ttl)
    {
        return $this->addDomainZoneTypeAAAAAsyncWithHttpInfo($service_id, $hostname, $ipv6, $ttl)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addDomainZoneTypeAAAAAsyncWithHttpInfo
     *
     * /domainzones/type/aaaa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeAAAAAsyncWithHttpInfo($service_id, $hostname, $ipv6, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeAAAARequest($service_id, $hostname, $ipv6, $ttl);

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
     * Create request for operation 'addDomainZoneTypeAAAA'
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addDomainZoneTypeAAAARequest($service_id, $hostname, $ipv6, $ttl)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling addDomainZoneTypeAAAA'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling addDomainZoneTypeAAAA'
            );
        }
        // verify the required parameter 'ipv6' is set
        if ($ipv6 === null || (is_array($ipv6) && count($ipv6) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ipv6 when calling addDomainZoneTypeAAAA'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling addDomainZoneTypeAAAA'
            );
        }

        $resourcePath = '/domainzones/type/aaaa/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ipv6 !== null) {
            $queryParams['ipv6'] = ObjectSerializer::toQueryValue($ipv6, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation addDomainZoneTypeCAA
     *
     * /domainzones/type/caa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addDomainZoneTypeCAA($service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        list($response) = $this->addDomainZoneTypeCAAWithHttpInfo($service_id, $hostname, $granted, $ttl, $tag, $flags);
        return $response;
    }

    /**
     * Operation addDomainZoneTypeCAAWithHttpInfo
     *
     * /domainzones/type/caa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDomainZoneTypeCAAWithHttpInfo($service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeCAARequest($service_id, $hostname, $granted, $ttl, $tag, $flags);

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
     * Operation addDomainZoneTypeCAAAsync
     *
     * /domainzones/type/caa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeCAAAsync($service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        return $this->addDomainZoneTypeCAAAsyncWithHttpInfo($service_id, $hostname, $granted, $ttl, $tag, $flags)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addDomainZoneTypeCAAAsyncWithHttpInfo
     *
     * /domainzones/type/caa/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeCAAAsyncWithHttpInfo($service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeCAARequest($service_id, $hostname, $granted, $ttl, $tag, $flags);

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
     * Create request for operation 'addDomainZoneTypeCAA'
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addDomainZoneTypeCAARequest($service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling addDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling addDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'granted' is set
        if ($granted === null || (is_array($granted) && count($granted) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granted when calling addDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling addDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'tag' is set
        if ($tag === null || (is_array($tag) && count($tag) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tag when calling addDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'flags' is set
        if ($flags === null || (is_array($flags) && count($flags) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flags when calling addDomainZoneTypeCAA'
            );
        }

        $resourcePath = '/domainzones/type/caa/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($granted !== null) {
            $queryParams['granted'] = ObjectSerializer::toQueryValue($granted, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = ObjectSerializer::toQueryValue($tag, null);
        }
        // query params
        if ($flags !== null) {
            $queryParams['flags'] = ObjectSerializer::toQueryValue($flags, null);
        }

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation addDomainZoneTypeMX
     *
     * /domainzones/type/mx/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addDomainZoneTypeMX($service_id, $hostname, $ttl, $mail_server, $priority)
    {
        list($response) = $this->addDomainZoneTypeMXWithHttpInfo($service_id, $hostname, $ttl, $mail_server, $priority);
        return $response;
    }

    /**
     * Operation addDomainZoneTypeMXWithHttpInfo
     *
     * /domainzones/type/mx/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDomainZoneTypeMXWithHttpInfo($service_id, $hostname, $ttl, $mail_server, $priority)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeMXRequest($service_id, $hostname, $ttl, $mail_server, $priority);

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
     * Operation addDomainZoneTypeMXAsync
     *
     * /domainzones/type/mx/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeMXAsync($service_id, $hostname, $ttl, $mail_server, $priority)
    {
        return $this->addDomainZoneTypeMXAsyncWithHttpInfo($service_id, $hostname, $ttl, $mail_server, $priority)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addDomainZoneTypeMXAsyncWithHttpInfo
     *
     * /domainzones/type/mx/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeMXAsyncWithHttpInfo($service_id, $hostname, $ttl, $mail_server, $priority)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeMXRequest($service_id, $hostname, $ttl, $mail_server, $priority);

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
     * Create request for operation 'addDomainZoneTypeMX'
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addDomainZoneTypeMXRequest($service_id, $hostname, $ttl, $mail_server, $priority)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling addDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling addDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling addDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'mail_server' is set
        if ($mail_server === null || (is_array($mail_server) && count($mail_server) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mail_server when calling addDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'priority' is set
        if ($priority === null || (is_array($priority) && count($priority) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $priority when calling addDomainZoneTypeMX'
            );
        }

        $resourcePath = '/domainzones/type/mx/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($mail_server !== null) {
            $queryParams['mailServer'] = ObjectSerializer::toQueryValue($mail_server, null);
        }
        // query params
        if ($priority !== null) {
            $queryParams['priority'] = ObjectSerializer::toQueryValue($priority, 'int32');
        }

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation addDomainZoneTypeNS
     *
     * /domainzones/type/ns/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addDomainZoneTypeNS($service_id, $hostname, $name_server, $ttl)
    {
        list($response) = $this->addDomainZoneTypeNSWithHttpInfo($service_id, $hostname, $name_server, $ttl);
        return $response;
    }

    /**
     * Operation addDomainZoneTypeNSWithHttpInfo
     *
     * /domainzones/type/ns/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDomainZoneTypeNSWithHttpInfo($service_id, $hostname, $name_server, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeNSRequest($service_id, $hostname, $name_server, $ttl);

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
     * Operation addDomainZoneTypeNSAsync
     *
     * /domainzones/type/ns/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeNSAsync($service_id, $hostname, $name_server, $ttl)
    {
        return $this->addDomainZoneTypeNSAsyncWithHttpInfo($service_id, $hostname, $name_server, $ttl)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addDomainZoneTypeNSAsyncWithHttpInfo
     *
     * /domainzones/type/ns/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeNSAsyncWithHttpInfo($service_id, $hostname, $name_server, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeNSRequest($service_id, $hostname, $name_server, $ttl);

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
     * Create request for operation 'addDomainZoneTypeNS'
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addDomainZoneTypeNSRequest($service_id, $hostname, $name_server, $ttl)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling addDomainZoneTypeNS'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling addDomainZoneTypeNS'
            );
        }
        // verify the required parameter 'name_server' is set
        if ($name_server === null || (is_array($name_server) && count($name_server) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name_server when calling addDomainZoneTypeNS'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling addDomainZoneTypeNS'
            );
        }

        $resourcePath = '/domainzones/type/ns/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($name_server !== null) {
            $queryParams['nameServer'] = ObjectSerializer::toQueryValue($name_server, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation addDomainZoneTypeSRV
     *
     * /domainzones/type/srv/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addDomainZoneTypeSRV($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        list($response) = $this->addDomainZoneTypeSRVWithHttpInfo($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);
        return $response;
    }

    /**
     * Operation addDomainZoneTypeSRVWithHttpInfo
     *
     * /domainzones/type/srv/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDomainZoneTypeSRVWithHttpInfo($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeSRVRequest($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);

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
     * Operation addDomainZoneTypeSRVAsync
     *
     * /domainzones/type/srv/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeSRVAsync($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        return $this->addDomainZoneTypeSRVAsyncWithHttpInfo($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addDomainZoneTypeSRVAsyncWithHttpInfo
     *
     * /domainzones/type/srv/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeSRVAsyncWithHttpInfo($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeSRVRequest($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);

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
     * Create request for operation 'addDomainZoneTypeSRV'
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addDomainZoneTypeSRVRequest($service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling addDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling addDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'direct_to' is set
        if ($direct_to === null || (is_array($direct_to) && count($direct_to) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $direct_to when calling addDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling addDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'priority' is set
        if ($priority === null || (is_array($priority) && count($priority) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $priority when calling addDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'value' is set
        if ($value === null || (is_array($value) && count($value) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $value when calling addDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'port' is set
        if ($port === null || (is_array($port) && count($port) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $port when calling addDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'weight' is set
        if ($weight === null || (is_array($weight) && count($weight) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $weight when calling addDomainZoneTypeSRV'
            );
        }

        $resourcePath = '/domainzones/type/srv/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($direct_to !== null) {
            $queryParams['direct_to'] = ObjectSerializer::toQueryValue($direct_to, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($priority !== null) {
            $queryParams['priority'] = ObjectSerializer::toQueryValue($priority, 'int32');
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value, null);
        }
        // query params
        if ($port !== null) {
            $queryParams['port'] = ObjectSerializer::toQueryValue($port, 'int32');
        }
        // query params
        if ($weight !== null) {
            $queryParams['weight'] = ObjectSerializer::toQueryValue($weight, 'int32');
        }

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation addDomainZoneTypeTXT
     *
     * /domainzones/type/txt/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function addDomainZoneTypeTXT($service_id, $hostname, $ttl, $value)
    {
        list($response) = $this->addDomainZoneTypeTXTWithHttpInfo($service_id, $hostname, $ttl, $value);
        return $response;
    }

    /**
     * Operation addDomainZoneTypeTXTWithHttpInfo
     *
     * /domainzones/type/txt/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDomainZoneTypeTXTWithHttpInfo($service_id, $hostname, $ttl, $value)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeTXTRequest($service_id, $hostname, $ttl, $value);

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
     * Operation addDomainZoneTypeTXTAsync
     *
     * /domainzones/type/txt/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeTXTAsync($service_id, $hostname, $ttl, $value)
    {
        return $this->addDomainZoneTypeTXTAsyncWithHttpInfo($service_id, $hostname, $ttl, $value)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addDomainZoneTypeTXTAsyncWithHttpInfo
     *
     * /domainzones/type/txt/service/{serviceId}
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addDomainZoneTypeTXTAsyncWithHttpInfo($service_id, $hostname, $ttl, $value)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->addDomainZoneTypeTXTRequest($service_id, $hostname, $ttl, $value);

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
     * Create request for operation 'addDomainZoneTypeTXT'
     *
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addDomainZoneTypeTXTRequest($service_id, $hostname, $ttl, $value)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling addDomainZoneTypeTXT'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling addDomainZoneTypeTXT'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling addDomainZoneTypeTXT'
            );
        }
        // verify the required parameter 'value' is set
        if ($value === null || (is_array($value) && count($value) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $value when calling addDomainZoneTypeTXT'
            );
        }

        $resourcePath = '/domainzones/type/txt/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value, null);
        }

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation deleteDomainZone
     *
     * /domainzones/{recordId}/delete
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function deleteDomainZone($record_id)
    {
        list($response) = $this->deleteDomainZoneWithHttpInfo($record_id);
        return $response;
    }

    /**
     * Operation deleteDomainZoneWithHttpInfo
     *
     * /domainzones/{recordId}/delete
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDomainZoneWithHttpInfo($record_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->deleteDomainZoneRequest($record_id);

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
     * Operation deleteDomainZoneAsync
     *
     * /domainzones/{recordId}/delete
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDomainZoneAsync($record_id)
    {
        return $this->deleteDomainZoneAsyncWithHttpInfo($record_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDomainZoneAsyncWithHttpInfo
     *
     * /domainzones/{recordId}/delete
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDomainZoneAsyncWithHttpInfo($record_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->deleteDomainZoneRequest($record_id);

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
     * Create request for operation 'deleteDomainZone'
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteDomainZoneRequest($record_id)
    {
        // verify the required parameter 'record_id' is set
        if ($record_id === null || (is_array($record_id) && count($record_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $record_id when calling deleteDomainZone'
            );
        }

        $resourcePath = '/domainzones/{recordId}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($record_id !== null) {
            $resourcePath = str_replace(
                '{' . 'recordId' . '}',
                ObjectSerializer::toPathValue($record_id),
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
     * Operation getDomainZone
     *
     * Alan Adı Bölge Getir
     *
     * @param  int $service_id Servis belirteci (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function getDomainZone($service_id)
    {
        list($response) = $this->getDomainZoneWithHttpInfo($service_id);
        return $response;
    }

    /**
     * Operation getDomainZoneWithHttpInfo
     *
     * Alan Adı Bölge Getir
     *
     * @param  int $service_id Servis belirteci (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDomainZoneWithHttpInfo($service_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getDomainZoneRequest($service_id);

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
     * Operation getDomainZoneAsync
     *
     * Alan Adı Bölge Getir
     *
     * @param  int $service_id Servis belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDomainZoneAsync($service_id)
    {
        return $this->getDomainZoneAsyncWithHttpInfo($service_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDomainZoneAsyncWithHttpInfo
     *
     * Alan Adı Bölge Getir
     *
     * @param  int $service_id Servis belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDomainZoneAsyncWithHttpInfo($service_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getDomainZoneRequest($service_id);

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
     * Create request for operation 'getDomainZone'
     *
     * @param  int $service_id Servis belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDomainZoneRequest($service_id)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getDomainZone'
            );
        }

        $resourcePath = '/domainzones/service-domainzones/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation getDomainZonebyId
     *
     * Belirtecine Alan Adı Bölge Getir
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function getDomainZonebyId($record_id)
    {
        list($response) = $this->getDomainZonebyIdWithHttpInfo($record_id);
        return $response;
    }

    /**
     * Operation getDomainZonebyIdWithHttpInfo
     *
     * Belirtecine Alan Adı Bölge Getir
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDomainZonebyIdWithHttpInfo($record_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getDomainZonebyIdRequest($record_id);

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
     * Operation getDomainZonebyIdAsync
     *
     * Belirtecine Alan Adı Bölge Getir
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDomainZonebyIdAsync($record_id)
    {
        return $this->getDomainZonebyIdAsyncWithHttpInfo($record_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDomainZonebyIdAsyncWithHttpInfo
     *
     * Belirtecine Alan Adı Bölge Getir
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDomainZonebyIdAsyncWithHttpInfo($record_id)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->getDomainZonebyIdRequest($record_id);

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
     * Create request for operation 'getDomainZonebyId'
     *
     * @param  int $record_id Alan Adı bölge belirteci (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDomainZonebyIdRequest($record_id)
    {
        // verify the required parameter 'record_id' is set
        if ($record_id === null || (is_array($record_id) && count($record_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $record_id when calling getDomainZonebyId'
            );
        }

        $resourcePath = '/domainzones/{recordId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($record_id !== null) {
            $resourcePath = str_replace(
                '{' . 'recordId' . '}',
                ObjectSerializer::toPathValue($record_id),
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
     * Operation updateDomainZone
     *
     * /domainzones/{id}/type/{type}/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $type Tipi (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  string $alias Alias (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZone($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags)
    {
        list($response) = $this->updateDomainZoneWithHttpInfo($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags);
        return $response;
    }

    /**
     * Operation updateDomainZoneWithHttpInfo
     *
     * /domainzones/{id}/type/{type}/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $type Tipi (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  string $alias Alias (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneWithHttpInfo($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneRequest($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags);

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
     * Operation updateDomainZoneAsync
     *
     * /domainzones/{id}/type/{type}/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $type Tipi (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  string $alias Alias (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneAsync($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags)
    {
        return $this->updateDomainZoneAsyncWithHttpInfo($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/{type}/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $type Tipi (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  string $alias Alias (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneAsyncWithHttpInfo($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneRequest($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags);

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
     * Create request for operation 'updateDomainZone'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $type Tipi (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  string $alias Alias (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneRequest($id, $service_id, $type, $hostname, $ipv4, $ipv6, $alias, $name_server, $direct_to, $granted, $ttl, $mail_server, $priority, $value, $port, $weight, $tag, $flags)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZone'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZone'
            );
        }
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling updateDomainZone'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZone'
            );
        }
        // verify the required parameter 'ipv4' is set
        if ($ipv4 === null || (is_array($ipv4) && count($ipv4) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ipv4 when calling updateDomainZone'
            );
        }
        // verify the required parameter 'ipv6' is set
        if ($ipv6 === null || (is_array($ipv6) && count($ipv6) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ipv6 when calling updateDomainZone'
            );
        }
        // verify the required parameter 'alias' is set
        if ($alias === null || (is_array($alias) && count($alias) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $alias when calling updateDomainZone'
            );
        }
        // verify the required parameter 'name_server' is set
        if ($name_server === null || (is_array($name_server) && count($name_server) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name_server when calling updateDomainZone'
            );
        }
        // verify the required parameter 'direct_to' is set
        if ($direct_to === null || (is_array($direct_to) && count($direct_to) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $direct_to when calling updateDomainZone'
            );
        }
        // verify the required parameter 'granted' is set
        if ($granted === null || (is_array($granted) && count($granted) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granted when calling updateDomainZone'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZone'
            );
        }
        // verify the required parameter 'mail_server' is set
        if ($mail_server === null || (is_array($mail_server) && count($mail_server) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mail_server when calling updateDomainZone'
            );
        }
        // verify the required parameter 'priority' is set
        if ($priority === null || (is_array($priority) && count($priority) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $priority when calling updateDomainZone'
            );
        }
        // verify the required parameter 'value' is set
        if ($value === null || (is_array($value) && count($value) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $value when calling updateDomainZone'
            );
        }
        // verify the required parameter 'port' is set
        if ($port === null || (is_array($port) && count($port) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $port when calling updateDomainZone'
            );
        }
        // verify the required parameter 'weight' is set
        if ($weight === null || (is_array($weight) && count($weight) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $weight when calling updateDomainZone'
            );
        }
        // verify the required parameter 'tag' is set
        if ($tag === null || (is_array($tag) && count($tag) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tag when calling updateDomainZone'
            );
        }
        // verify the required parameter 'flags' is set
        if ($flags === null || (is_array($flags) && count($flags) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flags when calling updateDomainZone'
            );
        }

        $resourcePath = '/domainzones/{id}/type/{type}/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ipv4 !== null) {
            $queryParams['ipv4'] = ObjectSerializer::toQueryValue($ipv4, null);
        }
        // query params
        if ($ipv6 !== null) {
            $queryParams['ipv6'] = ObjectSerializer::toQueryValue($ipv6, null);
        }
        // query params
        if ($alias !== null) {
            $queryParams['alias'] = ObjectSerializer::toQueryValue($alias, null);
        }
        // query params
        if ($name_server !== null) {
            $queryParams['nameServer'] = ObjectSerializer::toQueryValue($name_server, null);
        }
        // query params
        if ($direct_to !== null) {
            $queryParams['direct_to'] = ObjectSerializer::toQueryValue($direct_to, null);
        }
        // query params
        if ($granted !== null) {
            $queryParams['granted'] = ObjectSerializer::toQueryValue($granted, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($mail_server !== null) {
            $queryParams['mailServer'] = ObjectSerializer::toQueryValue($mail_server, null);
        }
        // query params
        if ($priority !== null) {
            $queryParams['priority'] = ObjectSerializer::toQueryValue($priority, 'int32');
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value, null);
        }
        // query params
        if ($port !== null) {
            $queryParams['port'] = ObjectSerializer::toQueryValue($port, 'int32');
        }
        // query params
        if ($weight !== null) {
            $queryParams['weight'] = ObjectSerializer::toQueryValue($weight, 'int32');
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = ObjectSerializer::toQueryValue($tag, null);
        }
        // query params
        if ($flags !== null) {
            $queryParams['flags'] = ObjectSerializer::toQueryValue($flags, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
                $resourcePath
            );
        }
        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                '{' . 'type' . '}',
                ObjectSerializer::toPathValue($type),
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
     * Operation updateDomainZoneTypeA
     *
     * /domainzones/{id}/type/a/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZoneTypeA($id, $service_id, $hostname, $ipv4, $ttl)
    {
        list($response) = $this->updateDomainZoneTypeAWithHttpInfo($id, $service_id, $hostname, $ipv4, $ttl);
        return $response;
    }

    /**
     * Operation updateDomainZoneTypeAWithHttpInfo
     *
     * /domainzones/{id}/type/a/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneTypeAWithHttpInfo($id, $service_id, $hostname, $ipv4, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeARequest($id, $service_id, $hostname, $ipv4, $ttl);

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
     * Operation updateDomainZoneTypeAAsync
     *
     * /domainzones/{id}/type/a/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeAAsync($id, $service_id, $hostname, $ipv4, $ttl)
    {
        return $this->updateDomainZoneTypeAAsyncWithHttpInfo($id, $service_id, $hostname, $ipv4, $ttl)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneTypeAAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/a/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeAAsyncWithHttpInfo($id, $service_id, $hostname, $ipv4, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeARequest($id, $service_id, $hostname, $ipv4, $ttl);

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
     * Create request for operation 'updateDomainZoneTypeA'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv4 IP v4 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneTypeARequest($id, $service_id, $hostname, $ipv4, $ttl)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZoneTypeA'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZoneTypeA'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZoneTypeA'
            );
        }
        // verify the required parameter 'ipv4' is set
        if ($ipv4 === null || (is_array($ipv4) && count($ipv4) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ipv4 when calling updateDomainZoneTypeA'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZoneTypeA'
            );
        }

        $resourcePath = '/domainzones/{id}/type/a/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ipv4 !== null) {
            $queryParams['ipv4'] = ObjectSerializer::toQueryValue($ipv4, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation updateDomainZoneTypeAAAA
     *
     * /domainzones/{id}/type/aaaa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZoneTypeAAAA($id, $service_id, $hostname, $ipv6, $ttl)
    {
        list($response) = $this->updateDomainZoneTypeAAAAWithHttpInfo($id, $service_id, $hostname, $ipv6, $ttl);
        return $response;
    }

    /**
     * Operation updateDomainZoneTypeAAAAWithHttpInfo
     *
     * /domainzones/{id}/type/aaaa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneTypeAAAAWithHttpInfo($id, $service_id, $hostname, $ipv6, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeAAAARequest($id, $service_id, $hostname, $ipv6, $ttl);

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
     * Operation updateDomainZoneTypeAAAAAsync
     *
     * /domainzones/{id}/type/aaaa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeAAAAAsync($id, $service_id, $hostname, $ipv6, $ttl)
    {
        return $this->updateDomainZoneTypeAAAAAsyncWithHttpInfo($id, $service_id, $hostname, $ipv6, $ttl)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneTypeAAAAAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/aaaa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeAAAAAsyncWithHttpInfo($id, $service_id, $hostname, $ipv6, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeAAAARequest($id, $service_id, $hostname, $ipv6, $ttl);

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
     * Create request for operation 'updateDomainZoneTypeAAAA'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $ipv6 IP v6 adresi (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneTypeAAAARequest($id, $service_id, $hostname, $ipv6, $ttl)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZoneTypeAAAA'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZoneTypeAAAA'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZoneTypeAAAA'
            );
        }
        // verify the required parameter 'ipv6' is set
        if ($ipv6 === null || (is_array($ipv6) && count($ipv6) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ipv6 when calling updateDomainZoneTypeAAAA'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZoneTypeAAAA'
            );
        }

        $resourcePath = '/domainzones/{id}/type/aaaa/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ipv6 !== null) {
            $queryParams['ipv6'] = ObjectSerializer::toQueryValue($ipv6, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation updateDomainZoneTypeCAA
     *
     * /domainzones/{id}/type/caa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZoneTypeCAA($id, $service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        list($response) = $this->updateDomainZoneTypeCAAWithHttpInfo($id, $service_id, $hostname, $granted, $ttl, $tag, $flags);
        return $response;
    }

    /**
     * Operation updateDomainZoneTypeCAAWithHttpInfo
     *
     * /domainzones/{id}/type/caa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneTypeCAAWithHttpInfo($id, $service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeCAARequest($id, $service_id, $hostname, $granted, $ttl, $tag, $flags);

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
     * Operation updateDomainZoneTypeCAAAsync
     *
     * /domainzones/{id}/type/caa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeCAAAsync($id, $service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        return $this->updateDomainZoneTypeCAAAsyncWithHttpInfo($id, $service_id, $hostname, $granted, $ttl, $tag, $flags)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneTypeCAAAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/caa/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeCAAAsyncWithHttpInfo($id, $service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeCAARequest($id, $service_id, $hostname, $granted, $ttl, $tag, $flags);

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
     * Create request for operation 'updateDomainZoneTypeCAA'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $granted granted (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $tag tag (required)
     * @param  string $flags flags (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneTypeCAARequest($id, $service_id, $hostname, $granted, $ttl, $tag, $flags)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'granted' is set
        if ($granted === null || (is_array($granted) && count($granted) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granted when calling updateDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'tag' is set
        if ($tag === null || (is_array($tag) && count($tag) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tag when calling updateDomainZoneTypeCAA'
            );
        }
        // verify the required parameter 'flags' is set
        if ($flags === null || (is_array($flags) && count($flags) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flags when calling updateDomainZoneTypeCAA'
            );
        }

        $resourcePath = '/domainzones/{id}/type/caa/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($granted !== null) {
            $queryParams['granted'] = ObjectSerializer::toQueryValue($granted, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = ObjectSerializer::toQueryValue($tag, null);
        }
        // query params
        if ($flags !== null) {
            $queryParams['flags'] = ObjectSerializer::toQueryValue($flags, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation updateDomainZoneTypeMX
     *
     * /domainzones/{id}/type/mx/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZoneTypeMX($id, $service_id, $hostname, $ttl, $mail_server, $priority)
    {
        list($response) = $this->updateDomainZoneTypeMXWithHttpInfo($id, $service_id, $hostname, $ttl, $mail_server, $priority);
        return $response;
    }

    /**
     * Operation updateDomainZoneTypeMXWithHttpInfo
     *
     * /domainzones/{id}/type/mx/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneTypeMXWithHttpInfo($id, $service_id, $hostname, $ttl, $mail_server, $priority)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeMXRequest($id, $service_id, $hostname, $ttl, $mail_server, $priority);

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
     * Operation updateDomainZoneTypeMXAsync
     *
     * /domainzones/{id}/type/mx/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeMXAsync($id, $service_id, $hostname, $ttl, $mail_server, $priority)
    {
        return $this->updateDomainZoneTypeMXAsyncWithHttpInfo($id, $service_id, $hostname, $ttl, $mail_server, $priority)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneTypeMXAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/mx/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeMXAsyncWithHttpInfo($id, $service_id, $hostname, $ttl, $mail_server, $priority)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeMXRequest($id, $service_id, $hostname, $ttl, $mail_server, $priority);

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
     * Create request for operation 'updateDomainZoneTypeMX'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $mail_server Mail Sunucusu (required)
     * @param  int $priority Öncelik (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneTypeMXRequest($id, $service_id, $hostname, $ttl, $mail_server, $priority)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'mail_server' is set
        if ($mail_server === null || (is_array($mail_server) && count($mail_server) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mail_server when calling updateDomainZoneTypeMX'
            );
        }
        // verify the required parameter 'priority' is set
        if ($priority === null || (is_array($priority) && count($priority) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $priority when calling updateDomainZoneTypeMX'
            );
        }

        $resourcePath = '/domainzones/{id}/type/mx/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($mail_server !== null) {
            $queryParams['mailServer'] = ObjectSerializer::toQueryValue($mail_server, null);
        }
        // query params
        if ($priority !== null) {
            $queryParams['priority'] = ObjectSerializer::toQueryValue($priority, 'int32');
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation updateDomainZoneTypeNS
     *
     * /domainzones/{id}/type/ns/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZoneTypeNS($id, $service_id, $hostname, $name_server, $ttl)
    {
        list($response) = $this->updateDomainZoneTypeNSWithHttpInfo($id, $service_id, $hostname, $name_server, $ttl);
        return $response;
    }

    /**
     * Operation updateDomainZoneTypeNSWithHttpInfo
     *
     * /domainzones/{id}/type/ns/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneTypeNSWithHttpInfo($id, $service_id, $hostname, $name_server, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeNSRequest($id, $service_id, $hostname, $name_server, $ttl);

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
     * Operation updateDomainZoneTypeNSAsync
     *
     * /domainzones/{id}/type/ns/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeNSAsync($id, $service_id, $hostname, $name_server, $ttl)
    {
        return $this->updateDomainZoneTypeNSAsyncWithHttpInfo($id, $service_id, $hostname, $name_server, $ttl)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneTypeNSAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/ns/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeNSAsyncWithHttpInfo($id, $service_id, $hostname, $name_server, $ttl)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeNSRequest($id, $service_id, $hostname, $name_server, $ttl);

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
     * Create request for operation 'updateDomainZoneTypeNS'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $name_server Alan adı sunucusu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneTypeNSRequest($id, $service_id, $hostname, $name_server, $ttl)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZoneTypeNS'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZoneTypeNS'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZoneTypeNS'
            );
        }
        // verify the required parameter 'name_server' is set
        if ($name_server === null || (is_array($name_server) && count($name_server) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name_server when calling updateDomainZoneTypeNS'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZoneTypeNS'
            );
        }

        $resourcePath = '/domainzones/{id}/type/ns/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($name_server !== null) {
            $queryParams['nameServer'] = ObjectSerializer::toQueryValue($name_server, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation updateDomainZoneTypeSRV
     *
     * /domainzones/{id}/type/srv/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZoneTypeSRV($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        list($response) = $this->updateDomainZoneTypeSRVWithHttpInfo($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);
        return $response;
    }

    /**
     * Operation updateDomainZoneTypeSRVWithHttpInfo
     *
     * /domainzones/{id}/type/srv/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneTypeSRVWithHttpInfo($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeSRVRequest($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);

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
     * Operation updateDomainZoneTypeSRVAsync
     *
     * /domainzones/{id}/type/srv/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeSRVAsync($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        return $this->updateDomainZoneTypeSRVAsyncWithHttpInfo($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneTypeSRVAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/srv/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeSRVAsyncWithHttpInfo($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeSRVRequest($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight);

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
     * Create request for operation 'updateDomainZoneTypeSRV'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  string $direct_to Yönlendirilen sunucu (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  int $priority Öncelik (required)
     * @param  string $value value (required)
     * @param  int $port Port numarası (required)
     * @param  int $weight Ağırlık (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneTypeSRVRequest($id, $service_id, $hostname, $direct_to, $ttl, $priority, $value, $port, $weight)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'direct_to' is set
        if ($direct_to === null || (is_array($direct_to) && count($direct_to) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $direct_to when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'priority' is set
        if ($priority === null || (is_array($priority) && count($priority) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $priority when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'value' is set
        if ($value === null || (is_array($value) && count($value) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $value when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'port' is set
        if ($port === null || (is_array($port) && count($port) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $port when calling updateDomainZoneTypeSRV'
            );
        }
        // verify the required parameter 'weight' is set
        if ($weight === null || (is_array($weight) && count($weight) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $weight when calling updateDomainZoneTypeSRV'
            );
        }

        $resourcePath = '/domainzones/{id}/type/srv/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($direct_to !== null) {
            $queryParams['direct_to'] = ObjectSerializer::toQueryValue($direct_to, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($priority !== null) {
            $queryParams['priority'] = ObjectSerializer::toQueryValue($priority, 'int32');
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value, null);
        }
        // query params
        if ($port !== null) {
            $queryParams['port'] = ObjectSerializer::toQueryValue($port, 'int32');
        }
        // query params
        if ($weight !== null) {
            $queryParams['weight'] = ObjectSerializer::toQueryValue($weight, 'int32');
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation updateDomainZoneTypeTXT
     *
     * /domainzones/{id}/type/txt/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GeneralWebServiceResponse
     */
    public function updateDomainZoneTypeTXT($id, $service_id, $hostname, $ttl, $value)
    {
        list($response) = $this->updateDomainZoneTypeTXTWithHttpInfo($id, $service_id, $hostname, $ttl, $value);
        return $response;
    }

    /**
     * Operation updateDomainZoneTypeTXTWithHttpInfo
     *
     * /domainzones/{id}/type/txt/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GeneralWebServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDomainZoneTypeTXTWithHttpInfo($id, $service_id, $hostname, $ttl, $value)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeTXTRequest($id, $service_id, $hostname, $ttl, $value);

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
     * Operation updateDomainZoneTypeTXTAsync
     *
     * /domainzones/{id}/type/txt/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeTXTAsync($id, $service_id, $hostname, $ttl, $value)
    {
        return $this->updateDomainZoneTypeTXTAsyncWithHttpInfo($id, $service_id, $hostname, $ttl, $value)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDomainZoneTypeTXTAsyncWithHttpInfo
     *
     * /domainzones/{id}/type/txt/service/{serviceId}
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDomainZoneTypeTXTAsyncWithHttpInfo($id, $service_id, $hostname, $ttl, $value)
    {
        $returnType = '\Swagger\Client\Model\GeneralWebServiceResponse';
        $request = $this->updateDomainZoneTypeTXTRequest($id, $service_id, $hostname, $ttl, $value);

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
     * Create request for operation 'updateDomainZoneTypeTXT'
     *
     * @param  int $id id (required)
     * @param  int $service_id Servis belirteci (required)
     * @param  string $hostname Sunucu adı (required)
     * @param  int $ttl Geçerlilik süresi (saniye) (required)
     * @param  string $value value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDomainZoneTypeTXTRequest($id, $service_id, $hostname, $ttl, $value)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDomainZoneTypeTXT'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateDomainZoneTypeTXT'
            );
        }
        // verify the required parameter 'hostname' is set
        if ($hostname === null || (is_array($hostname) && count($hostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hostname when calling updateDomainZoneTypeTXT'
            );
        }
        // verify the required parameter 'ttl' is set
        if ($ttl === null || (is_array($ttl) && count($ttl) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ttl when calling updateDomainZoneTypeTXT'
            );
        }
        // verify the required parameter 'value' is set
        if ($value === null || (is_array($value) && count($value) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $value when calling updateDomainZoneTypeTXT'
            );
        }

        $resourcePath = '/domainzones/{id}/type/txt/service/{serviceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($hostname !== null) {
            $queryParams['hostname'] = ObjectSerializer::toQueryValue($hostname, null);
        }
        // query params
        if ($ttl !== null) {
            $queryParams['ttl'] = ObjectSerializer::toQueryValue($ttl, 'int64');
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'serviceId' . '}',
                ObjectSerializer::toPathValue($service_id),
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
