<?php
/**
 * Lead
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API FFID
 *
 * Documentação de chamadas à API pública FFID.  Você pode encontrar mais sobre o tratamento dos dados no seu [dashboard](https://d.ffid.com.br). Para utilizar esta API é preciso obter uma chave e um segredo (`api_key`, `api_secret`).
 *
 * OpenAPI spec version: 1.0-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.32
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Lead Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Lead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'e164' => 'string',
'formatted_phone' => 'string',
'whatsapp' => 'bool',
'last_seen' => 'int',
'avatar' => 'string',
'phone_type' => 'string',
'phone_valid' => 'string',
'email' => 'string',
'email_status' => 'string',
'email_domain' => 'string',
'page' => 'string',
'score' => 'double',
'id' => 'string',
'date' => 'string',
'last_search' => 'string',
'description' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'e164' => null,
'formatted_phone' => null,
'whatsapp' => null,
'last_seen' => 'int32',
'avatar' => null,
'phone_type' => null,
'phone_valid' => null,
'email' => null,
'email_status' => null,
'email_domain' => null,
'page' => null,
'score' => 'double',
'id' => null,
'date' => null,
'last_search' => null,
'description' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'e164' => 'e164',
'formatted_phone' => 'formatted_phone',
'whatsapp' => 'whatsapp',
'last_seen' => 'last_seen',
'avatar' => 'avatar',
'phone_type' => 'phone_type',
'phone_valid' => 'phone_valid',
'email' => 'email',
'email_status' => 'email_status',
'email_domain' => 'email_domain',
'page' => 'page',
'score' => 'score',
'id' => 'id',
'date' => 'date',
'last_search' => 'last_search',
'description' => 'description'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'e164' => 'setE164',
'formatted_phone' => 'setFormattedPhone',
'whatsapp' => 'setWhatsapp',
'last_seen' => 'setLastSeen',
'avatar' => 'setAvatar',
'phone_type' => 'setPhoneType',
'phone_valid' => 'setPhoneValid',
'email' => 'setEmail',
'email_status' => 'setEmailStatus',
'email_domain' => 'setEmailDomain',
'page' => 'setPage',
'score' => 'setScore',
'id' => 'setId',
'date' => 'setDate',
'last_search' => 'setLastSearch',
'description' => 'setDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'e164' => 'getE164',
'formatted_phone' => 'getFormattedPhone',
'whatsapp' => 'getWhatsapp',
'last_seen' => 'getLastSeen',
'avatar' => 'getAvatar',
'phone_type' => 'getPhoneType',
'phone_valid' => 'getPhoneValid',
'email' => 'getEmail',
'email_status' => 'getEmailStatus',
'email_domain' => 'getEmailDomain',
'page' => 'getPage',
'score' => 'getScore',
'id' => 'getId',
'date' => 'getDate',
'last_search' => 'getLastSearch',
'description' => 'getDescription'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['e164'] = isset($data['e164']) ? $data['e164'] : null;
        $this->container['formatted_phone'] = isset($data['formatted_phone']) ? $data['formatted_phone'] : null;
        $this->container['whatsapp'] = isset($data['whatsapp']) ? $data['whatsapp'] : null;
        $this->container['last_seen'] = isset($data['last_seen']) ? $data['last_seen'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['phone_type'] = isset($data['phone_type']) ? $data['phone_type'] : null;
        $this->container['phone_valid'] = isset($data['phone_valid']) ? $data['phone_valid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_status'] = isset($data['email_status']) ? $data['email_status'] : null;
        $this->container['email_domain'] = isset($data['email_domain']) ? $data['email_domain'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['last_search'] = isset($data['last_search']) ? $data['last_search'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets e164
     *
     * @return string
     */
    public function getE164()
    {
        return $this->container['e164'];
    }

    /**
     * Sets e164
     *
     * @param string $e164 Número de telefone em formato E164
     *
     * @return $this
     */
    public function setE164($e164)
    {
        $this->container['e164'] = $e164;

        return $this;
    }

    /**
     * Gets formatted_phone
     *
     * @return string
     */
    public function getFormattedPhone()
    {
        return $this->container['formatted_phone'];
    }

    /**
     * Sets formatted_phone
     *
     * @param string $formatted_phone Número de telefone formatado com máscara
     *
     * @return $this
     */
    public function setFormattedPhone($formatted_phone)
    {
        $this->container['formatted_phone'] = $formatted_phone;

        return $this;
    }

    /**
     * Gets whatsapp
     *
     * @return bool
     */
    public function getWhatsapp()
    {
        return $this->container['whatsapp'];
    }

    /**
     * Sets whatsapp
     *
     * @param bool $whatsapp Verdadeiro se o telefone possui uma conta correspondente de WhatsApp
     *
     * @return $this
     */
    public function setWhatsapp($whatsapp)
    {
        $this->container['whatsapp'] = $whatsapp;

        return $this;
    }

    /**
     * Gets last_seen
     *
     * @return int
     */
    public function getLastSeen()
    {
        return $this->container['last_seen'];
    }

    /**
     * Sets last_seen
     *
     * @param int $last_seen Última data em que o Consumidor foi avistado no WhatsApp (POSIX time)
     *
     * @return $this
     */
    public function setLastSeen($last_seen)
    {
        $this->container['last_seen'] = $last_seen;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar URL para imagem de avatar do Consumidor
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets phone_type
     *
     * @return string
     */
    public function getPhoneType()
    {
        return $this->container['phone_type'];
    }

    /**
     * Sets phone_type
     *
     * @param string $phone_type Tipo de telefone
     *
     * @return $this
     */
    public function setPhoneType($phone_type)
    {
        $this->container['phone_type'] = $phone_type;

        return $this;
    }

    /**
     * Gets phone_valid
     *
     * @return string
     */
    public function getPhoneValid()
    {
        return $this->container['phone_valid'];
    }

    /**
     * Sets phone_valid
     *
     * @param string $phone_valid Resultado da validação do telefone
     *
     * @return $this
     */
    public function setPhoneValid($phone_valid)
    {
        $this->container['phone_valid'] = $phone_valid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Endereço de email do Consumidor
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_status
     *
     * @return string
     */
    public function getEmailStatus()
    {
        return $this->container['email_status'];
    }

    /**
     * Sets email_status
     *
     * @param string $email_status Estado de entregabilidade do endereço de email
     *
     * @return $this
     */
    public function setEmailStatus($email_status)
    {
        $this->container['email_status'] = $email_status;

        return $this;
    }

    /**
     * Gets email_domain
     *
     * @return string
     */
    public function getEmailDomain()
    {
        return $this->container['email_domain'];
    }

    /**
     * Sets email_domain
     *
     * @param string $email_domain Domínio autoritativo correspondente ao endereço de email do Consumidor
     *
     * @return $this
     */
    public function setEmailDomain($email_domain)
    {
        $this->container['email_domain'] = $email_domain;

        return $this;
    }

    /**
     * Gets page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param string $page URL da página do perfil do Consumidor
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets score
     *
     * @return double
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param double $score Valor calculado de LeadScore
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Identificação do Consumidor
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Data de criação do contato
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets last_search
     *
     * @return string
     */
    public function getLastSearch()
    {
        return $this->container['last_search'];
    }

    /**
     * Sets last_search
     *
     * @param string $last_search Data de última requisição de informações para o Consumidor
     *
     * @return $this
     */
    public function setLastSearch($last_search)
    {
        $this->container['last_search'] = $last_search;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Descrição verbal das informações de LeadScore
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
