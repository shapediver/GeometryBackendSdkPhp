<?php
/**
 * ResUserCreditMetric
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
 * ResUserCreditMetric Class Doc Comment
 *
 * @category Class
 * @description Aggregated credit metrics for a user.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResUserCreditMetric implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResUserCreditMetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timestamp' => 'string',
        'isCompilationDone' => 'bool',
        'ar' => '\ShapeDiver\GeometryApiV2\Client\Model\ResArCreditMetric',
        'loading' => '\ShapeDiver\GeometryApiV2\Client\Model\ResLoadingCreditMetric',
        'limited' => '\ShapeDiver\GeometryApiV2\Client\Model\ResLimitedCreditMetric',
        'default' => '\ShapeDiver\GeometryApiV2\Client\Model\ResDefaultCreditMetric',
        'modelId' => 'bool',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timestamp' => null,
        'isCompilationDone' => null,
        'ar' => null,
        'loading' => null,
        'limited' => null,
        'default' => null,
        'modelId' => null,
        'userId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'timestamp' => false,
        'isCompilationDone' => false,
        'ar' => false,
        'loading' => false,
        'limited' => false,
        'default' => false,
        'modelId' => true,
        'userId' => false
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
        'timestamp' => 'timestamp',
        'isCompilationDone' => 'isCompilationDone',
        'ar' => 'ar',
        'loading' => 'loading',
        'limited' => 'limited',
        'default' => 'default',
        'modelId' => 'modelId',
        'userId' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'isCompilationDone' => 'setIsCompilationDone',
        'ar' => 'setAr',
        'loading' => 'setLoading',
        'limited' => 'setLimited',
        'default' => 'setDefault',
        'modelId' => 'setModelId',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'isCompilationDone' => 'getIsCompilationDone',
        'ar' => 'getAr',
        'loading' => 'getLoading',
        'limited' => 'getLimited',
        'default' => 'getDefault',
        'modelId' => 'getModelId',
        'userId' => 'getUserId'
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
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('isCompilationDone', $data ?? [], null);
        $this->setIfExists('ar', $data ?? [], null);
        $this->setIfExists('loading', $data ?? [], null);
        $this->setIfExists('limited', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('modelId', $data ?? [], null);
        $this->setIfExists('userId', $data ?? [], null);
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

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['isCompilationDone'] === null) {
            $invalidProperties[] = "'isCompilationDone' can't be null";
        }
        if ($this->container['ar'] === null) {
            $invalidProperties[] = "'ar' can't be null";
        }
        if ($this->container['loading'] === null) {
            $invalidProperties[] = "'loading' can't be null";
        }
        if ($this->container['limited'] === null) {
            $invalidProperties[] = "'limited' can't be null";
        }
        if ($this->container['default'] === null) {
            $invalidProperties[] = "'default' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
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
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp Either an extended date-time or a 'merged'-specifier.
     *
     * @return self
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
     * Gets isCompilationDone
     *
     * @return bool
     */
    public function getIsCompilationDone()
    {
        return $this->container['isCompilationDone'];
    }

    /**
     * Sets isCompilationDone
     *
     * @param bool $isCompilationDone Aggregation for this timestamp has finished.
     *
     * @return self
     */
    public function setIsCompilationDone($isCompilationDone)
    {
        if (is_null($isCompilationDone)) {
            throw new \InvalidArgumentException('non-nullable isCompilationDone cannot be null');
        }
        $this->container['isCompilationDone'] = $isCompilationDone;

        return $this;
    }

    /**
     * Gets ar
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResArCreditMetric
     */
    public function getAr()
    {
        return $this->container['ar'];
    }

    /**
     * Sets ar
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResArCreditMetric $ar ar
     *
     * @return self
     */
    public function setAr($ar)
    {
        if (is_null($ar)) {
            throw new \InvalidArgumentException('non-nullable ar cannot be null');
        }
        $this->container['ar'] = $ar;

        return $this;
    }

    /**
     * Gets loading
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResLoadingCreditMetric
     */
    public function getLoading()
    {
        return $this->container['loading'];
    }

    /**
     * Sets loading
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResLoadingCreditMetric $loading loading
     *
     * @return self
     */
    public function setLoading($loading)
    {
        if (is_null($loading)) {
            throw new \InvalidArgumentException('non-nullable loading cannot be null');
        }
        $this->container['loading'] = $loading;

        return $this;
    }

    /**
     * Gets limited
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResLimitedCreditMetric
     */
    public function getLimited()
    {
        return $this->container['limited'];
    }

    /**
     * Sets limited
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResLimitedCreditMetric $limited limited
     *
     * @return self
     */
    public function setLimited($limited)
    {
        if (is_null($limited)) {
            throw new \InvalidArgumentException('non-nullable limited cannot be null');
        }
        $this->container['limited'] = $limited;

        return $this;
    }

    /**
     * Gets default
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResDefaultCreditMetric
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResDefaultCreditMetric $default default
     *
     * @return self
     */
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets modelId
     *
     * @return bool|null
     * @deprecated
     */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
     * Sets modelId
     *
     * @param bool|null $modelId This property is never set.
     *
     * @return self
     * @deprecated
     */
    public function setModelId($modelId)
    {
        if (is_null($modelId)) {
            array_push($this->openAPINullablesSetToNull, 'modelId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('modelId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['modelId'] = $modelId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string $userId Requested user ID.
     *
     * @return self
     */
    public function setUserId($userId)
    {
        if (is_null($userId)) {
            throw new \InvalidArgumentException('non-nullable userId cannot be null');
        }
        $this->container['userId'] = $userId;

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


