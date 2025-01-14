<?php
/**
 * Model1
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
 * Model1 Class Doc Comment
 *
 * @category Class
 * @package  Voipex\Ipbx
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Model1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'AnyOfModel1UserId',
        'line' => 'AnyOfModel1Line',
        'calldate' => '\DateTime',
        'clid' => 'string',
        'src' => 'string',
        'dst' => 'string',
        'duration' => 'float',
        'billsec' => 'float',
        'disposition' => 'string',
        'accountcode' => 'string',
        'userfield' => 'string',
        'filename' => 'string',
        'way' => '\Voipex\Ipbx\Model\Way',
        'trunk' => 'string',
        'hangupcause' => 'string',
        'uniqueid' => 'string',
        'linkedid' => 'string',
        'organization' => 'string',
        'organization_person' => 'string',
        'data' => 'string',
        'sipcallid' => 'string',
        'stamp' => '\DateTime',
        'cc_cb' => 'float',
        'queue' => 'string',
        'note' => 'string',
        'categories' => '\Voipex\Ipbx\Model\Categories',
        'phone_number' => 'string',
        'user' => '\Voipex\Ipbx\Model\User',
        'end_time' => '\DateTime',
        'user_answered' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => null,
        'line' => null,
        'calldate' => 'date',
        'clid' => null,
        'src' => null,
        'dst' => null,
        'duration' => null,
        'billsec' => null,
        'disposition' => null,
        'accountcode' => null,
        'userfield' => null,
        'filename' => null,
        'way' => null,
        'trunk' => null,
        'hangupcause' => null,
        'uniqueid' => null,
        'linkedid' => null,
        'organization' => null,
        'organization_person' => null,
        'data' => null,
        'sipcallid' => null,
        'stamp' => 'date',
        'cc_cb' => null,
        'queue' => null,
        'note' => null,
        'categories' => null,
        'phone_number' => null,
        'user' => null,
        'end_time' => 'date',
        'user_answered' => null
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
        'user_id' => 'user_id',
        'line' => 'line',
        'calldate' => 'calldate',
        'clid' => 'clid',
        'src' => 'src',
        'dst' => 'dst',
        'duration' => 'duration',
        'billsec' => 'billsec',
        'disposition' => 'disposition',
        'accountcode' => 'accountcode',
        'userfield' => 'userfield',
        'filename' => 'filename',
        'way' => 'way',
        'trunk' => 'trunk',
        'hangupcause' => 'hangupcause',
        'uniqueid' => 'uniqueid',
        'linkedid' => 'linkedid',
        'organization' => 'organization',
        'organization_person' => 'organizationPerson',
        'data' => 'data',
        'sipcallid' => 'sipcallid',
        'stamp' => 'stamp',
        'cc_cb' => 'cc_cb',
        'queue' => 'queue',
        'note' => 'note',
        'categories' => 'categories',
        'phone_number' => 'phoneNumber',
        'user' => 'user',
        'end_time' => 'endTime',
        'user_answered' => 'userAnswered'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'line' => 'setLine',
        'calldate' => 'setCalldate',
        'clid' => 'setClid',
        'src' => 'setSrc',
        'dst' => 'setDst',
        'duration' => 'setDuration',
        'billsec' => 'setBillsec',
        'disposition' => 'setDisposition',
        'accountcode' => 'setAccountcode',
        'userfield' => 'setUserfield',
        'filename' => 'setFilename',
        'way' => 'setWay',
        'trunk' => 'setTrunk',
        'hangupcause' => 'setHangupcause',
        'uniqueid' => 'setUniqueid',
        'linkedid' => 'setLinkedid',
        'organization' => 'setOrganization',
        'organization_person' => 'setOrganizationPerson',
        'data' => 'setData',
        'sipcallid' => 'setSipcallid',
        'stamp' => 'setStamp',
        'cc_cb' => 'setCcCb',
        'queue' => 'setQueue',
        'note' => 'setNote',
        'categories' => 'setCategories',
        'phone_number' => 'setPhoneNumber',
        'user' => 'setUser',
        'end_time' => 'setEndTime',
        'user_answered' => 'setUserAnswered'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'line' => 'getLine',
        'calldate' => 'getCalldate',
        'clid' => 'getClid',
        'src' => 'getSrc',
        'dst' => 'getDst',
        'duration' => 'getDuration',
        'billsec' => 'getBillsec',
        'disposition' => 'getDisposition',
        'accountcode' => 'getAccountcode',
        'userfield' => 'getUserfield',
        'filename' => 'getFilename',
        'way' => 'getWay',
        'trunk' => 'getTrunk',
        'hangupcause' => 'getHangupcause',
        'uniqueid' => 'getUniqueid',
        'linkedid' => 'getLinkedid',
        'organization' => 'getOrganization',
        'organization_person' => 'getOrganizationPerson',
        'data' => 'getData',
        'sipcallid' => 'getSipcallid',
        'stamp' => 'getStamp',
        'cc_cb' => 'getCcCb',
        'queue' => 'getQueue',
        'note' => 'getNote',
        'categories' => 'getCategories',
        'phone_number' => 'getPhoneNumber',
        'user' => 'getUser',
        'end_time' => 'getEndTime',
        'user_answered' => 'getUserAnswered'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['calldate'] = isset($data['calldate']) ? $data['calldate'] : null;
        $this->container['clid'] = isset($data['clid']) ? $data['clid'] : null;
        $this->container['src'] = isset($data['src']) ? $data['src'] : null;
        $this->container['dst'] = isset($data['dst']) ? $data['dst'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['billsec'] = isset($data['billsec']) ? $data['billsec'] : null;
        $this->container['disposition'] = isset($data['disposition']) ? $data['disposition'] : null;
        $this->container['accountcode'] = isset($data['accountcode']) ? $data['accountcode'] : null;
        $this->container['userfield'] = isset($data['userfield']) ? $data['userfield'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['way'] = isset($data['way']) ? $data['way'] : null;
        $this->container['trunk'] = isset($data['trunk']) ? $data['trunk'] : null;
        $this->container['hangupcause'] = isset($data['hangupcause']) ? $data['hangupcause'] : null;
        $this->container['uniqueid'] = isset($data['uniqueid']) ? $data['uniqueid'] : null;
        $this->container['linkedid'] = isset($data['linkedid']) ? $data['linkedid'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['organization_person'] = isset($data['organization_person']) ? $data['organization_person'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['sipcallid'] = isset($data['sipcallid']) ? $data['sipcallid'] : null;
        $this->container['stamp'] = isset($data['stamp']) ? $data['stamp'] : null;
        $this->container['cc_cb'] = isset($data['cc_cb']) ? $data['cc_cb'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['user_answered'] = isset($data['user_answered']) ? $data['user_answered'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['line'] === null) {
            $invalidProperties[] = "'line' can't be null";
        }
        if ($this->container['calldate'] === null) {
            $invalidProperties[] = "'calldate' can't be null";
        }
        if ($this->container['src'] === null) {
            $invalidProperties[] = "'src' can't be null";
        }
        if ($this->container['dst'] === null) {
            $invalidProperties[] = "'dst' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['billsec'] === null) {
            $invalidProperties[] = "'billsec' can't be null";
        }
        if ($this->container['disposition'] === null) {
            $invalidProperties[] = "'disposition' can't be null";
        }
        if ($this->container['way'] === null) {
            $invalidProperties[] = "'way' can't be null";
        }
        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['stamp'] === null) {
            $invalidProperties[] = "'stamp' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if ($this->container['user_answered'] === null) {
            $invalidProperties[] = "'user_answered' can't be null";
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
     * Gets user_id
     *
     * @return AnyOfModel1UserId
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param AnyOfModel1UserId $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets line
     *
     * @return AnyOfModel1Line
     */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
     * Sets line
     *
     * @param AnyOfModel1Line $line line
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->container['line'] = $line;

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
     * @param \DateTime $calldate calldate
     *
     * @return $this
     */
    public function setCalldate($calldate)
    {
        $this->container['calldate'] = $calldate;

        return $this;
    }

    /**
     * Gets clid
     *
     * @return string
     */
    public function getClid()
    {
        return $this->container['clid'];
    }

    /**
     * Sets clid
     *
     * @param string $clid clid
     *
     * @return $this
     */
    public function setClid($clid)
    {
        $this->container['clid'] = $clid;

        return $this;
    }

    /**
     * Gets src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     *
     * @param string $src src
     *
     * @return $this
     */
    public function setSrc($src)
    {
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets dst
     *
     * @return string
     */
    public function getDst()
    {
        return $this->container['dst'];
    }

    /**
     * Sets dst
     *
     * @param string $dst dst
     *
     * @return $this
     */
    public function setDst($dst)
    {
        $this->container['dst'] = $dst;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets billsec
     *
     * @return float
     */
    public function getBillsec()
    {
        return $this->container['billsec'];
    }

    /**
     * Sets billsec
     *
     * @param float $billsec billsec
     *
     * @return $this
     */
    public function setBillsec($billsec)
    {
        $this->container['billsec'] = $billsec;

        return $this;
    }

    /**
     * Gets disposition
     *
     * @return string
     */
    public function getDisposition()
    {
        return $this->container['disposition'];
    }

    /**
     * Sets disposition
     *
     * @param string $disposition asterisk hangup cause
     *
     * @return $this
     */
    public function setDisposition($disposition)
    {
        $this->container['disposition'] = $disposition;

        return $this;
    }

    /**
     * Gets accountcode
     *
     * @return string
     */
    public function getAccountcode()
    {
        return $this->container['accountcode'];
    }

    /**
     * Sets accountcode
     *
     * @param string $accountcode accountcode
     *
     * @return $this
     */
    public function setAccountcode($accountcode)
    {
        $this->container['accountcode'] = $accountcode;

        return $this;
    }

    /**
     * Gets userfield
     *
     * @return string
     */
    public function getUserfield()
    {
        return $this->container['userfield'];
    }

    /**
     * Sets userfield
     *
     * @param string $userfield custom data
     *
     * @return $this
     */
    public function setUserfield($userfield)
    {
        $this->container['userfield'] = $userfield;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename name of call recording
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets way
     *
     * @return \Voipex\Ipbx\Model\Way
     */
    public function getWay()
    {
        return $this->container['way'];
    }

    /**
     * Sets way
     *
     * @param \Voipex\Ipbx\Model\Way $way way
     *
     * @return $this
     */
    public function setWay($way)
    {
        $this->container['way'] = $way;

        return $this;
    }

    /**
     * Gets trunk
     *
     * @return string
     */
    public function getTrunk()
    {
        return $this->container['trunk'];
    }

    /**
     * Sets trunk
     *
     * @param string $trunk used SIP trunk
     *
     * @return $this
     */
    public function setTrunk($trunk)
    {
        $this->container['trunk'] = $trunk;

        return $this;
    }

    /**
     * Gets hangupcause
     *
     * @return string
     */
    public function getHangupcause()
    {
        return $this->container['hangupcause'];
    }

    /**
     * Sets hangupcause
     *
     * @param string $hangupcause hangupcause
     *
     * @return $this
     */
    public function setHangupcause($hangupcause)
    {
        $this->container['hangupcause'] = $hangupcause;

        return $this;
    }

    /**
     * Gets uniqueid
     *
     * @return string
     */
    public function getUniqueid()
    {
        return $this->container['uniqueid'];
    }

    /**
     * Sets uniqueid
     *
     * @param string $uniqueid uniqueid
     *
     * @return $this
     */
    public function setUniqueid($uniqueid)
    {
        $this->container['uniqueid'] = $uniqueid;

        return $this;
    }

    /**
     * Gets linkedid
     *
     * @return string
     */
    public function getLinkedid()
    {
        return $this->container['linkedid'];
    }

    /**
     * Sets linkedid
     *
     * @param string $linkedid linkedid
     *
     * @return $this
     */
    public function setLinkedid($linkedid)
    {
        $this->container['linkedid'] = $linkedid;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization calling organization from API8
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets organization_person
     *
     * @return string
     */
    public function getOrganizationPerson()
    {
        return $this->container['organization_person'];
    }

    /**
     * Sets organization_person
     *
     * @param string $organization_person organization_person
     *
     * @return $this
     */
    public function setOrganizationPerson($organization_person)
    {
        $this->container['organization_person'] = $organization_person;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data metadata
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets sipcallid
     *
     * @return string
     */
    public function getSipcallid()
    {
        return $this->container['sipcallid'];
    }

    /**
     * Sets sipcallid
     *
     * @param string $sipcallid sipcallid
     *
     * @return $this
     */
    public function setSipcallid($sipcallid)
    {
        $this->container['sipcallid'] = $sipcallid;

        return $this;
    }

    /**
     * Gets stamp
     *
     * @return \DateTime
     */
    public function getStamp()
    {
        return $this->container['stamp'];
    }

    /**
     * Sets stamp
     *
     * @param \DateTime $stamp creation date
     *
     * @return $this
     */
    public function setStamp($stamp)
    {
        $this->container['stamp'] = $stamp;

        return $this;
    }

    /**
     * Gets cc_cb
     *
     * @return float
     */
    public function getCcCb()
    {
        return $this->container['cc_cb'];
    }

    /**
     * Sets cc_cb
     *
     * @param float $cc_cb cc_cb
     *
     * @return $this
     */
    public function setCcCb($cc_cb)
    {
        $this->container['cc_cb'] = $cc_cb;

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
     * @param string $queue outgoing queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Voipex\Ipbx\Model\Categories
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Voipex\Ipbx\Model\Categories $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Selection from src or dst field. If way is incoming then phoneNumber is source number. If way is outgoing then phoneNumber is destination number.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Voipex\Ipbx\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Voipex\Ipbx\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time end_time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets user_answered
     *
     * @return bool
     */
    public function getUserAnswered()
    {
        return $this->container['user_answered'];
    }

    /**
     * Sets user_answered
     *
     * @param bool $user_answered user_answered
     *
     * @return $this
     */
    public function setUserAnswered($user_answered)
    {
        $this->container['user_answered'] = $user_answered;

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
