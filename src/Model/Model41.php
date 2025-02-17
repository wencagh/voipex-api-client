<?php
/**
 * Model41
 *
 * PHP version 8.1
 *
 * @package  Voipex\Ipbx
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * IPBX API Documentation
 *
 * Access to all methods is granted through Bearer token.
 *
 * The version of the OpenAPI document: 1.98.2
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Voipex\Ipbx\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Voipex\Ipbx\ObjectSerializer;

/**
 * Model41 Class Doc Comment
 *
 * @package  Voipex\Ipbx
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Model41 implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Model41';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
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
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'agent' => false,
        'user_id' => false,
        'calls_taken' => false,
        'outgoing_calls_answered' => false,
        'outgoing_calls_unanswered' => false,
        'cb_calls' => false,
        'talk_time' => false,
        'logon_time' => true,
        'ring_no_answer' => false,
        'bill_pause_time' => false,
        'non_bill_pause_time' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
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
     * @var array<string, string>
     */
    protected static array $setters = [
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
     * @var array<string, string>
     */
    protected static array $getters = [
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
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('agent', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('calls_taken', $data ?? [], null);
        $this->setIfExists('outgoing_calls_answered', $data ?? [], null);
        $this->setIfExists('outgoing_calls_unanswered', $data ?? [], null);
        $this->setIfExists('cb_calls', $data ?? [], null);
        $this->setIfExists('talk_time', $data ?? [], null);
        $this->setIfExists('logon_time', $data ?? [], null);
        $this->setIfExists('ring_no_answer', $data ?? [], null);
        $this->setIfExists('bill_pause_time', $data ?? [], null);
        $this->setIfExists('non_bill_pause_time', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets agent
     *
     * @return string|null
     */
    public function getAgent(): ?string
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param string|null $agent Agent login
     *
     * @return $this
     */
    public function setAgent(?string $agent): static
    {
        if (is_null($agent)) {
            throw new InvalidArgumentException('non-nullable agent cannot be null');
        }
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id User Id
     *
     * @return $this
     */
    public function setUserId(?string $user_id): static
    {
        if (is_null($user_id)) {
            throw new InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets calls_taken
     *
     * @return float|null
     */
    public function getCallsTaken(): ?float
    {
        return $this->container['calls_taken'];
    }

    /**
     * Sets calls_taken
     *
     * @param float|null $calls_taken Number of incoming calls since login
     *
     * @return $this
     */
    public function setCallsTaken(?float $calls_taken): static
    {
        if (is_null($calls_taken)) {
            throw new InvalidArgumentException('non-nullable calls_taken cannot be null');
        }
        $this->container['calls_taken'] = $calls_taken;

        return $this;
    }

    /**
     * Gets outgoing_calls_answered
     *
     * @return float|null
     */
    public function getOutgoingCallsAnswered(): ?float
    {
        return $this->container['outgoing_calls_answered'];
    }

    /**
     * Sets outgoing_calls_answered
     *
     * @param float|null $outgoing_calls_answered Number of outgoing answered calls
     *
     * @return $this
     */
    public function setOutgoingCallsAnswered(?float $outgoing_calls_answered): static
    {
        if (is_null($outgoing_calls_answered)) {
            throw new InvalidArgumentException('non-nullable outgoing_calls_answered cannot be null');
        }
        $this->container['outgoing_calls_answered'] = $outgoing_calls_answered;

        return $this;
    }

    /**
     * Gets outgoing_calls_unanswered
     *
     * @return float|null
     */
    public function getOutgoingCallsUnanswered(): ?float
    {
        return $this->container['outgoing_calls_unanswered'];
    }

    /**
     * Sets outgoing_calls_unanswered
     *
     * @param float|null $outgoing_calls_unanswered number of outgoing answered calls
     *
     * @return $this
     */
    public function setOutgoingCallsUnanswered(?float $outgoing_calls_unanswered): static
    {
        if (is_null($outgoing_calls_unanswered)) {
            throw new InvalidArgumentException('non-nullable outgoing_calls_unanswered cannot be null');
        }
        $this->container['outgoing_calls_unanswered'] = $outgoing_calls_unanswered;

        return $this;
    }

    /**
     * Gets cb_calls
     *
     * @return float|null
     */
    public function getCbCalls(): ?float
    {
        return $this->container['cb_calls'];
    }

    /**
     * Sets cb_calls
     *
     * @param float|null $cb_calls Number of callbacks
     *
     * @return $this
     */
    public function setCbCalls(?float $cb_calls): static
    {
        if (is_null($cb_calls)) {
            throw new InvalidArgumentException('non-nullable cb_calls cannot be null');
        }
        $this->container['cb_calls'] = $cb_calls;

        return $this;
    }

    /**
     * Gets talk_time
     *
     * @return float|null
     */
    public function getTalkTime(): ?float
    {
        return $this->container['talk_time'];
    }

    /**
     * Sets talk_time
     *
     * @param float|null $talk_time Time spent on call [s]
     *
     * @return $this
     */
    public function setTalkTime(?float $talk_time): static
    {
        if (is_null($talk_time)) {
            throw new InvalidArgumentException('non-nullable talk_time cannot be null');
        }
        $this->container['talk_time'] = $talk_time;

        return $this;
    }

    /**
     * Gets logon_time
     *
     * @return \DateTime|null
     */
    public function getLogonTime(): ?\DateTime
    {
        return $this->container['logon_time'];
    }

    /**
     * Sets logon_time
     *
     * @param \DateTime|null $logon_time Login time
     *
     * @return $this
     */
    public function setLogonTime(?\DateTime $logon_time): static
    {
        if (is_null($logon_time)) {
            array_push($this->openAPINullablesSetToNull, 'logon_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logon_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logon_time'] = $logon_time;

        return $this;
    }

    /**
     * Gets ring_no_answer
     *
     * @return float|null
     */
    public function getRingNoAnswer(): ?float
    {
        return $this->container['ring_no_answer'];
    }

    /**
     * Sets ring_no_answer
     *
     * @param float|null $ring_no_answer Number of failed rings
     *
     * @return $this
     */
    public function setRingNoAnswer(?float $ring_no_answer): static
    {
        if (is_null($ring_no_answer)) {
            throw new InvalidArgumentException('non-nullable ring_no_answer cannot be null');
        }
        $this->container['ring_no_answer'] = $ring_no_answer;

        return $this;
    }

    /**
     * Gets bill_pause_time
     *
     * @return float|null
     */
    public function getBillPauseTime(): ?float
    {
        return $this->container['bill_pause_time'];
    }

    /**
     * Sets bill_pause_time
     *
     * @param float|null $bill_pause_time Time spent on billed pauses [s]
     *
     * @return $this
     */
    public function setBillPauseTime(?float $bill_pause_time): static
    {
        if (is_null($bill_pause_time)) {
            throw new InvalidArgumentException('non-nullable bill_pause_time cannot be null');
        }
        $this->container['bill_pause_time'] = $bill_pause_time;

        return $this;
    }

    /**
     * Gets non_bill_pause_time
     *
     * @return float|null
     */
    public function getNonBillPauseTime(): ?float
    {
        return $this->container['non_bill_pause_time'];
    }

    /**
     * Sets non_bill_pause_time
     *
     * @param float|null $non_bill_pause_time Time spent on unbilled pauses [s]
     *
     * @return $this
     */
    public function setNonBillPauseTime(?float $non_bill_pause_time): static
    {
        if (is_null($non_bill_pause_time)) {
            throw new InvalidArgumentException('non-nullable non_bill_pause_time cannot be null');
        }
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
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


