<?php
/**
 * ResOnDurationStatistic
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
 * The version of the OpenAPI document: 1.7.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
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
 * ResOnDurationStatistic Class Doc Comment
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResOnDurationStatistic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResOnDurationStatistic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'count' => 'int',
        'billableCount' => 'int',
        'min' => 'int',
        'max' => 'int',
        'avg' => 'int',
        'sum' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'count' => null,
        'billableCount' => null,
        'min' => null,
        'max' => null,
        'avg' => null,
        'sum' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'count' => false,
        'billableCount' => false,
        'min' => false,
        'max' => false,
        'avg' => false,
        'sum' => false
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
        'count' => 'count',
        'billableCount' => 'billableCount',
        'min' => 'min',
        'max' => 'max',
        'avg' => 'avg',
        'sum' => 'sum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'billableCount' => 'setBillableCount',
        'min' => 'setMin',
        'max' => 'setMax',
        'avg' => 'setAvg',
        'sum' => 'setSum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'billableCount' => 'getBillableCount',
        'min' => 'getMin',
        'max' => 'getMax',
        'avg' => 'getAvg',
        'sum' => 'getSum'
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
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('billableCount', $data ?? [], null);
        $this->setIfExists('min', $data ?? [], null);
        $this->setIfExists('max', $data ?? [], null);
        $this->setIfExists('avg', $data ?? [], null);
        $this->setIfExists('sum', $data ?? [], null);
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

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if (($this->container['count'] < 0)) {
            $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
        }

        if ($this->container['billableCount'] === null) {
            $invalidProperties[] = "'billableCount' can't be null";
        }
        if (($this->container['billableCount'] < 0)) {
            $invalidProperties[] = "invalid value for 'billableCount', must be bigger than or equal to 0.";
        }

        if ($this->container['min'] === null) {
            $invalidProperties[] = "'min' can't be null";
        }
        if (($this->container['min'] < 0)) {
            $invalidProperties[] = "invalid value for 'min', must be bigger than or equal to 0.";
        }

        if ($this->container['max'] === null) {
            $invalidProperties[] = "'max' can't be null";
        }
        if (($this->container['max'] < 0)) {
            $invalidProperties[] = "invalid value for 'max', must be bigger than or equal to 0.";
        }

        if ($this->container['avg'] === null) {
            $invalidProperties[] = "'avg' can't be null";
        }
        if (($this->container['avg'] < 0)) {
            $invalidProperties[] = "invalid value for 'avg', must be bigger than or equal to 0.";
        }

        if ($this->container['sum'] === null) {
            $invalidProperties[] = "'sum' can't be null";
        }
        if (($this->container['sum'] < 0)) {
            $invalidProperties[] = "invalid value for 'sum', must be bigger than or equal to 0.";
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
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count * `duration`, `app`, `embedded`, `backend`, `desktop`: Number of (technical) sessions   from all sources (duration) or from one specific source (app, embedded, backend,   desktop), for the given model and timestamp. * `export`, `customize`: Number of sessions which have export requests.
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }

        if (($count < 0)) {
            throw new \InvalidArgumentException('invalid value for $count when calling ResOnDurationStatistic., must be bigger than or equal to 0.');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets billableCount
     *
     * @return int
     */
    public function getBillableCount()
    {
        return $this->container['billableCount'];
    }

    /**
     * Sets billableCount
     *
     * @param int $billableCount * `duration`, `app`, `embedded`, `backend`, `desktop`: Billable duration-based credit   count for all sessions, based on maximum duration of 10 minutes per credit. * `export`, `customize`: Billable duration-based credit count for sessions which have   export requests, based on maximum duration of 10 minutes per credit.
     *
     * @return self
     */
    public function setBillableCount($billableCount)
    {
        if (is_null($billableCount)) {
            throw new \InvalidArgumentException('non-nullable billableCount cannot be null');
        }

        if (($billableCount < 0)) {
            throw new \InvalidArgumentException('invalid value for $billableCount when calling ResOnDurationStatistic., must be bigger than or equal to 0.');
        }

        $this->container['billableCount'] = $billableCount;

        return $this;
    }

    /**
     * Gets min
     *
     * @return int
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     *
     * @param int $min * `duration`, `app`, `embedded`, `backend`, `desktop`: Cumulative distribution function   of the duration, for all sessions for the given model and timestamp. * `export`, `customize`: Cumulative distribution function of the number of export   requests per session, for sessions which have export requests.
     *
     * @return self
     */
    public function setMin($min)
    {
        if (is_null($min)) {
            throw new \InvalidArgumentException('non-nullable min cannot be null');
        }

        if (($min < 0)) {
            throw new \InvalidArgumentException('invalid value for $min when calling ResOnDurationStatistic., must be bigger than or equal to 0.');
        }

        $this->container['min'] = $min;

        return $this;
    }

    /**
     * Gets max
     *
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param int $max * `duration`, `app`, `embedded`, `backend`, `desktop`: Cumulative distribution function   of the duration, for all sessions for the given model and timestamp. * `export`, `customize`: Cumulative distribution function of the number of export   requests per session, for sessions which have export requests.
     *
     * @return self
     */
    public function setMax($max)
    {
        if (is_null($max)) {
            throw new \InvalidArgumentException('non-nullable max cannot be null');
        }

        if (($max < 0)) {
            throw new \InvalidArgumentException('invalid value for $max when calling ResOnDurationStatistic., must be bigger than or equal to 0.');
        }

        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets avg
     *
     * @return int
     */
    public function getAvg()
    {
        return $this->container['avg'];
    }

    /**
     * Sets avg
     *
     * @param int $avg * `duration`, `app`, `embedded`, `backend`, `desktop`: Average duration of all sessions   for the given model and timestamp. * `export`, `customize`: Average number of export requests per session, for sessions   which have export requests.
     *
     * @return self
     */
    public function setAvg($avg)
    {
        if (is_null($avg)) {
            throw new \InvalidArgumentException('non-nullable avg cannot be null');
        }

        if (($avg < 0)) {
            throw new \InvalidArgumentException('invalid value for $avg when calling ResOnDurationStatistic., must be bigger than or equal to 0.');
        }

        $this->container['avg'] = $avg;

        return $this;
    }

    /**
     * Gets sum
     *
     * @return int
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     * @param int $sum * `duration`, `app`, `embedded`, `backend`, `desktop`: Total duration of all sessions   for the given model and timestamp. * `export`, `customize`: Total number of export requests for all sessions which have   export requests.
     *
     * @return self
     */
    public function setSum($sum)
    {
        if (is_null($sum)) {
            throw new \InvalidArgumentException('non-nullable sum cannot be null');
        }

        if (($sum < 0)) {
            throw new \InvalidArgumentException('invalid value for $sum when calling ResOnDurationStatistic., must be bigger than or equal to 0.');
        }

        $this->container['sum'] = $sum;

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


