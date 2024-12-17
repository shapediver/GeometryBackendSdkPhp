<?php
/**
 * ResComputeSettings
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
 * ResComputeSettings Class Doc Comment
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResComputeSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResComputeSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'denyScripts' => 'bool',
        'ftype' => 'string',
        'initialWarmup' => 'bool',
        'maxCompTime' => 'int',
        'maxExportSize' => 'int',
        'maxIdleMinutes' => 'int',
        'maxModelSize' => 'int',
        'maxOutputSize' => 'int',
        'maxTextureSize' => 'int',
        'maxWaitTime' => 'int',
        'numLoadedMax' => 'int',
        'numLoadedMin' => 'int',
        'numPreloadedMin' => 'int',
        'sessionRateLimit' => 'int',
        'trust' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'denyScripts' => null,
        'ftype' => null,
        'initialWarmup' => null,
        'maxCompTime' => null,
        'maxExportSize' => null,
        'maxIdleMinutes' => null,
        'maxModelSize' => null,
        'maxOutputSize' => null,
        'maxTextureSize' => null,
        'maxWaitTime' => null,
        'numLoadedMax' => null,
        'numLoadedMin' => null,
        'numPreloadedMin' => null,
        'sessionRateLimit' => null,
        'trust' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'denyScripts' => false,
        'ftype' => false,
        'initialWarmup' => false,
        'maxCompTime' => false,
        'maxExportSize' => false,
        'maxIdleMinutes' => false,
        'maxModelSize' => false,
        'maxOutputSize' => false,
        'maxTextureSize' => false,
        'maxWaitTime' => false,
        'numLoadedMax' => false,
        'numLoadedMin' => false,
        'numPreloadedMin' => false,
        'sessionRateLimit' => false,
        'trust' => false
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
        'denyScripts' => 'deny_scripts',
        'ftype' => 'ftype',
        'initialWarmup' => 'initial_warmup',
        'maxCompTime' => 'max_comp_time',
        'maxExportSize' => 'max_export_size',
        'maxIdleMinutes' => 'max_idle_minutes',
        'maxModelSize' => 'max_model_size',
        'maxOutputSize' => 'max_output_size',
        'maxTextureSize' => 'max_texture_size',
        'maxWaitTime' => 'max_wait_time',
        'numLoadedMax' => 'num_loaded_max',
        'numLoadedMin' => 'num_loaded_min',
        'numPreloadedMin' => 'num_preloaded_min',
        'sessionRateLimit' => 'session_rate_limit',
        'trust' => 'trust'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'denyScripts' => 'setDenyScripts',
        'ftype' => 'setFtype',
        'initialWarmup' => 'setInitialWarmup',
        'maxCompTime' => 'setMaxCompTime',
        'maxExportSize' => 'setMaxExportSize',
        'maxIdleMinutes' => 'setMaxIdleMinutes',
        'maxModelSize' => 'setMaxModelSize',
        'maxOutputSize' => 'setMaxOutputSize',
        'maxTextureSize' => 'setMaxTextureSize',
        'maxWaitTime' => 'setMaxWaitTime',
        'numLoadedMax' => 'setNumLoadedMax',
        'numLoadedMin' => 'setNumLoadedMin',
        'numPreloadedMin' => 'setNumPreloadedMin',
        'sessionRateLimit' => 'setSessionRateLimit',
        'trust' => 'setTrust'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'denyScripts' => 'getDenyScripts',
        'ftype' => 'getFtype',
        'initialWarmup' => 'getInitialWarmup',
        'maxCompTime' => 'getMaxCompTime',
        'maxExportSize' => 'getMaxExportSize',
        'maxIdleMinutes' => 'getMaxIdleMinutes',
        'maxModelSize' => 'getMaxModelSize',
        'maxOutputSize' => 'getMaxOutputSize',
        'maxTextureSize' => 'getMaxTextureSize',
        'maxWaitTime' => 'getMaxWaitTime',
        'numLoadedMax' => 'getNumLoadedMax',
        'numLoadedMin' => 'getNumLoadedMin',
        'numPreloadedMin' => 'getNumPreloadedMin',
        'sessionRateLimit' => 'getSessionRateLimit',
        'trust' => 'getTrust'
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
        $this->setIfExists('denyScripts', $data ?? [], null);
        $this->setIfExists('ftype', $data ?? [], null);
        $this->setIfExists('initialWarmup', $data ?? [], null);
        $this->setIfExists('maxCompTime', $data ?? [], null);
        $this->setIfExists('maxExportSize', $data ?? [], null);
        $this->setIfExists('maxIdleMinutes', $data ?? [], null);
        $this->setIfExists('maxModelSize', $data ?? [], null);
        $this->setIfExists('maxOutputSize', $data ?? [], null);
        $this->setIfExists('maxTextureSize', $data ?? [], null);
        $this->setIfExists('maxWaitTime', $data ?? [], null);
        $this->setIfExists('numLoadedMax', $data ?? [], null);
        $this->setIfExists('numLoadedMin', $data ?? [], null);
        $this->setIfExists('numPreloadedMin', $data ?? [], null);
        $this->setIfExists('sessionRateLimit', $data ?? [], null);
        $this->setIfExists('trust', $data ?? [], null);
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

        if ($this->container['denyScripts'] === null) {
            $invalidProperties[] = "'denyScripts' can't be null";
        }
        if ($this->container['ftype'] === null) {
            $invalidProperties[] = "'ftype' can't be null";
        }
        if ($this->container['initialWarmup'] === null) {
            $invalidProperties[] = "'initialWarmup' can't be null";
        }
        if ($this->container['maxCompTime'] === null) {
            $invalidProperties[] = "'maxCompTime' can't be null";
        }
        if (($this->container['maxCompTime'] < 0)) {
            $invalidProperties[] = "invalid value for 'maxCompTime', must be bigger than or equal to 0.";
        }

        if ($this->container['maxExportSize'] === null) {
            $invalidProperties[] = "'maxExportSize' can't be null";
        }
        if (($this->container['maxExportSize'] < 0)) {
            $invalidProperties[] = "invalid value for 'maxExportSize', must be bigger than or equal to 0.";
        }

        if ($this->container['maxIdleMinutes'] === null) {
            $invalidProperties[] = "'maxIdleMinutes' can't be null";
        }
        if (($this->container['maxIdleMinutes'] < 0)) {
            $invalidProperties[] = "invalid value for 'maxIdleMinutes', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['maxModelSize']) && ($this->container['maxModelSize'] < 0)) {
            $invalidProperties[] = "invalid value for 'maxModelSize', must be bigger than or equal to 0.";
        }

        if ($this->container['maxOutputSize'] === null) {
            $invalidProperties[] = "'maxOutputSize' can't be null";
        }
        if (($this->container['maxOutputSize'] < 0)) {
            $invalidProperties[] = "invalid value for 'maxOutputSize', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['maxTextureSize']) && ($this->container['maxTextureSize'] < 0)) {
            $invalidProperties[] = "invalid value for 'maxTextureSize', must be bigger than or equal to 0.";
        }

        if ($this->container['maxWaitTime'] === null) {
            $invalidProperties[] = "'maxWaitTime' can't be null";
        }
        if (($this->container['maxWaitTime'] < 0)) {
            $invalidProperties[] = "invalid value for 'maxWaitTime', must be bigger than or equal to 0.";
        }

        if ($this->container['numLoadedMax'] === null) {
            $invalidProperties[] = "'numLoadedMax' can't be null";
        }
        if (($this->container['numLoadedMax'] < 0)) {
            $invalidProperties[] = "invalid value for 'numLoadedMax', must be bigger than or equal to 0.";
        }

        if ($this->container['numLoadedMin'] === null) {
            $invalidProperties[] = "'numLoadedMin' can't be null";
        }
        if (($this->container['numLoadedMin'] < 0)) {
            $invalidProperties[] = "invalid value for 'numLoadedMin', must be bigger than or equal to 0.";
        }

        if ($this->container['numPreloadedMin'] === null) {
            $invalidProperties[] = "'numPreloadedMin' can't be null";
        }
        if (($this->container['numPreloadedMin'] < 0)) {
            $invalidProperties[] = "invalid value for 'numPreloadedMin', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sessionRateLimit']) && ($this->container['sessionRateLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'sessionRateLimit', must be bigger than or equal to 0.";
        }

        if ($this->container['trust'] === null) {
            $invalidProperties[] = "'trust' can't be null";
        }
        if (!preg_match("/^(none|full)?$/", $this->container['trust'])) {
            $invalidProperties[] = "invalid value for 'trust', must be conform to the pattern /^(none|full)?$/.";
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
     * Gets denyScripts
     *
     * @return bool
     */
    public function getDenyScripts()
    {
        return $this->container['denyScripts'];
    }

    /**
     * Sets denyScripts
     *
     * @param bool $denyScripts Allows to control whether the model's Grasshopper file can contain scripts.
     *
     * @return self
     */
    public function setDenyScripts($denyScripts)
    {
        if (is_null($denyScripts)) {
            throw new \InvalidArgumentException('non-nullable denyScripts cannot be null');
        }
        $this->container['denyScripts'] = $denyScripts;

        return $this;
    }

    /**
     * Gets ftype
     *
     * @return string
     */
    public function getFtype()
    {
        return $this->container['ftype'];
    }

    /**
     * Sets ftype
     *
     * @param string $ftype File type of the model.
     *
     * @return self
     */
    public function setFtype($ftype)
    {
        if (is_null($ftype)) {
            throw new \InvalidArgumentException('non-nullable ftype cannot be null');
        }
        $this->container['ftype'] = $ftype;

        return $this;
    }

    /**
     * Gets initialWarmup
     *
     * @return bool
     */
    public function getInitialWarmup()
    {
        return $this->container['initialWarmup'];
    }

    /**
     * Sets initialWarmup
     *
     * @param bool $initialWarmup Allows to control whether the model should be warmed up immediately after loading by running a computation. This increases the likelihood of following computation requests to be faster.
     *
     * @return self
     */
    public function setInitialWarmup($initialWarmup)
    {
        if (is_null($initialWarmup)) {
            throw new \InvalidArgumentException('non-nullable initialWarmup cannot be null');
        }
        $this->container['initialWarmup'] = $initialWarmup;

        return $this;
    }

    /**
     * Gets maxCompTime
     *
     * @return int
     */
    public function getMaxCompTime()
    {
        return $this->container['maxCompTime'];
    }

    /**
     * Sets maxCompTime
     *
     * @param int $maxCompTime Maximum number of milliseconds allowed for computations of this model.
     *
     * @return self
     */
    public function setMaxCompTime($maxCompTime)
    {
        if (is_null($maxCompTime)) {
            throw new \InvalidArgumentException('non-nullable maxCompTime cannot be null');
        }

        if (($maxCompTime < 0)) {
            throw new \InvalidArgumentException('invalid value for $maxCompTime when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['maxCompTime'] = $maxCompTime;

        return $this;
    }

    /**
     * Gets maxExportSize
     *
     * @return int
     */
    public function getMaxExportSize()
    {
        return $this->container['maxExportSize'];
    }

    /**
     * Sets maxExportSize
     *
     * @param int $maxExportSize Maximum number of bytes allowed to be exported from a model for a specific set of parameter values.
     *
     * @return self
     */
    public function setMaxExportSize($maxExportSize)
    {
        if (is_null($maxExportSize)) {
            throw new \InvalidArgumentException('non-nullable maxExportSize cannot be null');
        }

        if (($maxExportSize < 0)) {
            throw new \InvalidArgumentException('invalid value for $maxExportSize when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['maxExportSize'] = $maxExportSize;

        return $this;
    }

    /**
     * Gets maxIdleMinutes
     *
     * @return int
     */
    public function getMaxIdleMinutes()
    {
        return $this->container['maxIdleMinutes'];
    }

    /**
     * Sets maxIdleMinutes
     *
     * @param int $maxIdleMinutes Maximum amount of minutes a loaded model may be unused before it gets unloaded.  Note: Models may get unloaded earlier than that.
     *
     * @return self
     */
    public function setMaxIdleMinutes($maxIdleMinutes)
    {
        if (is_null($maxIdleMinutes)) {
            throw new \InvalidArgumentException('non-nullable maxIdleMinutes cannot be null');
        }

        if (($maxIdleMinutes < 0)) {
            throw new \InvalidArgumentException('invalid value for $maxIdleMinutes when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['maxIdleMinutes'] = $maxIdleMinutes;

        return $this;
    }

    /**
     * Gets maxModelSize
     *
     * @return int|null
     */
    public function getMaxModelSize()
    {
        return $this->container['maxModelSize'];
    }

    /**
     * Sets maxModelSize
     *
     * @param int|null $maxModelSize Maximum number of bytes allowed for the model's Grasshopper file size.
     *
     * @return self
     */
    public function setMaxModelSize($maxModelSize)
    {
        if (is_null($maxModelSize)) {
            throw new \InvalidArgumentException('non-nullable maxModelSize cannot be null');
        }

        if (($maxModelSize < 0)) {
            throw new \InvalidArgumentException('invalid value for $maxModelSize when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['maxModelSize'] = $maxModelSize;

        return $this;
    }

    /**
     * Gets maxOutputSize
     *
     * @return int
     */
    public function getMaxOutputSize()
    {
        return $this->container['maxOutputSize'];
    }

    /**
     * Sets maxOutputSize
     *
     * @param int $maxOutputSize Maximum number of bytes allowed for an output of a model for a specific set of parameter values.
     *
     * @return self
     */
    public function setMaxOutputSize($maxOutputSize)
    {
        if (is_null($maxOutputSize)) {
            throw new \InvalidArgumentException('non-nullable maxOutputSize cannot be null');
        }

        if (($maxOutputSize < 0)) {
            throw new \InvalidArgumentException('invalid value for $maxOutputSize when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['maxOutputSize'] = $maxOutputSize;

        return $this;
    }

    /**
     * Gets maxTextureSize
     *
     * @return int|null
     */
    public function getMaxTextureSize()
    {
        return $this->container['maxTextureSize'];
    }

    /**
     * Sets maxTextureSize
     *
     * @param int|null $maxTextureSize Maximum number of bytes allowed for a single texture.
     *
     * @return self
     */
    public function setMaxTextureSize($maxTextureSize)
    {
        if (is_null($maxTextureSize)) {
            throw new \InvalidArgumentException('non-nullable maxTextureSize cannot be null');
        }

        if (($maxTextureSize < 0)) {
            throw new \InvalidArgumentException('invalid value for $maxTextureSize when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['maxTextureSize'] = $maxTextureSize;

        return $this;
    }

    /**
     * Gets maxWaitTime
     *
     * @return int
     */
    public function getMaxWaitTime()
    {
        return $this->container['maxWaitTime'];
    }

    /**
     * Sets maxWaitTime
     *
     * @param int $maxWaitTime Maximum time a computation request may stay waiting before a further worker goes ahead regardless of whether it already has the model loaded, and regardless of `num_loaded_max`. This allows to configure a soft or a hard upper boundary for the number of loaded models.
     *
     * @return self
     */
    public function setMaxWaitTime($maxWaitTime)
    {
        if (is_null($maxWaitTime)) {
            throw new \InvalidArgumentException('non-nullable maxWaitTime cannot be null');
        }

        if (($maxWaitTime < 0)) {
            throw new \InvalidArgumentException('invalid value for $maxWaitTime when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['maxWaitTime'] = $maxWaitTime;

        return $this;
    }

    /**
     * Gets numLoadedMax
     *
     * @return int
     */
    public function getNumLoadedMax()
    {
        return $this->container['numLoadedMax'];
    }

    /**
     * Sets numLoadedMax
     *
     * @param int $numLoadedMax Maximum number of workers that should have the model loaded at the same time.
     *
     * @return self
     */
    public function setNumLoadedMax($numLoadedMax)
    {
        if (is_null($numLoadedMax)) {
            throw new \InvalidArgumentException('non-nullable numLoadedMax cannot be null');
        }

        if (($numLoadedMax < 0)) {
            throw new \InvalidArgumentException('invalid value for $numLoadedMax when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['numLoadedMax'] = $numLoadedMax;

        return $this;
    }

    /**
     * Gets numLoadedMin
     *
     * @return int
     */
    public function getNumLoadedMin()
    {
        return $this->container['numLoadedMin'];
    }

    /**
     * Sets numLoadedMin
     *
     * @param int $numLoadedMin Minimum number of workers that should load the model and keep it open while there is session activity.
     *
     * @return self
     */
    public function setNumLoadedMin($numLoadedMin)
    {
        if (is_null($numLoadedMin)) {
            throw new \InvalidArgumentException('non-nullable numLoadedMin cannot be null');
        }

        if (($numLoadedMin < 0)) {
            throw new \InvalidArgumentException('invalid value for $numLoadedMin when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['numLoadedMin'] = $numLoadedMin;

        return $this;
    }

    /**
     * Gets numPreloadedMin
     *
     * @return int
     */
    public function getNumPreloadedMin()
    {
        return $this->container['numPreloadedMin'];
    }

    /**
     * Sets numPreloadedMin
     *
     * @param int $numPreloadedMin Minimum number of workers that should always have the model loaded, regardless of session activity. This allows to minimise the likelihood of computation requests being slower due to model loading.
     *
     * @return self
     */
    public function setNumPreloadedMin($numPreloadedMin)
    {
        if (is_null($numPreloadedMin)) {
            throw new \InvalidArgumentException('non-nullable numPreloadedMin cannot be null');
        }

        if (($numPreloadedMin < 0)) {
            throw new \InvalidArgumentException('invalid value for $numPreloadedMin when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['numPreloadedMin'] = $numPreloadedMin;

        return $this;
    }

    /**
     * Gets sessionRateLimit
     *
     * @return int|null
     */
    public function getSessionRateLimit()
    {
        return $this->container['sessionRateLimit'];
    }

    /**
     * Sets sessionRateLimit
     *
     * @param int|null $sessionRateLimit Limits the number of sessions that can be created by a specific IP address in one hour.
     *
     * @return self
     */
    public function setSessionRateLimit($sessionRateLimit)
    {
        if (is_null($sessionRateLimit)) {
            throw new \InvalidArgumentException('non-nullable sessionRateLimit cannot be null');
        }

        if (($sessionRateLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $sessionRateLimit when calling ResComputeSettings., must be bigger than or equal to 0.');
        }

        $this->container['sessionRateLimit'] = $sessionRateLimit;

        return $this;
    }

    /**
     * Gets trust
     *
     * @return string
     */
    public function getTrust()
    {
        return $this->container['trust'];
    }

    /**
     * Sets trust
     *
     * @param string $trust Controls whether failed computations will be retried.
     *
     * @return self
     */
    public function setTrust($trust)
    {
        if (is_null($trust)) {
            throw new \InvalidArgumentException('non-nullable trust cannot be null');
        }

        if ((!preg_match("/^(none|full)?$/", ObjectSerializer::toString($trust)))) {
            throw new \InvalidArgumentException("invalid value for \$trust when calling ResComputeSettings., must conform to the pattern /^(none|full)?$/.");
        }

        $this->container['trust'] = $trust;

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


