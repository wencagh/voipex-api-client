<?php
/**
 * Model18
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
 * Model18 Class Doc Comment
 *
 * @category Class
 * @package  Voipex\Ipbx
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Model18 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model18';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'call_id' => 'string',
        'agent' => 'string',
        'attempts' => 'float',
        'outgoing_attempts' => 'float',
        'caller_id' => 'string',
        'caller_identity' => 'string',
        'calldate' => '\DateTime',
        'hold_time' => 'float',
        'ivr_value' => 'string',
        'last_update' => '\DateTime',
        'queue' => 'string',
        'state' => '\Voipex\Ipbx\Model\Model17'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'call_id' => null,
        'agent' => null,
        'attempts' => null,
        'outgoing_attempts' => null,
        'caller_id' => null,
        'caller_identity' => null,
        'calldate' => 'date-time',
        'hold_time' => null,
        'ivr_value' => null,
        'last_update' => 'date-time',
        'queue' => null,
        'state' => null
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
        'call_id' => 'callId',
        'agent' => 'agent',
        'attempts' => 'attempts',
        'outgoing_attempts' => 'outgoingAttempts',
        'caller_id' => 'callerId',
        'caller_identity' => 'callerIdentity',
        'calldate' => 'calldate',
        'hold_time' => 'holdTime',
        'ivr_value' => 'ivrValue',
        'last_update' => 'lastUpdate',
        'queue' => 'queue',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_id' => 'setCallId',
        'agent' => 'setAgent',
        'attempts' => 'setAttempts',
        'outgoing_attempts' => 'setOutgoingAttempts',
        'caller_id' => 'setCallerId',
        'caller_identity' => 'setCallerIdentity',
        'calldate' => 'setCalldate',
        'hold_time' => 'setHoldTime',
        'ivr_value' => 'setIvrValue',
        'last_update' => 'setLastUpdate',
        'queue' => 'setQueue',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_id' => 'getCallId',
        'agent' => 'getAgent',
        'attempts' => 'getAttempts',
        'outgoing_attempts' => 'getOutgoingAttempts',
        'caller_id' => 'getCallerId',
        'caller_identity' => 'getCallerIdentity',
        'calldate' => 'getCalldate',
        'hold_time' => 'getHoldTime',
        'ivr_value' => 'getIvrValue',
        'last_update' => 'getLastUpdate',
        'queue' => 'getQueue',
        'state' => 'getState'
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
        $this->container['call_id'] = isset($data['call_id']) ? $data['call_id'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['outgoing_attempts'] = isset($data['outgoing_attempts']) ? $data['outgoing_attempts'] : null;
        $this->container['caller_id'] = isset($data['caller_id']) ? $data['caller_id'] : null;
        $this->container['caller_identity'] = isset($data['caller_identity']) ? $data['caller_identity'] : null;
        $this->container['calldate'] = isset($data['calldate']) ? $data['calldate'] : null;
        $this->container['hold_time'] = isset($data['hold_time']) ? $data['hold_time'] : null;
        $this->container['ivr_value'] = isset($data['ivr_value']) ? $data['ivr_value'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
     * Gets call_id
     *
     * @return string
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param string $call_id Call id
     *
     * @return $this
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param string $agent Agent login
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets attempts
     *
     * @return float
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param float $attempts Number of incoming attempts
     *
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets outgoing_attempts
     *
     * @return float
     */
    public function getOutgoingAttempts()
    {
        return $this->container['outgoing_attempts'];
    }

    /**
     * Sets outgoing_attempts
     *
     * @param float $outgoing_attempts Number of callback attempts
     *
     * @return $this
     */
    public function setOutgoingAttempts($outgoing_attempts)
    {
        $this->container['outgoing_attempts'] = $outgoing_attempts;

        return $this;
    }

    /**
     * Gets caller_id
     *
     * @return string
     */
    public function getCallerId()
    {
        return $this->container['caller_id'];
    }

    /**
     * Sets caller_id
     *
     * @param string $caller_id CallerId
     *
     * @return $this
     */
    public function setCallerId($caller_id)
    {
        $this->container['caller_id'] = $caller_id;

        return $this;
    }

    /**
     * Gets caller_identity
     *
     * @return string
     */
    public function getCallerIdentity()
    {
        return $this->container['caller_identity'];
    }

    /**
     * Sets caller_identity
     *
     * @param string $caller_identity Caller contact
     *
     * @return $this
     */
    public function setCallerIdentity($caller_identity)
    {
        $this->container['caller_identity'] = $caller_identity;

        return $this;
    }

    /**
     * Gets calldate
     *
     * @return \DateTime
     */
    public function getCalldate()
    {
        return $this->container['calldate'];
    }

    /**
     * Sets calldate
     *
     * @param \DateTime $calldate Date and time of the call (ISO 8601)
     *
     * @return $this
     */
    public function setCalldate($calldate)
    {
        $this->container['calldate'] = $calldate;

        return $this;
    }

    /**
     * Gets hold_time
     *
     * @return float
     */
    public function getHoldTime()
    {
        return $this->container['hold_time'];
    }

    /**
     * Sets hold_time
     *
     * @param float $hold_time Hold time
     *
     * @return $this
     */
    public function setHoldTime($hold_time)
    {
        $this->container['hold_time'] = $hold_time;

        return $this;
    }

    /**
     * Gets ivr_value
     *
     * @return string
     */
    public function getIvrValue()
    {
        return $this->container['ivr_value'];
    }

    /**
     * Sets ivr_value
     *
     * @param string $ivr_value Custom value set from IVR
     *
     * @return $this
     */
    public function setIvrValue($ivr_value)
    {
        $this->container['ivr_value'] = $ivr_value;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime $last_update Last update in (ISO 8601)
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets queue
     *
     * @return string
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     *
     * @param string $queue Queue name
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Voipex\Ipbx\Model\Model17
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Voipex\Ipbx\Model\Model17 $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
