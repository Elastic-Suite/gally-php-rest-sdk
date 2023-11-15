<?php
/**
 * IndexDetails
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
 * OpenAPI spec version: 1.1.0
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
 * IndexDetails Class Doc Comment
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IndexDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Index-details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'aliases' => 'string[]',
        'docsCount' => 'int',
        'size' => 'string',
        'entityType' => 'string',
        'localizedCatalog' => 'string',
        'status' => 'string',
        'mapping' => 'string[]',
        'settings' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'aliases' => null,
        'docsCount' => null,
        'size' => null,
        'entityType' => null,
        'localizedCatalog' => 'iri-reference',
        'status' => null,
        'mapping' => null,
        'settings' => null
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
        'name' => 'name',
        'aliases' => 'aliases',
        'docsCount' => 'docsCount',
        'size' => 'size',
        'entityType' => 'entityType',
        'localizedCatalog' => 'localizedCatalog',
        'status' => 'status',
        'mapping' => 'mapping',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'aliases' => 'setAliases',
        'docsCount' => 'setDocsCount',
        'size' => 'setSize',
        'entityType' => 'setEntityType',
        'localizedCatalog' => 'setLocalizedCatalog',
        'status' => 'setStatus',
        'mapping' => 'setMapping',
        'settings' => 'setSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'aliases' => 'getAliases',
        'docsCount' => 'getDocsCount',
        'size' => 'getSize',
        'entityType' => 'getEntityType',
        'localizedCatalog' => 'getLocalizedCatalog',
        'status' => 'getStatus',
        'mapping' => 'getMapping',
        'settings' => 'getSettings'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['aliases'] = isset($data['aliases']) ? $data['aliases'] : null;
        $this->container['docsCount'] = isset($data['docsCount']) ? $data['docsCount'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['localizedCatalog'] = isset($data['localizedCatalog']) ? $data['localizedCatalog'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
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
     * Gets aliases
     *
     * @return string[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param string[] $aliases aliases
     *
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets docsCount
     *
     * @return int
     */
    public function getDocsCount()
    {
        return $this->container['docsCount'];
    }

    /**
     * Sets docsCount
     *
     * @param int $docsCount docsCount
     *
     * @return $this
     */
    public function setDocsCount($docsCount)
    {
        $this->container['docsCount'] = $docsCount;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string $entityType entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets localizedCatalog
     *
     * @return string
     */
    public function getLocalizedCatalog()
    {
        return $this->container['localizedCatalog'];
    }

    /**
     * Sets localizedCatalog
     *
     * @param string $localizedCatalog localizedCatalog
     *
     * @return $this
     */
    public function setLocalizedCatalog($localizedCatalog)
    {
        $this->container['localizedCatalog'] = $localizedCatalog;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets mapping
     *
     * @return string[]
     */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
     * Sets mapping
     *
     * @param string[] $mapping mapping
     *
     * @return $this
     */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return string[]
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param string[] $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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


