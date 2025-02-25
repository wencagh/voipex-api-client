<?php
/**
 * Model18
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
 * Model18 Class Doc Comment
 *
 * @package  Voipex\Ipbx
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Model18 implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Model18';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
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
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'call_id' => false,
        'agent' => true,
        'attempts' => false,
        'outgoing_attempts' => false,
        'caller_id' => false,
        'caller_identity' => false,
        'calldate' => false,
        'hold_time' => false,
        'ivr_value' => true,
        'last_update' => false,
        'queue' => true,
        'state' => false
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
     * @var array<string, string>
     */
    protected static array $setters = [
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
     * @var array<string, string>
     */
    protected static array $getters = [
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
        $this->setIfExists('call_id', $data ?? [], null);
        $this->setIfExists('agent', $data ?? [], null);
        $this->setIfExists('attempts', $data ?? [], null);
        $this->setIfExists('outgoing_attempts', $data ?? [], null);
        $this->setIfExists('caller_id', $data ?? [], null);
        $this->setIfExists('caller_identity', $data ?? [], null);
        $this->setIfExists('calldate', $data ?? [], null);
        $this->setIfExists('hold_time', $data ?? [], null);
        $this->setIfExists('ivr_value', $data ?? [], null);
        $this->setIfExists('last_update', $data ?? [], null);
        $this->setIfExists('queue', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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
     * Gets call_id
     *
     * @return string|null
     */
    public function getCallId(): ?string
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param string|null $call_id Call id
     *
     * @return $this
     */
    public function setCallId(?string $call_id): static
    {
        if (is_null($call_id)) {
            throw new InvalidArgumentException('non-nullable call_id cannot be null');
        }
        $this->container['call_id'] = $call_id;

        return $this;
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
            array_push($this->openAPINullablesSetToNull, 'agent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('agent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets attempts
     *
     * @return float|null
     */
    public function getAttempts(): ?float
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param float|null $attempts Number of incoming attempts
     *
     * @return $this
     */
    public function setAttempts(?float $attempts): static
    {
        if (is_null($attempts)) {
            throw new InvalidArgumentException('non-nullable attempts cannot be null');
        }
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets outgoing_attempts
     *
     * @return float|null
     */
    public function getOutgoingAttempts(): ?float
    {
        return $this->container['outgoing_attempts'];
    }

    /**
     * Sets outgoing_attempts
     *
     * @param float|null $outgoing_attempts Number of callback attempts
     *
     * @return $this
     */
    public function setOutgoingAttempts(?float $outgoing_attempts): static
    {
        if (is_null($outgoing_attempts)) {
            throw new InvalidArgumentException('non-nullable outgoing_attempts cannot be null');
        }
        $this->container['outgoing_attempts'] = $outgoing_attempts;

        return $this;
    }

    /**
     * Gets caller_id
     *
     * @return string|null
     */
    public function getCallerId(): ?string
    {
        return $this->container['caller_id'];
    }

    /**
     * Sets caller_id
     *
     * @param string|null $caller_id CallerId
     *
     * @return $this
     */
    public function setCallerId(?string $caller_id): static
    {
        if (is_null($caller_id)) {
            throw new InvalidArgumentException('non-nullable caller_id cannot be null');
        }
        $this->container['caller_id'] = $caller_id;

        return $this;
    }

    /**
     * Gets caller_identity
     *
     * @return string|null
     */
    public function getCallerIdentity(): ?string
    {
        return $this->container['caller_identity'];
    }

    /**
     * Sets caller_identity
     *
     * @param string|null $caller_identity Caller contact
     *
     * @return $this
     */
    public function setCallerIdentity(?string $caller_identity): static
    {
        if (is_null($caller_identity)) {
            throw new InvalidArgumentException('non-nullable caller_identity cannot be null');
        }
        $this->container['caller_identity'] = $caller_identity;

        return $this;
    }

    /**
     * Gets calldate
     *
     * @return \DateTime|null
     */
    public function getCalldate(): ?\DateTime
    {
        return $this->container['calldate'];
    }

    /**
     * Sets calldate
     *
     * @param \DateTime|null $calldate Date and time of the call (ISO 8601)
     *
     * @return $this
     */
    public function setCalldate(?\DateTime $calldate): static
    {
        if (is_null($calldate)) {
            throw new InvalidArgumentException('non-nullable calldate cannot be null');
        }
        $this->container['calldate'] = $calldate;

        return $this;
    }

    /**
     * Gets hold_time
     *
     * @return float|null
     */
    public function getHoldTime(): ?float
    {
        return $this->container['hold_time'];
    }

    /**
     * Sets hold_time
     *
     * @param float|null $hold_time Hold time
     *
     * @return $this
     */
    public function setHoldTime(?float $hold_time): static
    {
        if (is_null($hold_time)) {
            throw new InvalidArgumentException('non-nullable hold_time cannot be null');
        }
        $this->container['hold_time'] = $hold_time;

        return $this;
    }

    /**
     * Gets ivr_value
     *
     * @return string|null
     */
    public function getIvrValue(): ?string
    {
        return $this->container['ivr_value'];
    }

    /**
     * Sets ivr_value
     *
     * @param string|null $ivr_value Custom value set from IVR
     *
     * @return $this
     */
    public function setIvrValue(?string $ivr_value): static
    {
        if (is_null($ivr_value)) {
            array_push($this->openAPINullablesSetToNull, 'ivr_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ivr_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ivr_value'] = $ivr_value;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime|null
     */
    public function getLastUpdate(): ?\DateTime
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime|null $last_update Last update in (ISO 8601)
     *
     * @return $this
     */
    public function setLastUpdate(?\DateTime $last_update): static
    {
        if (is_null($last_update)) {
            throw new InvalidArgumentException('non-nullable last_update cannot be null');
        }
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets queue
     *
     * @return string|null
     */
    public function getQueue(): ?string
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     *
     * @param string|null $queue Queue name
     *
     * @return $this
     */
    public function setQueue(?string $queue): static
    {
        if (is_null($queue)) {
            array_push($this->openAPINullablesSetToNull, 'queue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('queue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Voipex\Ipbx\Model\Model17|null
     */
    public function getState(): ?\Voipex\Ipbx\Model\Model17
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Voipex\Ipbx\Model\Model17|null $state state
     *
     * @return $this
     */
    public function setState(?\Voipex\Ipbx\Model\Model17 $state): static
    {
        if (is_null($state)) {
            throw new InvalidArgumentException('non-nullable state cannot be null');
        }
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


