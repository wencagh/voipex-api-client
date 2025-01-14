<?php
/**
 * Model24
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
 * Model24 Class Doc Comment
 *
 * @category Class
 * @package  Voipex\Ipbx
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Model24 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model24';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'total' => 'float',
        'answered' => 'float',
        'noanswer' => 'float',
        'after_sla' => 'float',
        'in_sla' => 'float',
        'avg_wait' => 'float',
        'max_wait' => 'float',
        'avg_dur' => 'float',
        'max_dur' => 'float',
        'noanswer_recur' => 'float',
        'noanswer_uniq' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'total' => null,
        'answered' => null,
        'noanswer' => null,
        'after_sla' => null,
        'in_sla' => null,
        'avg_wait' => null,
        'max_wait' => null,
        'avg_dur' => null,
        'max_dur' => null,
        'noanswer_recur' => null,
        'noanswer_uniq' => null
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
        'total' => 'total',
        'answered' => 'answered',
        'noanswer' => 'noanswer',
        'after_sla' => 'afterSla',
        'in_sla' => 'inSla',
        'avg_wait' => 'avgWait',
        'max_wait' => 'maxWait',
        'avg_dur' => 'avgDur',
        'max_dur' => 'maxDur',
        'noanswer_recur' => 'noanswerRecur',
        'noanswer_uniq' => 'noanswerUniq'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'total' => 'setTotal',
        'answered' => 'setAnswered',
        'noanswer' => 'setNoanswer',
        'after_sla' => 'setAfterSla',
        'in_sla' => 'setInSla',
        'avg_wait' => 'setAvgWait',
        'max_wait' => 'setMaxWait',
        'avg_dur' => 'setAvgDur',
        'max_dur' => 'setMaxDur',
        'noanswer_recur' => 'setNoanswerRecur',
        'noanswer_uniq' => 'setNoanswerUniq'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'total' => 'getTotal',
        'answered' => 'getAnswered',
        'noanswer' => 'getNoanswer',
        'after_sla' => 'getAfterSla',
        'in_sla' => 'getInSla',
        'avg_wait' => 'getAvgWait',
        'max_wait' => 'getMaxWait',
        'avg_dur' => 'getAvgDur',
        'max_dur' => 'getMaxDur',
        'noanswer_recur' => 'getNoanswerRecur',
        'noanswer_uniq' => 'getNoanswerUniq'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['answered'] = isset($data['answered']) ? $data['answered'] : null;
        $this->container['noanswer'] = isset($data['noanswer']) ? $data['noanswer'] : null;
        $this->container['after_sla'] = isset($data['after_sla']) ? $data['after_sla'] : null;
        $this->container['in_sla'] = isset($data['in_sla']) ? $data['in_sla'] : null;
        $this->container['avg_wait'] = isset($data['avg_wait']) ? $data['avg_wait'] : null;
        $this->container['max_wait'] = isset($data['max_wait']) ? $data['max_wait'] : null;
        $this->container['avg_dur'] = isset($data['avg_dur']) ? $data['avg_dur'] : null;
        $this->container['max_dur'] = isset($data['max_dur']) ? $data['max_dur'] : null;
        $this->container['noanswer_recur'] = isset($data['noanswer_recur']) ? $data['noanswer_recur'] : null;
        $this->container['noanswer_uniq'] = isset($data['noanswer_uniq']) ? $data['noanswer_uniq'] : null;
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
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['answered'] === null) {
            $invalidProperties[] = "'answered' can't be null";
        }
        if ($this->container['noanswer'] === null) {
            $invalidProperties[] = "'noanswer' can't be null";
        }
        if ($this->container['after_sla'] === null) {
            $invalidProperties[] = "'after_sla' can't be null";
        }
        if ($this->container['in_sla'] === null) {
            $invalidProperties[] = "'in_sla' can't be null";
        }
        if ($this->container['avg_wait'] === null) {
            $invalidProperties[] = "'avg_wait' can't be null";
        }
        if ($this->container['max_wait'] === null) {
            $invalidProperties[] = "'max_wait' can't be null";
        }
        if ($this->container['avg_dur'] === null) {
            $invalidProperties[] = "'avg_dur' can't be null";
        }
        if ($this->container['max_dur'] === null) {
            $invalidProperties[] = "'max_dur' can't be null";
        }
        if ($this->container['noanswer_recur'] === null) {
            $invalidProperties[] = "'noanswer_recur' can't be null";
        }
        if ($this->container['noanswer_uniq'] === null) {
            $invalidProperties[] = "'noanswer_uniq' can't be null";
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
     * @param string $name Queue name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets answered
     *
     * @return float
     */
    public function getAnswered()
    {
        return $this->container['answered'];
    }

    /**
     * Sets answered
     *
     * @param float $answered answered
     *
     * @return $this
     */
    public function setAnswered($answered)
    {
        $this->container['answered'] = $answered;

        return $this;
    }

    /**
     * Gets noanswer
     *
     * @return float
     */
    public function getNoanswer()
    {
        return $this->container['noanswer'];
    }

    /**
     * Sets noanswer
     *
     * @param float $noanswer noanswer
     *
     * @return $this
     */
    public function setNoanswer($noanswer)
    {
        $this->container['noanswer'] = $noanswer;

        return $this;
    }

    /**
     * Gets after_sla
     *
     * @return float
     */
    public function getAfterSla()
    {
        return $this->container['after_sla'];
    }

    /**
     * Sets after_sla
     *
     * @param float $after_sla after_sla
     *
     * @return $this
     */
    public function setAfterSla($after_sla)
    {
        $this->container['after_sla'] = $after_sla;

        return $this;
    }

    /**
     * Gets in_sla
     *
     * @return float
     */
    public function getInSla()
    {
        return $this->container['in_sla'];
    }

    /**
     * Sets in_sla
     *
     * @param float $in_sla in_sla
     *
     * @return $this
     */
    public function setInSla($in_sla)
    {
        $this->container['in_sla'] = $in_sla;

        return $this;
    }

    /**
     * Gets avg_wait
     *
     * @return float
     */
    public function getAvgWait()
    {
        return $this->container['avg_wait'];
    }

    /**
     * Sets avg_wait
     *
     * @param float $avg_wait avg_wait
     *
     * @return $this
     */
    public function setAvgWait($avg_wait)
    {
        $this->container['avg_wait'] = $avg_wait;

        return $this;
    }

    /**
     * Gets max_wait
     *
     * @return float
     */
    public function getMaxWait()
    {
        return $this->container['max_wait'];
    }

    /**
     * Sets max_wait
     *
     * @param float $max_wait max_wait
     *
     * @return $this
     */
    public function setMaxWait($max_wait)
    {
        $this->container['max_wait'] = $max_wait;

        return $this;
    }

    /**
     * Gets avg_dur
     *
     * @return float
     */
    public function getAvgDur()
    {
        return $this->container['avg_dur'];
    }

    /**
     * Sets avg_dur
     *
     * @param float $avg_dur avg_dur
     *
     * @return $this
     */
    public function setAvgDur($avg_dur)
    {
        $this->container['avg_dur'] = $avg_dur;

        return $this;
    }

    /**
     * Gets max_dur
     *
     * @return float
     */
    public function getMaxDur()
    {
        return $this->container['max_dur'];
    }

    /**
     * Sets max_dur
     *
     * @param float $max_dur max_dur
     *
     * @return $this
     */
    public function setMaxDur($max_dur)
    {
        $this->container['max_dur'] = $max_dur;

        return $this;
    }

    /**
     * Gets noanswer_recur
     *
     * @return float
     */
    public function getNoanswerRecur()
    {
        return $this->container['noanswer_recur'];
    }

    /**
     * Sets noanswer_recur
     *
     * @param float $noanswer_recur noanswer_recur
     *
     * @return $this
     */
    public function setNoanswerRecur($noanswer_recur)
    {
        $this->container['noanswer_recur'] = $noanswer_recur;

        return $this;
    }

    /**
     * Gets noanswer_uniq
     *
     * @return float
     */
    public function getNoanswerUniq()
    {
        return $this->container['noanswer_uniq'];
    }

    /**
     * Sets noanswer_uniq
     *
     * @param float $noanswer_uniq noanswer_uniq
     *
     * @return $this
     */
    public function setNoanswerUniq($noanswer_uniq)
    {
        $this->container['noanswer_uniq'] = $noanswer_uniq;

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
