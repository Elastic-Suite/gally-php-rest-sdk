<?php
/**
 * FacetConfigurationFacetConfigurationRead
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
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29-SNAPSHOT
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
 * FacetConfigurationFacetConfigurationRead Class Doc Comment
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FacetConfigurationFacetConfigurationRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FacetConfiguration-facet_configuration.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'sourceField' => 'string',
        'category' => 'string',
        'displayMode' => 'string',
        'coverageRate' => 'int',
        'maxSize' => 'int',
        'sortOrder' => 'string',
        'isRecommendable' => 'bool',
        'isVirtual' => 'bool',
        'position' => 'int',
        'defaultDisplayMode' => 'string',
        'defaultCoverageRate' => 'int',
        'defaultMaxSize' => 'int',
        'defaultSortOrder' => 'string',
        'defaultIsRecommendable' => 'bool',
        'defaultIsVirtual' => 'bool',
        'defaultPosition' => 'int',
        'sourceFieldCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'sourceField' => 'iri-reference',
        'category' => 'iri-reference',
        'displayMode' => null,
        'coverageRate' => null,
        'maxSize' => null,
        'sortOrder' => null,
        'isRecommendable' => null,
        'isVirtual' => null,
        'position' => null,
        'defaultDisplayMode' => null,
        'defaultCoverageRate' => null,
        'defaultMaxSize' => null,
        'defaultSortOrder' => null,
        'defaultIsRecommendable' => null,
        'defaultIsVirtual' => null,
        'defaultPosition' => null,
        'sourceFieldCode' => null
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
        'sourceField' => 'sourceField',
        'category' => 'category',
        'displayMode' => 'displayMode',
        'coverageRate' => 'coverageRate',
        'maxSize' => 'maxSize',
        'sortOrder' => 'sortOrder',
        'isRecommendable' => 'isRecommendable',
        'isVirtual' => 'isVirtual',
        'position' => 'position',
        'defaultDisplayMode' => 'defaultDisplayMode',
        'defaultCoverageRate' => 'defaultCoverageRate',
        'defaultMaxSize' => 'defaultMaxSize',
        'defaultSortOrder' => 'defaultSortOrder',
        'defaultIsRecommendable' => 'defaultIsRecommendable',
        'defaultIsVirtual' => 'defaultIsVirtual',
        'defaultPosition' => 'defaultPosition',
        'sourceFieldCode' => 'sourceFieldCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sourceField' => 'setSourceField',
        'category' => 'setCategory',
        'displayMode' => 'setDisplayMode',
        'coverageRate' => 'setCoverageRate',
        'maxSize' => 'setMaxSize',
        'sortOrder' => 'setSortOrder',
        'isRecommendable' => 'setIsRecommendable',
        'isVirtual' => 'setIsVirtual',
        'position' => 'setPosition',
        'defaultDisplayMode' => 'setDefaultDisplayMode',
        'defaultCoverageRate' => 'setDefaultCoverageRate',
        'defaultMaxSize' => 'setDefaultMaxSize',
        'defaultSortOrder' => 'setDefaultSortOrder',
        'defaultIsRecommendable' => 'setDefaultIsRecommendable',
        'defaultIsVirtual' => 'setDefaultIsVirtual',
        'defaultPosition' => 'setDefaultPosition',
        'sourceFieldCode' => 'setSourceFieldCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sourceField' => 'getSourceField',
        'category' => 'getCategory',
        'displayMode' => 'getDisplayMode',
        'coverageRate' => 'getCoverageRate',
        'maxSize' => 'getMaxSize',
        'sortOrder' => 'getSortOrder',
        'isRecommendable' => 'getIsRecommendable',
        'isVirtual' => 'getIsVirtual',
        'position' => 'getPosition',
        'defaultDisplayMode' => 'getDefaultDisplayMode',
        'defaultCoverageRate' => 'getDefaultCoverageRate',
        'defaultMaxSize' => 'getDefaultMaxSize',
        'defaultSortOrder' => 'getDefaultSortOrder',
        'defaultIsRecommendable' => 'getDefaultIsRecommendable',
        'defaultIsVirtual' => 'getDefaultIsVirtual',
        'defaultPosition' => 'getDefaultPosition',
        'sourceFieldCode' => 'getSourceFieldCode'
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
        $this->container['sourceField'] = isset($data['sourceField']) ? $data['sourceField'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['displayMode'] = isset($data['displayMode']) ? $data['displayMode'] : null;
        $this->container['coverageRate'] = isset($data['coverageRate']) ? $data['coverageRate'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['isRecommendable'] = isset($data['isRecommendable']) ? $data['isRecommendable'] : null;
        $this->container['isVirtual'] = isset($data['isVirtual']) ? $data['isVirtual'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['defaultDisplayMode'] = isset($data['defaultDisplayMode']) ? $data['defaultDisplayMode'] : null;
        $this->container['defaultCoverageRate'] = isset($data['defaultCoverageRate']) ? $data['defaultCoverageRate'] : null;
        $this->container['defaultMaxSize'] = isset($data['defaultMaxSize']) ? $data['defaultMaxSize'] : null;
        $this->container['defaultSortOrder'] = isset($data['defaultSortOrder']) ? $data['defaultSortOrder'] : null;
        $this->container['defaultIsRecommendable'] = isset($data['defaultIsRecommendable']) ? $data['defaultIsRecommendable'] : null;
        $this->container['defaultIsVirtual'] = isset($data['defaultIsVirtual']) ? $data['defaultIsVirtual'] : null;
        $this->container['defaultPosition'] = isset($data['defaultPosition']) ? $data['defaultPosition'] : null;
        $this->container['sourceFieldCode'] = isset($data['sourceFieldCode']) ? $data['sourceFieldCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sourceField'] === null) {
            $invalidProperties[] = "'sourceField' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sourceField
     *
     * @return string
     */
    public function getSourceField()
    {
        return $this->container['sourceField'];
    }

    /**
     * Sets sourceField
     *
     * @param string $sourceField sourceField
     *
     * @return $this
     */
    public function setSourceField($sourceField)
    {
        $this->container['sourceField'] = $sourceField;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets displayMode
     *
     * @return string
     */
    public function getDisplayMode()
    {
        return $this->container['displayMode'];
    }

    /**
     * Sets displayMode
     *
     * @param string $displayMode displayMode
     *
     * @return $this
     */
    public function setDisplayMode($displayMode)
    {
        $this->container['displayMode'] = $displayMode;

        return $this;
    }

    /**
     * Gets coverageRate
     *
     * @return int
     */
    public function getCoverageRate()
    {
        return $this->container['coverageRate'];
    }

    /**
     * Sets coverageRate
     *
     * @param int $coverageRate coverageRate
     *
     * @return $this
     */
    public function setCoverageRate($coverageRate)
    {
        $this->container['coverageRate'] = $coverageRate;

        return $this;
    }

    /**
     * Gets maxSize
     *
     * @return int
     */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
     * Sets maxSize
     *
     * @param int $maxSize maxSize
     *
     * @return $this
     */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;

        return $this;
    }

    /**
     * Gets sortOrder
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
     * Sets sortOrder
     *
     * @param string $sortOrder sortOrder
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;

        return $this;
    }

    /**
     * Gets isRecommendable
     *
     * @return bool
     */
    public function getIsRecommendable()
    {
        return $this->container['isRecommendable'];
    }

    /**
     * Sets isRecommendable
     *
     * @param bool $isRecommendable isRecommendable
     *
     * @return $this
     */
    public function setIsRecommendable($isRecommendable)
    {
        $this->container['isRecommendable'] = $isRecommendable;

        return $this;
    }

    /**
     * Gets isVirtual
     *
     * @return bool
     */
    public function getIsVirtual()
    {
        return $this->container['isVirtual'];
    }

    /**
     * Sets isVirtual
     *
     * @param bool $isVirtual isVirtual
     *
     * @return $this
     */
    public function setIsVirtual($isVirtual)
    {
        $this->container['isVirtual'] = $isVirtual;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets defaultDisplayMode
     *
     * @return string
     */
    public function getDefaultDisplayMode()
    {
        return $this->container['defaultDisplayMode'];
    }

    /**
     * Sets defaultDisplayMode
     *
     * @param string $defaultDisplayMode defaultDisplayMode
     *
     * @return $this
     */
    public function setDefaultDisplayMode($defaultDisplayMode)
    {
        $this->container['defaultDisplayMode'] = $defaultDisplayMode;

        return $this;
    }

    /**
     * Gets defaultCoverageRate
     *
     * @return int
     */
    public function getDefaultCoverageRate()
    {
        return $this->container['defaultCoverageRate'];
    }

    /**
     * Sets defaultCoverageRate
     *
     * @param int $defaultCoverageRate defaultCoverageRate
     *
     * @return $this
     */
    public function setDefaultCoverageRate($defaultCoverageRate)
    {
        $this->container['defaultCoverageRate'] = $defaultCoverageRate;

        return $this;
    }

    /**
     * Gets defaultMaxSize
     *
     * @return int
     */
    public function getDefaultMaxSize()
    {
        return $this->container['defaultMaxSize'];
    }

    /**
     * Sets defaultMaxSize
     *
     * @param int $defaultMaxSize defaultMaxSize
     *
     * @return $this
     */
    public function setDefaultMaxSize($defaultMaxSize)
    {
        $this->container['defaultMaxSize'] = $defaultMaxSize;

        return $this;
    }

    /**
     * Gets defaultSortOrder
     *
     * @return string
     */
    public function getDefaultSortOrder()
    {
        return $this->container['defaultSortOrder'];
    }

    /**
     * Sets defaultSortOrder
     *
     * @param string $defaultSortOrder defaultSortOrder
     *
     * @return $this
     */
    public function setDefaultSortOrder($defaultSortOrder)
    {
        $this->container['defaultSortOrder'] = $defaultSortOrder;

        return $this;
    }

    /**
     * Gets defaultIsRecommendable
     *
     * @return bool
     */
    public function getDefaultIsRecommendable()
    {
        return $this->container['defaultIsRecommendable'];
    }

    /**
     * Sets defaultIsRecommendable
     *
     * @param bool $defaultIsRecommendable defaultIsRecommendable
     *
     * @return $this
     */
    public function setDefaultIsRecommendable($defaultIsRecommendable)
    {
        $this->container['defaultIsRecommendable'] = $defaultIsRecommendable;

        return $this;
    }

    /**
     * Gets defaultIsVirtual
     *
     * @return bool
     */
    public function getDefaultIsVirtual()
    {
        return $this->container['defaultIsVirtual'];
    }

    /**
     * Sets defaultIsVirtual
     *
     * @param bool $defaultIsVirtual defaultIsVirtual
     *
     * @return $this
     */
    public function setDefaultIsVirtual($defaultIsVirtual)
    {
        $this->container['defaultIsVirtual'] = $defaultIsVirtual;

        return $this;
    }

    /**
     * Gets defaultPosition
     *
     * @return int
     */
    public function getDefaultPosition()
    {
        return $this->container['defaultPosition'];
    }

    /**
     * Sets defaultPosition
     *
     * @param int $defaultPosition defaultPosition
     *
     * @return $this
     */
    public function setDefaultPosition($defaultPosition)
    {
        $this->container['defaultPosition'] = $defaultPosition;

        return $this;
    }

    /**
     * Gets sourceFieldCode
     *
     * @return string
     */
    public function getSourceFieldCode()
    {
        return $this->container['sourceFieldCode'];
    }

    /**
     * Sets sourceFieldCode
     *
     * @param string $sourceFieldCode sourceFieldCode
     *
     * @return $this
     */
    public function setSourceFieldCode($sourceFieldCode)
    {
        $this->container['sourceFieldCode'] = $sourceFieldCode;

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


