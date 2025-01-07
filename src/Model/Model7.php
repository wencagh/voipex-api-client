<?php
/**
 * Model7
 *
 * PHP version 5
 *
 * @category Class
 * @package  Voipex\Ipbx
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IPBX API Documentation
 *
 * Access to all methods is granted through Bearer token.
 *
 * OpenAPI spec version: 1.98.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.66
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Voipex\Ipbx\Model;

use \ArrayAccess;
use \Voipex\Ipbx\ObjectSerializer;

/**
 * Model7 Class Doc Comment
 *
 * @category Class
 * @package  Voipex\Ipbx
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Model7 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model7';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'owner_id' => 'string',
        'id' => 'string',
        'owner_type' => '\Voipex\Ipbx\Model\OwnerType',
        'application_type' => 'string',
        'type' => '\Voipex\Ipbx\Model\Type',
        'priority' => 'float',
        'numplan' => '\Voipex\Ipbx\Model\Numplan'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'owner_id' => null,
        'id' => null,
        'owner_type' => null,
        'application_type' => null,
        'type' => null,
        'priority' => null,
        'numplan' => null
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
        'number' => 'number',
        'owner_id' => 'ownerId',
        'id' => 'id',
        'owner_type' => 'ownerType',
        'application_type' => 'applicationType',
        'type' => 'type',
        'priority' => 'priority',
        'numplan' => 'numplan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'owner_id' => 'setOwnerId',
        'id' => 'setId',
        'owner_type' => 'setOwnerType',
        'application_type' => 'setApplicationType',
        'type' => 'setType',
        'priority' => 'setPriority',
        'numplan' => 'setNumplan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'owner_id' => 'getOwnerId',
        'id' => 'getId',
        'owner_type' => 'getOwnerType',
        'application_type' => 'getApplicationType',
        'type' => 'getType',
        'priority' => 'getPriority',
        'numplan' => 'getNumplan'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['owner_type'] = isset($data['owner_type']) ? $data['owner_type'] : null;
        $this->container['application_type'] = isset($data['application_type']) ? $data['application_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['numplan'] = isset($data['numplan']) ? $data['numplan'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['owner_type'] === null) {
            $invalidProperties[] = "'owner_type' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['numplan'] === null) {
            $invalidProperties[] = "'numplan' can't be null";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id owner_id
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

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
     * Gets owner_type
     *
     * @return \Voipex\Ipbx\Model\OwnerType
     */
    public function getOwnerType()
    {
        return $this->container['owner_type'];
    }

    /**
     * Sets owner_type
     *
     * @param \Voipex\Ipbx\Model\OwnerType $owner_type owner_type
     *
     * @return $this
     */
    public function setOwnerType($owner_type)
    {
        $this->container['owner_type'] = $owner_type;

        return $this;
    }

    /**
     * Gets application_type
     *
     * @return string
     */
    public function getApplicationType()
    {
        return $this->container['application_type'];
    }

    /**
     * Sets application_type
     *
     * @param string $application_type application_type
     *
     * @return $this
     */
    public function setApplicationType($application_type)
    {
        $this->container['application_type'] = $application_type;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Voipex\Ipbx\Model\Type
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Voipex\Ipbx\Model\Type $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param float $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets numplan
     *
     * @return \Voipex\Ipbx\Model\Numplan
     */
    public function getNumplan()
    {
        return $this->container['numplan'];
    }

    /**
     * Sets numplan
     *
     * @param \Voipex\Ipbx\Model\Numplan $numplan numplan
     *
     * @return $this
     */
    public function setNumplan($numplan)
    {
        $this->container['numplan'] = $numplan;

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