<?php
/**
 * ResModelComputation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Geometry Backend API v2
 *
 * The ShapeDiver Geometry Backend system is used to: * host Grasshopper models in a secure, reliable, scalable, and performant way, * run computations of Grasshopper models, * and cache and output the results of computations and exports.
 *
 * The version of the OpenAPI document: 1.8.2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ShapeDiver\GeometryApiV2\Client\Model;

use \ArrayAccess;
use \ShapeDiver\GeometryApiV2\Client\ObjectSerializer;

/**
 * ResModelComputation Class Doc Comment
 *
 * @category Class
 * @description Components of a model computation request.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResModelComputation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResModelComputation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'timestamp' => 'int',
        'timestampStr' => 'string',
        'computeRequestId' => 'string',
        'exports' => 'array<string,string>',
        'outputs' => 'array<string,string>',
        'params' => 'object',
        'stats' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModelComputationStats',
        'status' => '\ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus',
        'timestampFin' => 'string',
        'timestampReq' => 'string',
        'timestampReqIso' => 'string',
        'timestampResp' => 'string',
        'msg' => 'string',
        'limit' => '\ShapeDiver\GeometryApiV2\Client\Model\ResComputationLimits',
        'credits' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'timestamp' => null,
        'timestampStr' => null,
        'computeRequestId' => null,
        'exports' => null,
        'outputs' => null,
        'params' => null,
        'stats' => null,
        'status' => null,
        'timestampFin' => null,
        'timestampReq' => null,
        'timestampReqIso' => null,
        'timestampResp' => null,
        'msg' => null,
        'limit' => null,
        'credits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'timestamp' => false,
        'timestampStr' => false,
        'computeRequestId' => false,
        'exports' => false,
        'outputs' => false,
        'params' => false,
        'stats' => false,
        'status' => false,
        'timestampFin' => false,
        'timestampReq' => false,
        'timestampReqIso' => false,
        'timestampResp' => false,
        'msg' => false,
        'limit' => false,
        'credits' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'timestamp' => 'timestamp',
        'timestampStr' => 'timestamp_str',
        'computeRequestId' => 'compute_request_id',
        'exports' => 'exports',
        'outputs' => 'outputs',
        'params' => 'params',
        'stats' => 'stats',
        'status' => 'status',
        'timestampFin' => 'timestamp_fin',
        'timestampReq' => 'timestamp_req',
        'timestampReqIso' => 'timestamp_req_iso',
        'timestampResp' => 'timestamp_resp',
        'msg' => 'msg',
        'limit' => 'limit',
        'credits' => 'credits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'timestampStr' => 'setTimestampStr',
        'computeRequestId' => 'setComputeRequestId',
        'exports' => 'setExports',
        'outputs' => 'setOutputs',
        'params' => 'setParams',
        'stats' => 'setStats',
        'status' => 'setStatus',
        'timestampFin' => 'setTimestampFin',
        'timestampReq' => 'setTimestampReq',
        'timestampReqIso' => 'setTimestampReqIso',
        'timestampResp' => 'setTimestampResp',
        'msg' => 'setMsg',
        'limit' => 'setLimit',
        'credits' => 'setCredits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'timestampStr' => 'getTimestampStr',
        'computeRequestId' => 'getComputeRequestId',
        'exports' => 'getExports',
        'outputs' => 'getOutputs',
        'params' => 'getParams',
        'stats' => 'getStats',
        'status' => 'getStatus',
        'timestampFin' => 'getTimestampFin',
        'timestampReq' => 'getTimestampReq',
        'timestampReqIso' => 'getTimestampReqIso',
        'timestampResp' => 'getTimestampResp',
        'msg' => 'getMsg',
        'limit' => 'getLimit',
        'credits' => 'getCredits'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('timestampStr', $data ?? [], null);
        $this->setIfExists('computeRequestId', $data ?? [], null);
        $this->setIfExists('exports', $data ?? [], null);
        $this->setIfExists('outputs', $data ?? [], null);
        $this->setIfExists('params', $data ?? [], null);
        $this->setIfExists('stats', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('timestampFin', $data ?? [], null);
        $this->setIfExists('timestampReq', $data ?? [], null);
        $this->setIfExists('timestampReqIso', $data ?? [], null);
        $this->setIfExists('timestampResp', $data ?? [], null);
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('credits', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['timestampStr'] === null) {
            $invalidProperties[] = "'timestampStr' can't be null";
        }
        if (!preg_match("/^\\d{17}$/", $this->container['timestampStr'])) {
            $invalidProperties[] = "invalid value for 'timestampStr', must be conform to the pattern /^\\d{17}$/.";
        }

        if ($this->container['computeRequestId'] === null) {
            $invalidProperties[] = "'computeRequestId' can't be null";
        }
        if ($this->container['exports'] === null) {
            $invalidProperties[] = "'exports' can't be null";
        }
        if ($this->container['outputs'] === null) {
            $invalidProperties[] = "'outputs' can't be null";
        }
        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }
        if ($this->container['stats'] === null) {
            $invalidProperties[] = "'stats' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['timestampFin'] === null) {
            $invalidProperties[] = "'timestampFin' can't be null";
        }
        if (!preg_match("/^\\d{17}$/", $this->container['timestampFin'])) {
            $invalidProperties[] = "invalid value for 'timestampFin', must be conform to the pattern /^\\d{17}$/.";
        }

        if ($this->container['timestampReq'] === null) {
            $invalidProperties[] = "'timestampReq' can't be null";
        }
        if (!preg_match("/^\\d{13}$/", $this->container['timestampReq'])) {
            $invalidProperties[] = "invalid value for 'timestampReq', must be conform to the pattern /^\\d{13}$/.";
        }

        if ($this->container['timestampReqIso'] === null) {
            $invalidProperties[] = "'timestampReqIso' can't be null";
        }
        if (!preg_match("/^\\d{17}$/", $this->container['timestampReqIso'])) {
            $invalidProperties[] = "invalid value for 'timestampReqIso', must be conform to the pattern /^\\d{17}$/.";
        }

        if ($this->container['timestampResp'] === null) {
            $invalidProperties[] = "'timestampResp' can't be null";
        }
        if (!preg_match("/^\\d{17}$/", $this->container['timestampResp'])) {
            $invalidProperties[] = "invalid value for 'timestampResp', must be conform to the pattern /^\\d{17}$/.";
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
     * @param string $id ID of the model.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     * @deprecated
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Numeric timestamp in format `YYYYMMDDHHMMSSMMM`.  Deprecated: Use `timestamp_str` instead.
     *
     * @return self
     * @deprecated
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets timestampStr
     *
     * @return string
     */
    public function getTimestampStr()
    {
        return $this->container['timestampStr'];
    }

    /**
     * Sets timestampStr
     *
     * @param string $timestampStr Timestamp.
     *
     * @return self
     */
    public function setTimestampStr($timestampStr)
    {
        if (is_null($timestampStr)) {
            throw new \InvalidArgumentException('non-nullable timestampStr cannot be null');
        }

        if ((!preg_match("/^\\d{17}$/", ObjectSerializer::toString($timestampStr)))) {
            throw new \InvalidArgumentException("invalid value for \$timestampStr when calling ResModelComputation., must conform to the pattern /^\\d{17}$/.");
        }

        $this->container['timestampStr'] = $timestampStr;

        return $this;
    }

    /**
     * Gets computeRequestId
     *
     * @return string
     */
    public function getComputeRequestId()
    {
        return $this->container['computeRequestId'];
    }

    /**
     * Sets computeRequestId
     *
     * @param string $computeRequestId The ID of the compute request that was processed.
     *
     * @return self
     */
    public function setComputeRequestId($computeRequestId)
    {
        if (is_null($computeRequestId)) {
            throw new \InvalidArgumentException('non-nullable computeRequestId cannot be null');
        }
        $this->container['computeRequestId'] = $computeRequestId;

        return $this;
    }

    /**
     * Gets exports
     *
     * @return array<string,string>
     */
    public function getExports()
    {
        return $this->container['exports'];
    }

    /**
     * Sets exports
     *
     * @param array<string,string> $exports Requested export versions.
     *
     * @return self
     */
    public function setExports($exports)
    {
        if (is_null($exports)) {
            throw new \InvalidArgumentException('non-nullable exports cannot be null');
        }
        $this->container['exports'] = $exports;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return array<string,string>
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param array<string,string> $outputs Requested output versions.
     *
     * @return self
     */
    public function setOutputs($outputs)
    {
        if (is_null($outputs)) {
            throw new \InvalidArgumentException('non-nullable outputs cannot be null');
        }
        $this->container['outputs'] = $outputs;

        return $this;
    }

    /**
     * Gets params
     *
     * @return object
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param object $params Parameter values.
     *
     * @return self
     */
    public function setParams($params)
    {
        if (is_null($params)) {
            throw new \InvalidArgumentException('non-nullable params cannot be null');
        }
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModelComputationStats
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModelComputationStats $stats The stats of the computation request.
     *
     * @return self
     */
    public function setStats($stats)
    {
        if (is_null($stats)) {
            throw new \InvalidArgumentException('non-nullable stats cannot be null');
        }
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus $status Result of processing request.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets timestampFin
     *
     * @return string
     */
    public function getTimestampFin()
    {
        return $this->container['timestampFin'];
    }

    /**
     * Sets timestampFin
     *
     * @param string $timestampFin Timestamp when the computation request was finished.
     *
     * @return self
     */
    public function setTimestampFin($timestampFin)
    {
        if (is_null($timestampFin)) {
            throw new \InvalidArgumentException('non-nullable timestampFin cannot be null');
        }

        if ((!preg_match("/^\\d{17}$/", ObjectSerializer::toString($timestampFin)))) {
            throw new \InvalidArgumentException("invalid value for \$timestampFin when calling ResModelComputation., must conform to the pattern /^\\d{17}$/.");
        }

        $this->container['timestampFin'] = $timestampFin;

        return $this;
    }

    /**
     * Gets timestampReq
     *
     * @return string
     */
    public function getTimestampReq()
    {
        return $this->container['timestampReq'];
    }

    /**
     * Sets timestampReq
     *
     * @param string $timestampReq Timestamp when the work request was filed.
     *
     * @return self
     */
    public function setTimestampReq($timestampReq)
    {
        if (is_null($timestampReq)) {
            throw new \InvalidArgumentException('non-nullable timestampReq cannot be null');
        }

        if ((!preg_match("/^\\d{13}$/", ObjectSerializer::toString($timestampReq)))) {
            throw new \InvalidArgumentException("invalid value for \$timestampReq when calling ResModelComputation., must conform to the pattern /^\\d{13}$/.");
        }

        $this->container['timestampReq'] = $timestampReq;

        return $this;
    }

    /**
     * Gets timestampReqIso
     *
     * @return string
     */
    public function getTimestampReqIso()
    {
        return $this->container['timestampReqIso'];
    }

    /**
     * Sets timestampReqIso
     *
     * @param string $timestampReqIso Timestamp when the computation request was filed.
     *
     * @return self
     */
    public function setTimestampReqIso($timestampReqIso)
    {
        if (is_null($timestampReqIso)) {
            throw new \InvalidArgumentException('non-nullable timestampReqIso cannot be null');
        }

        if ((!preg_match("/^\\d{17}$/", ObjectSerializer::toString($timestampReqIso)))) {
            throw new \InvalidArgumentException("invalid value for \$timestampReqIso when calling ResModelComputation., must conform to the pattern /^\\d{17}$/.");
        }

        $this->container['timestampReqIso'] = $timestampReqIso;

        return $this;
    }

    /**
     * Gets timestampResp
     *
     * @return string
     */
    public function getTimestampResp()
    {
        return $this->container['timestampResp'];
    }

    /**
     * Sets timestampResp
     *
     * @param string $timestampResp Timestamp when the computation request was picked up.
     *
     * @return self
     */
    public function setTimestampResp($timestampResp)
    {
        if (is_null($timestampResp)) {
            throw new \InvalidArgumentException('non-nullable timestampResp cannot be null');
        }

        if ((!preg_match("/^\\d{17}$/", ObjectSerializer::toString($timestampResp)))) {
            throw new \InvalidArgumentException("invalid value for \$timestampResp when calling ResModelComputation., must conform to the pattern /^\\d{17}$/.");
        }

        $this->container['timestampResp'] = $timestampResp;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string|null
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg Message containing information about the computation process.
     *
     * @return self
     */
    public function setMsg($msg)
    {
        if (is_null($msg)) {
            throw new \InvalidArgumentException('non-nullable msg cannot be null');
        }
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResComputationLimits|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResComputationLimits|null $limit Model's limits at the time of the computation process.
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return float|null
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param float|null $credits The number of credits that are charged for this computation.
     *
     * @return self
     */
    public function setCredits($credits)
    {
        if (is_null($credits)) {
            throw new \InvalidArgumentException('non-nullable credits cannot be null');
        }
        $this->container['credits'] = $credits;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


