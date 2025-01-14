<?php
/**
 * Model41
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
 * Model41 Class Doc Comment
 *
 * @category Class
 * @package  Voipex\Ipbx
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Model41 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model41';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agent' => 'string',
        'user_id' => 'string',
        'calls_taken' => 'float',
        'outgoing_calls_answered' => 'float',
        'outgoing_calls_unanswered' => 'float',
        'cb_calls' => 'float',
        'talk_time' => 'float',
        'logon_time' => '\DateTime',
        'ring_no_answer' => 'float',
        'bill_pause_time' => 'float',
        'non_bill_pause_time' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agent' => null,
        'user_id' => null,
        'calls_taken' => null,
        'outgoing_calls_answered' => null,
        'outgoing_calls_unanswered' => null,
        'cb_calls' => null,
        'talk_time' => null,
        'logon_time' => 'date-time',
        'ring_no_answer' => null,
        'bill_pause_time' => null,
        'non_bill_pause_time' => null
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
        'agent' => 'agent',
        'user_id' => 'userId',
        'calls_taken' => 'callsTaken',
        'outgoing_calls_answered' => 'outgoingCallsAnswered',
        'outgoing_calls_unanswered' => 'outgoingCallsUnanswered',
        'cb_calls' => 'cbCalls',
        'talk_time' => 'talkTime',
        'logon_time' => 'logonTime',
        'ring_no_answer' => 'ringNoAnswer',
        'bill_pause_time' => 'billPauseTime',
        'non_bill_pause_time' => 'nonBillPauseTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent' => 'setAgent',
        'user_id' => 'setUserId',
        'calls_taken' => 'setCallsTaken',
        'outgoing_calls_answered' => 'setOutgoingCallsAnswered',
        'outgoing_calls_unanswered' => 'setOutgoingCallsUnanswered',
        'cb_calls' => 'setCbCalls',
        'talk_time' => 'setTalkTime',
        'logon_time' => 'setLogonTime',
        'ring_no_answer' => 'setRingNoAnswer',
        'bill_pause_time' => 'setBillPauseTime',
        'non_bill_pause_time' => 'setNonBillPauseTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent' => 'getAgent',
        'user_id' => 'getUserId',
        'calls_taken' => 'getCallsTaken',
        'outgoing_calls_answered' => 'getOutgoingCallsAnswered',
        'outgoing_calls_unanswered' => 'getOutgoingCallsUnanswered',
        'cb_calls' => 'getCbCalls',
        'talk_time' => 'getTalkTime',
        'logon_time' => 'getLogonTime',
        'ring_no_answer' => 'getRingNoAnswer',
        'bill_pause_time' => 'getBillPauseTime',
        'non_bill_pause_time' => 'getNonBillPauseTime'
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
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['calls_taken'] = isset($data['calls_taken']) ? $data['calls_taken'] : null;
        $this->container['outgoing_calls_answered'] = isset($data['outgoing_calls_answered']) ? $data['outgoing_calls_answered'] : null;
        $this->container['outgoing_calls_unanswered'] = isset($data['outgoing_calls_unanswered']) ? $data['outgoing_calls_unanswered'] : null;
        $this->container['cb_calls'] = isset($data['cb_calls']) ? $data['cb_calls'] : null;
        $this->container['talk_time'] = isset($data['talk_time']) ? $data['talk_time'] : null;
        $this->container['logon_time'] = isset($data['logon_time']) ? $data['logon_time'] : null;
        $this->container['ring_no_answer'] = isset($data['ring_no_answer']) ? $data['ring_no_answer'] : null;
        $this->container['bill_pause_time'] = isset($data['bill_pause_time']) ? $data['bill_pause_time'] : null;
        $this->container['non_bill_pause_time'] = isset($data['non_bill_pause_time']) ? $data['non_bill_pause_time'] : null;
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
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id User Id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets calls_taken
     *
     * @return float
     */
    public function getCallsTaken()
    {
        return $this->container['calls_taken'];
    }

    /**
     * Sets calls_taken
     *
     * @param float $calls_taken Number of incoming calls since login
     *
     * @return $this
     */
    public function setCallsTaken($calls_taken)
    {
        $this->container['calls_taken'] = $calls_taken;

        return $this;
    }

    /**
     * Gets outgoing_calls_answered
     *
     * @return float
     */
    public function getOutgoingCallsAnswered()
    {
        return $this->container['outgoing_calls_answered'];
    }

    /**
     * Sets outgoing_calls_answered
     *
     * @param float $outgoing_calls_answered Number of outgoing answered calls
     *
     * @return $this
     */
    public function setOutgoingCallsAnswered($outgoing_calls_answered)
    {
        $this->container['outgoing_calls_answered'] = $outgoing_calls_answered;

        return $this;
    }

    /**
     * Gets outgoing_calls_unanswered
     *
     * @return float
     */
    public function getOutgoingCallsUnanswered()
    {
        return $this->container['outgoing_calls_unanswered'];
    }

    /**
     * Sets outgoing_calls_unanswered
     *
     * @param float $outgoing_calls_unanswered number of outgoing answered calls
     *
     * @return $this
     */
    public function setOutgoingCallsUnanswered($outgoing_calls_unanswered)
    {
        $this->container['outgoing_calls_unanswered'] = $outgoing_calls_unanswered;

        return $this;
    }

    /**
     * Gets cb_calls
     *
     * @return float
     */
    public function getCbCalls()
    {
        return $this->container['cb_calls'];
    }

    /**
     * Sets cb_calls
     *
     * @param float $cb_calls Number of callbacks
     *
     * @return $this
     */
    public function setCbCalls($cb_calls)
    {
        $this->container['cb_calls'] = $cb_calls;

        return $this;
    }

    /**
     * Gets talk_time
     *
     * @return float
     */
    public function getTalkTime()
    {
        return $this->container['talk_time'];
    }

    /**
     * Sets talk_time
     *
     * @param float $talk_time Time spent on call [s]
     *
     * @return $this
     */
    public function setTalkTime($talk_time)
    {
        $this->container['talk_time'] = $talk_time;

        return $this;
    }

    /**
     * Gets logon_time
     *
     * @return \DateTime
     */
    public function getLogonTime()
    {
        return $this->container['logon_time'];
    }

    /**
     * Sets logon_time
     *
     * @param \DateTime $logon_time Login time
     *
     * @return $this
     */
    public function setLogonTime($logon_time)
    {
        $this->container['logon_time'] = $logon_time;

        return $this;
    }

    /**
     * Gets ring_no_answer
     *
     * @return float
     */
    public function getRingNoAnswer()
    {
        return $this->container['ring_no_answer'];
    }

    /**
     * Sets ring_no_answer
     *
     * @param float $ring_no_answer Number of failed rings
     *
     * @return $this
     */
    public function setRingNoAnswer($ring_no_answer)
    {
        $this->container['ring_no_answer'] = $ring_no_answer;

        return $this;
    }

    /**
     * Gets bill_pause_time
     *
     * @return float
     */
    public function getBillPauseTime()
    {
        return $this->container['bill_pause_time'];
    }

    /**
     * Sets bill_pause_time
     *
     * @param float $bill_pause_time Time spent on billed pauses [s]
     *
     * @return $this
     */
    public function setBillPauseTime($bill_pause_time)
    {
        $this->container['bill_pause_time'] = $bill_pause_time;

        return $this;
    }

    /**
     * Gets non_bill_pause_time
     *
     * @return float
     */
    public function getNonBillPauseTime()
    {
        return $this->container['non_bill_pause_time'];
    }

    /**
     * Sets non_bill_pause_time
     *
     * @param float $non_bill_pause_time Time spent on unbilled pauses [s]
     *
     * @return $this
     */
    public function setNonBillPauseTime($non_bill_pause_time)
    {
        $this->container['non_bill_pause_time'] = $non_bill_pause_time;

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
