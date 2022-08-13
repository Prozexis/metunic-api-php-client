<?php
/**
 * Configuration
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

namespace Swagger\Client;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://api-test.metunic.com.tr/v1/';

    /**
     * User agent of the HTTP request, set to "PHP-Swagger" by default
     *
     * @var string
     */
    protected $userAgent = 'Swagger-Codegen/1.0.0/php';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the detault configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Swagger\Client) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 1.3.10' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}
