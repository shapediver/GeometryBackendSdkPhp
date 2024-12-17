<?php
/**
 * ResModelStatistic
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
 * The version of the OpenAPI document: 1.8.1
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
 * ResModelStatistic Class Doc Comment
 *
 * @category Class
 * @description Aggregated model session statistics.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResModelStatistic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResModelStatistic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'modelid' => 'string',
        'timestamp' => 'string',
        'isCompilationDone' => 'bool',
        'count' => 'int',
        'billableCount' => 'int',
        'duration' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic',
        'app' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic',
        'backend' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic',
        'embedded' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic',
        'desktop' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic',
        'customize' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOnActionStatistic',
        'export' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOnActionStatistic'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'modelid' => 'uuid',
        'timestamp' => null,
        'isCompilationDone' => null,
        'count' => null,
        'billableCount' => null,
        'duration' => null,
        'app' => null,
        'backend' => null,
        'embedded' => null,
        'desktop' => null,
        'customize' => null,
        'export' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'modelid' => false,
        'timestamp' => false,
        'isCompilationDone' => false,
        'count' => false,
        'billableCount' => false,
        'duration' => false,
        'app' => false,
        'backend' => false,
        'embedded' => false,
        'desktop' => false,
        'customize' => false,
        'export' => false
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
        'modelid' => 'modelid',
        'timestamp' => 'timestamp',
        'isCompilationDone' => 'isCompilationDone',
        'count' => 'count',
        'billableCount' => 'billableCount',
        'duration' => 'duration',
        'app' => 'app',
        'backend' => 'backend',
        'embedded' => 'embedded',
        'desktop' => 'desktop',
        'customize' => 'customize',
        'export' => 'export'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modelid' => 'setModelid',
        'timestamp' => 'setTimestamp',
        'isCompilationDone' => 'setIsCompilationDone',
        'count' => 'setCount',
        'billableCount' => 'setBillableCount',
        'duration' => 'setDuration',
        'app' => 'setApp',
        'backend' => 'setBackend',
        'embedded' => 'setEmbedded',
        'desktop' => 'setDesktop',
        'customize' => 'setCustomize',
        'export' => 'setExport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modelid' => 'getModelid',
        'timestamp' => 'getTimestamp',
        'isCompilationDone' => 'getIsCompilationDone',
        'count' => 'getCount',
        'billableCount' => 'getBillableCount',
        'duration' => 'getDuration',
        'app' => 'getApp',
        'backend' => 'getBackend',
        'embedded' => 'getEmbedded',
        'desktop' => 'getDesktop',
        'customize' => 'getCustomize',
        'export' => 'getExport'
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
        $this->setIfExists('modelid', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('isCompilationDone', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('billableCount', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('app', $data ?? [], null);
        $this->setIfExists('backend', $data ?? [], null);
        $this->setIfExists('embedded', $data ?? [], null);
        $this->setIfExists('desktop', $data ?? [], null);
        $this->setIfExists('customize', $data ?? [], null);
        $this->setIfExists('export', $data ?? [], null);
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

        if ($this->container['modelid'] === null) {
            $invalidProperties[] = "'modelid' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['isCompilationDone'] === null) {
            $invalidProperties[] = "'isCompilationDone' can't be null";
        }
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

        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
        if ($this->container['backend'] === null) {
            $invalidProperties[] = "'backend' can't be null";
        }
        if ($this->container['embedded'] === null) {
            $invalidProperties[] = "'embedded' can't be null";
        }
        if ($this->container['desktop'] === null) {
            $invalidProperties[] = "'desktop' can't be null";
        }
        if ($this->container['customize'] === null) {
            $invalidProperties[] = "'customize' can't be null";
        }
        if ($this->container['export'] === null) {
            $invalidProperties[] = "'export' can't be null";
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
     * Gets modelid
     *
     * @return string
     */
    public function getModelid()
    {
        return $this->container['modelid'];
    }

    /**
     * Sets modelid
     *
     * @param string $modelid Requested model ID.
     *
     * @return self
     */
    public function setModelid($modelid)
    {
        if (is_null($modelid)) {
            throw new \InvalidArgumentException('non-nullable modelid cannot be null');
        }
        $this->container['modelid'] = $modelid;

        return $this;
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
     * @param int $count Number of (technical) sessions for the given model and timestamp. A technical session may last up to two hours, after which it will get cancelled by the backend.  CAUTION: Not to be confused with credits!
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }

        if (($count < 0)) {
            throw new \InvalidArgumentException('invalid value for $count when calling ResModelStatistic., must be bigger than or equal to 0.');
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
     * @param int $billableCount Billable duration-based credit count, based on maximum duration of 10 minutes per credit.
     *
     * @return self
     */
    public function setBillableCount($billableCount)
    {
        if (is_null($billableCount)) {
            throw new \InvalidArgumentException('non-nullable billableCount cannot be null');
        }

        if (($billableCount < 0)) {
            throw new \InvalidArgumentException('invalid value for $billableCount when calling ResModelStatistic., must be bigger than or equal to 0.');
        }

        $this->container['billableCount'] = $billableCount;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic $duration Statistics on the duration of all sessions.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets app
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic $app Statistics on the duration of app sessions.
     *
     * @return self
     */
    public function setApp($app)
    {
        if (is_null($app)) {
            throw new \InvalidArgumentException('non-nullable app cannot be null');
        }
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets backend
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic
     */
    public function getBackend()
    {
        return $this->container['backend'];
    }

    /**
     * Sets backend
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic $backend Statistics on the duration of backend sessions.
     *
     * @return self
     */
    public function setBackend($backend)
    {
        if (is_null($backend)) {
            throw new \InvalidArgumentException('non-nullable backend cannot be null');
        }
        $this->container['backend'] = $backend;

        return $this;
    }

    /**
     * Gets embedded
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic $embedded Statistics on the duration of embedded sessions.
     *
     * @return self
     */
    public function setEmbedded($embedded)
    {
        if (is_null($embedded)) {
            throw new \InvalidArgumentException('non-nullable embedded cannot be null');
        }
        $this->container['embedded'] = $embedded;

        return $this;
    }

    /**
     * Gets desktop
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic
     */
    public function getDesktop()
    {
        return $this->container['desktop'];
    }

    /**
     * Sets desktop
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOnDurationStatistic $desktop Statistics on the duration of desktop sessions.
     *
     * @return self
     */
    public function setDesktop($desktop)
    {
        if (is_null($desktop)) {
            throw new \InvalidArgumentException('non-nullable desktop cannot be null');
        }
        $this->container['desktop'] = $desktop;

        return $this;
    }

    /**
     * Gets customize
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOnActionStatistic
     */
    public function getCustomize()
    {
        return $this->container['customize'];
    }

    /**
     * Sets customize
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOnActionStatistic $customize Statistics on customization requests per session.
     *
     * @return self
     */
    public function setCustomize($customize)
    {
        if (is_null($customize)) {
            throw new \InvalidArgumentException('non-nullable customize cannot be null');
        }
        $this->container['customize'] = $customize;

        return $this;
    }

    /**
     * Gets export
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOnActionStatistic
     */
    public function getExport()
    {
        return $this->container['export'];
    }

    /**
     * Sets export
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOnActionStatistic $export Statistics on export requests per session.
     *
     * @return self
     */
    public function setExport($export)
    {
        if (is_null($export)) {
            throw new \InvalidArgumentException('non-nullable export cannot be null');
        }
        $this->container['export'] = $export;

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


