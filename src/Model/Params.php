<?php
/**
 * Params
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
 * Params Class Doc Comment
 *
 * @category Class
 * @package  Voipex\Ipbx
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Params implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'params';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'has_device' => 'bool',
        'has_forward' => 'bool',
        'alert' => 'bool',
        'endpoint_id' => 'int',
        'fwd' => '\Voipex\Ipbx\Model\Fwd',
        'fwd_num' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'has_device' => null,
        'has_forward' => null,
        'alert' => null,
        'endpoint_id' => null,
        'fwd' => null,
        'fwd_num' => null
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
        'has_device' => 'hasDevice',
        'has_forward' => 'hasForward',
        'alert' => 'alert',
        'endpoint_id' => 'endpointId',
        'fwd' => 'fwd',
        'fwd_num' => 'fwdNum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_device' => 'setHasDevice',
        'has_forward' => 'setHasForward',
        'alert' => 'setAlert',
        'endpoint_id' => 'setEndpointId',
        'fwd' => 'setFwd',
        'fwd_num' => 'setFwdNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_device' => 'getHasDevice',
        'has_forward' => 'getHasForward',
        'alert' => 'getAlert',
        'endpoint_id' => 'getEndpointId',
        'fwd' => 'getFwd',
        'fwd_num' => 'getFwdNum'
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
        $this->container['has_device'] = isset($data['has_device']) ? $data['has_device'] : null;
        $this->container['has_forward'] = isset($data['has_forward']) ? $data['has_forward'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['endpoint_id'] = isset($data['endpoint_id']) ? $data['endpoint_id'] : null;
        $this->container['fwd'] = isset($data['fwd']) ? $data['fwd'] : null;
        $this->container['fwd_num'] = isset($data['fwd_num']) ? $data['fwd_num'] : null;
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
     * Gets has_device
     *
     * @return bool
     */
    public function getHasDevice()
    {
        return $this->container['has_device'];
    }

    /**
     * Sets has_device
     *
     * @param bool $has_device has_device
     *
     * @return $this
     */
    public function setHasDevice($has_device)
    {
        $this->container['has_device'] = $has_device;

        return $this;
    }

    /**
     * Gets has_forward
     *
     * @return bool
     */
    public function getHasForward()
    {
        return $this->container['has_forward'];
    }

    /**
     * Sets has_forward
     *
     * @param bool $has_forward has_forward
     *
     * @return $this
     */
    public function setHasForward($has_forward)
    {
        $this->container['has_forward'] = $has_forward;

        return $this;
    }

    /**
     * Gets alert
     *
     * @return bool
     */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
     * Sets alert
     *
     * @param bool $alert alert
     *
     * @return $this
     */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;

        return $this;
    }

    /**
     * Gets endpoint_id
     *
     * @return int
     */
    public function getEndpointId()
    {
        return $this->container['endpoint_id'];
    }

    /**
     * Sets endpoint_id
     *
     * @param int $endpoint_id endpoint_id
     *
     * @return $this
     */
    public function setEndpointId($endpoint_id)
    {
        $this->container['endpoint_id'] = $endpoint_id;

        return $this;
    }

    /**
     * Gets fwd
     *
     * @return \Voipex\Ipbx\Model\Fwd
     */
    public function getFwd()
    {
        return $this->container['fwd'];
    }

    /**
     * Sets fwd
     *
     * @param \Voipex\Ipbx\Model\Fwd $fwd fwd
     *
     * @return $this
     */
    public function setFwd($fwd)
    {
        $this->container['fwd'] = $fwd;

        return $this;
    }

    /**
     * Gets fwd_num
     *
     * @return string
     */
    public function getFwdNum()
    {
        return $this->container['fwd_num'];
    }

    /**
     * Sets fwd_num
     *
     * @param string $fwd_num fwd_num
     *
     * @return $this
     */
    public function setFwdNum($fwd_num)
    {
        $this->container['fwd_num'] = $fwd_num;

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
