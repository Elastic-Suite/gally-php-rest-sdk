<?php
/**
 * LocalizedCatalog
 *
 * PHP version 5
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Gally API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.3.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.30
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Gally\Rest\Model;

use \ArrayAccess;
use \Gally\Rest\ObjectSerializer;

/**
 * LocalizedCatalog Class Doc Comment
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalizedCatalog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocalizedCatalog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'code' => 'string',
        'locale' => 'string',
        'currency' => 'string',
        'isDefault' => 'bool',
        'catalog' => 'string',
        'localName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'code' => null,
        'locale' => null,
        'currency' => null,
        'isDefault' => null,
        'catalog' => 'iri-reference',
        'localName' => null
    ];

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
        'id' => 'id',
        'name' => 'name',
        'code' => 'code',
        'locale' => 'locale',
        'currency' => 'currency',
        'isDefault' => 'isDefault',
        'catalog' => 'catalog',
        'localName' => 'localName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'code' => 'setCode',
        'locale' => 'setLocale',
        'currency' => 'setCurrency',
        'isDefault' => 'setIsDefault',
        'catalog' => 'setCatalog',
        'localName' => 'setLocalName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'code' => 'getCode',
        'locale' => 'getLocale',
        'currency' => 'getCurrency',
        'isDefault' => 'getIsDefault',
        'catalog' => 'getCatalog',
        'localName' => 'getLocalName'
    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
        $this->container['localName'] = isset($data['localName']) ? $data['localName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ((mb_strlen($this->container['locale']) > 5)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be smaller than or equal to 5.";
        }

        if ((mb_strlen($this->container['locale']) < 5)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 5.";
        }

        if (!preg_match("/^(.*[a-z]{2}_[A-Z]{2})$/", $this->container['locale'])) {
            $invalidProperties[] = "invalid value for 'locale', must be conform to the pattern /^(.*[a-z]{2}_[A-Z]{2})$/.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['catalog'] === null) {
            $invalidProperties[] = "'catalog' can't be null";
        }
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        if ((mb_strlen($locale) > 5)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling LocalizedCatalog., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($locale) < 5)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling LocalizedCatalog., must be bigger than or equal to 5.');
        }
        if ((!preg_match("/^(.*[a-z]{2}_[A-Z]{2})$/", $locale))) {
            throw new \InvalidArgumentException("invalid value for $locale when calling LocalizedCatalog., must conform to the pattern /^(.*[a-z]{2}_[A-Z]{2})$/.");
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool $isDefault It's important to keep the getter for isDefault property, otherwise Api Platform will be not able to get the value in the response, in other words don't rename by IsDefault().
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;

        return $this;
    }

    /**
     * Gets catalog
     *
     * @return string
     */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
     * Sets catalog
     *
     * @param string $catalog catalog
     *
     * @return $this
     */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;

        return $this;
    }

    /**
     * Gets localName
     *
     * @return string
     */
    public function getLocalName()
    {
        return $this->container['localName'];
    }

    /**
     * Sets localName
     *
     * @param string $localName localName
     *
     * @return $this
     */
    public function setLocalName($localName)
    {
        $this->container['localName'] = $localName;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


