<?php
/**
 * SourceFieldSourceFieldWrite
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
 * SourceFieldSourceFieldWrite Class Doc Comment
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SourceFieldSourceFieldWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SourceField-source_field.write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'defaultLabel' => 'string',
        'type' => 'string',
        'isFilterable' => 'bool',
        'isSearchable' => 'bool',
        'isSortable' => 'bool',
        'isUsedForRules' => 'bool',
        'weight' => 'int',
        'isSpellchecked' => 'bool',
        'isSystem' => 'bool',
        'metadata' => 'string',
        'labels' => '\Gally\Rest\Model\SourceFieldLabelSourceFieldWrite[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'defaultLabel' => null,
        'type' => null,
        'isFilterable' => null,
        'isSearchable' => null,
        'isSortable' => null,
        'isUsedForRules' => null,
        'weight' => null,
        'isSpellchecked' => null,
        'isSystem' => null,
        'metadata' => 'iri-reference',
        'labels' => null
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
        'code' => 'code',
        'defaultLabel' => 'defaultLabel',
        'type' => 'type',
        'isFilterable' => 'isFilterable',
        'isSearchable' => 'isSearchable',
        'isSortable' => 'isSortable',
        'isUsedForRules' => 'isUsedForRules',
        'weight' => 'weight',
        'isSpellchecked' => 'isSpellchecked',
        'isSystem' => 'isSystem',
        'metadata' => 'metadata',
        'labels' => 'labels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'defaultLabel' => 'setDefaultLabel',
        'type' => 'setType',
        'isFilterable' => 'setIsFilterable',
        'isSearchable' => 'setIsSearchable',
        'isSortable' => 'setIsSortable',
        'isUsedForRules' => 'setIsUsedForRules',
        'weight' => 'setWeight',
        'isSpellchecked' => 'setIsSpellchecked',
        'isSystem' => 'setIsSystem',
        'metadata' => 'setMetadata',
        'labels' => 'setLabels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'defaultLabel' => 'getDefaultLabel',
        'type' => 'getType',
        'isFilterable' => 'getIsFilterable',
        'isSearchable' => 'getIsSearchable',
        'isSortable' => 'getIsSortable',
        'isUsedForRules' => 'getIsUsedForRules',
        'weight' => 'getWeight',
        'isSpellchecked' => 'getIsSpellchecked',
        'isSystem' => 'getIsSystem',
        'metadata' => 'getMetadata',
        'labels' => 'getLabels'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['defaultLabel'] = isset($data['defaultLabel']) ? $data['defaultLabel'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isFilterable'] = isset($data['isFilterable']) ? $data['isFilterable'] : null;
        $this->container['isSearchable'] = isset($data['isSearchable']) ? $data['isSearchable'] : null;
        $this->container['isSortable'] = isset($data['isSortable']) ? $data['isSortable'] : null;
        $this->container['isUsedForRules'] = isset($data['isUsedForRules']) ? $data['isUsedForRules'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['isSpellchecked'] = isset($data['isSpellchecked']) ? $data['isSpellchecked'] : null;
        $this->container['isSystem'] = isset($data['isSystem']) ? $data['isSystem'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
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
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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
     * Gets defaultLabel
     *
     * @return string
     */
    public function getDefaultLabel()
    {
        return $this->container['defaultLabel'];
    }

    /**
     * Sets defaultLabel
     *
     * @param string $defaultLabel defaultLabel
     *
     * @return $this
     */
    public function setDefaultLabel($defaultLabel)
    {
        $this->container['defaultLabel'] = $defaultLabel;

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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets isFilterable
     *
     * @return bool
     */
    public function getIsFilterable()
    {
        return $this->container['isFilterable'];
    }

    /**
     * Sets isFilterable
     *
     * @param bool $isFilterable isFilterable
     *
     * @return $this
     */
    public function setIsFilterable($isFilterable)
    {
        $this->container['isFilterable'] = $isFilterable;

        return $this;
    }

    /**
     * Gets isSearchable
     *
     * @return bool
     */
    public function getIsSearchable()
    {
        return $this->container['isSearchable'];
    }

    /**
     * Sets isSearchable
     *
     * @param bool $isSearchable isSearchable
     *
     * @return $this
     */
    public function setIsSearchable($isSearchable)
    {
        $this->container['isSearchable'] = $isSearchable;

        return $this;
    }

    /**
     * Gets isSortable
     *
     * @return bool
     */
    public function getIsSortable()
    {
        return $this->container['isSortable'];
    }

    /**
     * Sets isSortable
     *
     * @param bool $isSortable isSortable
     *
     * @return $this
     */
    public function setIsSortable($isSortable)
    {
        $this->container['isSortable'] = $isSortable;

        return $this;
    }

    /**
     * Gets isUsedForRules
     *
     * @return bool
     */
    public function getIsUsedForRules()
    {
        return $this->container['isUsedForRules'];
    }

    /**
     * Sets isUsedForRules
     *
     * @param bool $isUsedForRules isUsedForRules
     *
     * @return $this
     */
    public function setIsUsedForRules($isUsedForRules)
    {
        $this->container['isUsedForRules'] = $isUsedForRules;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets isSpellchecked
     *
     * @return bool
     */
    public function getIsSpellchecked()
    {
        return $this->container['isSpellchecked'];
    }

    /**
     * Sets isSpellchecked
     *
     * @param bool $isSpellchecked isSpellchecked
     *
     * @return $this
     */
    public function setIsSpellchecked($isSpellchecked)
    {
        $this->container['isSpellchecked'] = $isSpellchecked;

        return $this;
    }

    /**
     * Gets isSystem
     *
     * @return bool
     */
    public function getIsSystem()
    {
        return $this->container['isSystem'];
    }

    /**
     * Sets isSystem
     *
     * @param bool $isSystem isSystem
     *
     * @return $this
     */
    public function setIsSystem($isSystem)
    {
        $this->container['isSystem'] = $isSystem;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Gally\Rest\Model\SourceFieldLabelSourceFieldWrite[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Gally\Rest\Model\SourceFieldLabelSourceFieldWrite[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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


