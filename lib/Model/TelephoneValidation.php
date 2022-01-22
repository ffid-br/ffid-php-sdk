<?php
/**
 * TelephoneValidation
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
 * TelephoneValidation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TelephoneValidation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'telephone-validation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'result' => 'string',
'phone_number' => 'string',
'country_code' => 'int',
'e164' => 'string',
'formatted_phone' => 'string',
'type' => 'string',
'did_you_mean' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'result' => null,
'phone_number' => null,
'country_code' => null,
'e164' => null,
'formatted_phone' => null,
'type' => null,
'did_you_mean' => null    ];

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
        'result' => 'result',
'phone_number' => 'phone_number',
'country_code' => 'country_code',
'e164' => 'e164',
'formatted_phone' => 'formatted_phone',
'type' => 'type',
'did_you_mean' => 'did_you_mean'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'result' => 'setResult',
'phone_number' => 'setPhoneNumber',
'country_code' => 'setCountryCode',
'e164' => 'setE164',
'formatted_phone' => 'setFormattedPhone',
'type' => 'setType',
'did_you_mean' => 'setDidYouMean'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'result' => 'getResult',
'phone_number' => 'getPhoneNumber',
'country_code' => 'getCountryCode',
'e164' => 'getE164',
'formatted_phone' => 'getFormattedPhone',
'type' => 'getType',
'did_you_mean' => 'getDidYouMean'    ];

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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['e164'] = isset($data['e164']) ? $data['e164'] : null;
        $this->container['formatted_phone'] = isset($data['formatted_phone']) ? $data['formatted_phone'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['did_you_mean'] = isset($data['did_you_mean']) ? $data['did_you_mean'] : null;
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
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result Resultado da validação [\"valid\", \"invalid\"]
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Número de telefone
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return int
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param int $country_code Código de país
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
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
     * @param string $formatted_phone Número de telefone formatado com máscara (dd) nnnnn-nnnn
     *
     * @return $this
     */
    public function setFormattedPhone($formatted_phone)
    {
        $this->container['formatted_phone'] = $formatted_phone;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Tipo de telefone [\"MOBILE\", \"FIXED_LINE\"]
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets did_you_mean
     *
     * @return string
     */
    public function getDidYouMean()
    {
        return $this->container['did_you_mean'];
    }

    /**
     * Sets did_you_mean
     *
     * @param string $did_you_mean Sugestão de número de telefone para correção de entrada inválida
     *
     * @return $this
     */
    public function setDidYouMean($did_you_mean)
    {
        $this->container['did_you_mean'] = $did_you_mean;

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
