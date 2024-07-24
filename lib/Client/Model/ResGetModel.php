<?php
/**
 * ResGetModel
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
 * The version of the OpenAPI document: 2.13.0
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
 * ResGetModel Class Doc Comment
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResGetModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResGetModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exports' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResExportOrDefinition>',
        'file' => '\ShapeDiver\GeometryApiV2\Client\Model\ResFile',
        'message' => 'string',
        'model' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModel',
        'outputs' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResOutputOrDefinition>',
        'parameters' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResParameter>',
        'plugins' => '\ShapeDiver\GeometryApiV2\Client\Model\ResPlugins',
        'setting' => '\ShapeDiver\GeometryApiV2\Client\Model\ResSettings',
        'statistic' => '\ShapeDiver\GeometryApiV2\Client\Model\ResStatistic',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exports' => null,
        'file' => null,
        'message' => null,
        'model' => null,
        'outputs' => null,
        'parameters' => null,
        'plugins' => null,
        'setting' => null,
        'statistic' => null,
        'version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'exports' => false,
        'file' => false,
        'message' => false,
        'model' => false,
        'outputs' => false,
        'parameters' => false,
        'plugins' => false,
        'setting' => false,
        'statistic' => false,
        'version' => false
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
        'exports' => 'exports',
        'file' => 'file',
        'message' => 'message',
        'model' => 'model',
        'outputs' => 'outputs',
        'parameters' => 'parameters',
        'plugins' => 'plugins',
        'setting' => 'setting',
        'statistic' => 'statistic',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exports' => 'setExports',
        'file' => 'setFile',
        'message' => 'setMessage',
        'model' => 'setModel',
        'outputs' => 'setOutputs',
        'parameters' => 'setParameters',
        'plugins' => 'setPlugins',
        'setting' => 'setSetting',
        'statistic' => 'setStatistic',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exports' => 'getExports',
        'file' => 'getFile',
        'message' => 'getMessage',
        'model' => 'getModel',
        'outputs' => 'getOutputs',
        'parameters' => 'getParameters',
        'plugins' => 'getPlugins',
        'setting' => 'getSetting',
        'statistic' => 'getStatistic',
        'version' => 'getVersion'
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
        $this->setIfExists('exports', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('outputs', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('plugins', $data ?? [], null);
        $this->setIfExists('setting', $data ?? [], null);
        $this->setIfExists('statistic', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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

        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['setting'] === null) {
            $invalidProperties[] = "'setting' can't be null";
        }
        if ($this->container['statistic'] === null) {
            $invalidProperties[] = "'statistic' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets exports
     *
     * @return array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResExportOrDefinition>|null
     */
    public function getExports()
    {
        return $this->container['exports'];
    }

    /**
     * Sets exports
     *
     * @param array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResExportOrDefinition>|null $exports Exports of the model for the given parameter values. A directory of export-IDs and exports.
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
     * Gets file
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResFile
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResFile $file Links regarding the model file.
     *
     * @return self
     */
    public function setFile($file)
    {
        if (is_null($file)) {
            throw new \InvalidArgumentException('non-nullable file cannot be null');
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Contains urgent information about the system.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModel $model The definitions of a ShapeDiver model.
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            throw new \InvalidArgumentException('non-nullable model cannot be null');
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResOutputOrDefinition>|null
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResOutputOrDefinition>|null $outputs Outputs of the model for the given parameter values. A directory of output-IDs and outputs.
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
     * Gets parameters
     *
     * @return array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResParameter>|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResParameter>|null $parameters Parameter definitions, not contained with every response. A directory of parameter-IDs and parameters.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        if (is_null($parameters)) {
            throw new \InvalidArgumentException('non-nullable parameters cannot be null');
        }
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets plugins
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResPlugins|null
     */
    public function getPlugins()
    {
        return $this->container['plugins'];
    }

    /**
     * Sets plugins
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResPlugins|null $plugins plugins
     *
     * @return self
     */
    public function setPlugins($plugins)
    {
        if (is_null($plugins)) {
            throw new \InvalidArgumentException('non-nullable plugins cannot be null');
        }
        $this->container['plugins'] = $plugins;

        return $this;
    }

    /**
     * Gets setting
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResSettings
     */
    public function getSetting()
    {
        return $this->container['setting'];
    }

    /**
     * Sets setting
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResSettings $setting Various settings.
     *
     * @return self
     */
    public function setSetting($setting)
    {
        if (is_null($setting)) {
            throw new \InvalidArgumentException('non-nullable setting cannot be null');
        }
        $this->container['setting'] = $setting;

        return $this;
    }

    /**
     * Gets statistic
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResStatistic
     */
    public function getStatistic()
    {
        return $this->container['statistic'];
    }

    /**
     * Sets statistic
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResStatistic $statistic Statistics of a model.
     *
     * @return self
     */
    public function setStatistic($statistic)
    {
        if (is_null($statistic)) {
            throw new \InvalidArgumentException('non-nullable statistic cannot be null');
        }
        $this->container['statistic'] = $statistic;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Version of the Geometry Backend API.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

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


