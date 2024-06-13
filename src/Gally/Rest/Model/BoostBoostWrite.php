<?php
/**
 * BoostBoostWrite
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
 * BoostBoostWrite Class Doc Comment
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BoostBoostWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Boost-boost.write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'isActive' => 'bool',
        'fromDate' => '\DateTime',
        'toDate' => '\DateTime',
        'conditionRule' => 'string',
        'model' => 'string',
        'modelConfig' => 'string',
        'localizedCatalogs' => 'string[]',
        'requestTypes' => '\Gally\Rest\Model\BoostRequestTypeBoostWrite[]',
        'categoryLimitations' => '\Gally\Rest\Model\BoostCategoryLimitationBoostWrite[]',
        'searchLimitations' => '\Gally\Rest\Model\BoostSearchLimitationBoostWrite[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'isActive' => null,
        'fromDate' => 'date-time',
        'toDate' => 'date-time',
        'conditionRule' => null,
        'model' => null,
        'modelConfig' => null,
        'localizedCatalogs' => 'iri-reference',
        'requestTypes' => null,
        'categoryLimitations' => null,
        'searchLimitations' => null
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
        'isActive' => 'isActive',
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
        'conditionRule' => 'conditionRule',
        'model' => 'model',
        'modelConfig' => 'modelConfig',
        'localizedCatalogs' => 'localizedCatalogs',
        'requestTypes' => 'requestTypes',
        'categoryLimitations' => 'categoryLimitations',
        'searchLimitations' => 'searchLimitations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'isActive' => 'setIsActive',
        'fromDate' => 'setFromDate',
        'toDate' => 'setToDate',
        'conditionRule' => 'setConditionRule',
        'model' => 'setModel',
        'modelConfig' => 'setModelConfig',
        'localizedCatalogs' => 'setLocalizedCatalogs',
        'requestTypes' => 'setRequestTypes',
        'categoryLimitations' => 'setCategoryLimitations',
        'searchLimitations' => 'setSearchLimitations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'isActive' => 'getIsActive',
        'fromDate' => 'getFromDate',
        'toDate' => 'getToDate',
        'conditionRule' => 'getConditionRule',
        'model' => 'getModel',
        'modelConfig' => 'getModelConfig',
        'localizedCatalogs' => 'getLocalizedCatalogs',
        'requestTypes' => 'getRequestTypes',
        'categoryLimitations' => 'getCategoryLimitations',
        'searchLimitations' => 'getSearchLimitations'
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
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['conditionRule'] = isset($data['conditionRule']) ? $data['conditionRule'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['modelConfig'] = isset($data['modelConfig']) ? $data['modelConfig'] : null;
        $this->container['localizedCatalogs'] = isset($data['localizedCatalogs']) ? $data['localizedCatalogs'] : null;
        $this->container['requestTypes'] = isset($data['requestTypes']) ? $data['requestTypes'] : null;
        $this->container['categoryLimitations'] = isset($data['categoryLimitations']) ? $data['categoryLimitations'] : null;
        $this->container['searchLimitations'] = isset($data['searchLimitations']) ? $data['searchLimitations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['modelConfig'] === null) {
            $invalidProperties[] = "'modelConfig' can't be null";
        }
        if ($this->container['localizedCatalogs'] === null) {
            $invalidProperties[] = "'localizedCatalogs' can't be null";
        }
        if ($this->container['requestTypes'] === null) {
            $invalidProperties[] = "'requestTypes' can't be null";
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
     * Gets isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool $isActive isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets fromDate
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
     * Sets fromDate
     *
     * @param \DateTime $fromDate fromDate
     *
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;

        return $this;
    }

    /**
     * Gets toDate
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
     * Sets toDate
     *
     * @param \DateTime $toDate toDate
     *
     * @return $this
     */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;

        return $this;
    }

    /**
     * Gets conditionRule
     *
     * @return string
     */
    public function getConditionRule()
    {
        return $this->container['conditionRule'];
    }

    /**
     * Sets conditionRule
     *
     * @param string $conditionRule conditionRule
     *
     * @return $this
     */
    public function setConditionRule($conditionRule)
    {
        $this->container['conditionRule'] = $conditionRule;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets modelConfig
     *
     * @return string
     */
    public function getModelConfig()
    {
        return $this->container['modelConfig'];
    }

    /**
     * Sets modelConfig
     *
     * @param string $modelConfig modelConfig
     *
     * @return $this
     */
    public function setModelConfig($modelConfig)
    {
        $this->container['modelConfig'] = $modelConfig;

        return $this;
    }

    /**
     * Gets localizedCatalogs
     *
     * @return string[]
     */
    public function getLocalizedCatalogs()
    {
        return $this->container['localizedCatalogs'];
    }

    /**
     * Sets localizedCatalogs
     *
     * @param string[] $localizedCatalogs localizedCatalogs
     *
     * @return $this
     */
    public function setLocalizedCatalogs($localizedCatalogs)
    {
        $this->container['localizedCatalogs'] = $localizedCatalogs;

        return $this;
    }

    /**
     * Gets requestTypes
     *
     * @return \Gally\Rest\Model\BoostRequestTypeBoostWrite[]
     */
    public function getRequestTypes()
    {
        return $this->container['requestTypes'];
    }

    /**
     * Sets requestTypes
     *
     * @param \Gally\Rest\Model\BoostRequestTypeBoostWrite[] $requestTypes requestTypes
     *
     * @return $this
     */
    public function setRequestTypes($requestTypes)
    {
        $this->container['requestTypes'] = $requestTypes;

        return $this;
    }

    /**
     * Gets categoryLimitations
     *
     * @return \Gally\Rest\Model\BoostCategoryLimitationBoostWrite[]
     */
    public function getCategoryLimitations()
    {
        return $this->container['categoryLimitations'];
    }

    /**
     * Sets categoryLimitations
     *
     * @param \Gally\Rest\Model\BoostCategoryLimitationBoostWrite[] $categoryLimitations categoryLimitations
     *
     * @return $this
     */
    public function setCategoryLimitations($categoryLimitations)
    {
        $this->container['categoryLimitations'] = $categoryLimitations;

        return $this;
    }

    /**
     * Gets searchLimitations
     *
     * @return \Gally\Rest\Model\BoostSearchLimitationBoostWrite[]
     */
    public function getSearchLimitations()
    {
        return $this->container['searchLimitations'];
    }

    /**
     * Sets searchLimitations
     *
     * @param \Gally\Rest\Model\BoostSearchLimitationBoostWrite[] $searchLimitations searchLimitations
     *
     * @return $this
     */
    public function setSearchLimitations($searchLimitations)
    {
        $this->container['searchLimitations'] = $searchLimitations;

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


