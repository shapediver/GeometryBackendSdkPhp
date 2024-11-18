<?php
/**
 * ResGetSessionDefaults
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
 * ResGetSessionDefaults Class Doc Comment
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResGetSessionDefaults implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResGetSessionDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actions' => '\ShapeDiver\GeometryApiV2\Client\Model\ResAction[]',
        'exports' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResExportOrDefinition>',
        'message' => 'string',
        'model' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModel',
        'outputs' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResOutputOrDefinition>',
        'parameters' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResParameter>',
        'sessionId' => 'string',
        'statistic' => '\ShapeDiver\GeometryApiV2\Client\Model\ResStatistic',
        'templates' => '\ShapeDiver\GeometryApiV2\Client\Model\ResTemplate[]',
        'version' => 'string',
        'viewer' => '\ShapeDiver\GeometryApiV2\Client\Model\ResViewer',
        'viewerSettingsVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actions' => null,
        'exports' => null,
        'message' => null,
        'model' => null,
        'outputs' => null,
        'parameters' => null,
        'sessionId' => 'uuid',
        'statistic' => null,
        'templates' => null,
        'version' => null,
        'viewer' => null,
        'viewerSettingsVersion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'actions' => false,
        'exports' => false,
        'message' => false,
        'model' => false,
        'outputs' => false,
        'parameters' => false,
        'sessionId' => false,
        'statistic' => false,
        'templates' => false,
        'version' => false,
        'viewer' => false,
        'viewerSettingsVersion' => false
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
        'actions' => 'actions',
        'exports' => 'exports',
        'message' => 'message',
        'model' => 'model',
        'outputs' => 'outputs',
        'parameters' => 'parameters',
        'sessionId' => 'sessionId',
        'statistic' => 'statistic',
        'templates' => 'templates',
        'version' => 'version',
        'viewer' => 'viewer',
        'viewerSettingsVersion' => 'viewerSettingsVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actions' => 'setActions',
        'exports' => 'setExports',
        'message' => 'setMessage',
        'model' => 'setModel',
        'outputs' => 'setOutputs',
        'parameters' => 'setParameters',
        'sessionId' => 'setSessionId',
        'statistic' => 'setStatistic',
        'templates' => 'setTemplates',
        'version' => 'setVersion',
        'viewer' => 'setViewer',
        'viewerSettingsVersion' => 'setViewerSettingsVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actions' => 'getActions',
        'exports' => 'getExports',
        'message' => 'getMessage',
        'model' => 'getModel',
        'outputs' => 'getOutputs',
        'parameters' => 'getParameters',
        'sessionId' => 'getSessionId',
        'statistic' => 'getStatistic',
        'templates' => 'getTemplates',
        'version' => 'getVersion',
        'viewer' => 'getViewer',
        'viewerSettingsVersion' => 'getViewerSettingsVersion'
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
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('exports', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('outputs', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('sessionId', $data ?? [], null);
        $this->setIfExists('statistic', $data ?? [], null);
        $this->setIfExists('templates', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('viewer', $data ?? [], null);
        $this->setIfExists('viewerSettingsVersion', $data ?? [], null);
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

        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['statistic'] === null) {
            $invalidProperties[] = "'statistic' can't be null";
        }
        if ($this->container['templates'] === null) {
            $invalidProperties[] = "'templates' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['viewer'] === null) {
            $invalidProperties[] = "'viewer' can't be null";
        }
        if ($this->container['viewerSettingsVersion'] === null) {
            $invalidProperties[] = "'viewerSettingsVersion' can't be null";
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
     * Gets actions
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResAction[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResAction[] $actions Actions the client may take.
     *
     * @return self
     */
    public function setActions($actions)
    {
        if (is_null($actions)) {
            throw new \InvalidArgumentException('non-nullable actions cannot be null');
        }
        $this->container['actions'] = $actions;

        return $this;
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
     * Gets sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string $sessionId The ID of the created session.
     *
     * @return self
     */
    public function setSessionId($sessionId)
    {
        if (is_null($sessionId)) {
            throw new \InvalidArgumentException('non-nullable sessionId cannot be null');
        }
        $this->container['sessionId'] = $sessionId;

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
     * Gets templates
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResTemplate[]
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResTemplate[] $templates Request templates for actions.
     *
     * @return self
     */
    public function setTemplates($templates)
    {
        if (is_null($templates)) {
            throw new \InvalidArgumentException('non-nullable templates cannot be null');
        }
        $this->container['templates'] = $templates;

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
     * Gets viewer
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResViewer
     */
    public function getViewer()
    {
        return $this->container['viewer'];
    }

    /**
     * Sets viewer
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResViewer $viewer Viewer specific data.
     *
     * @return self
     */
    public function setViewer($viewer)
    {
        if (is_null($viewer)) {
            throw new \InvalidArgumentException('non-nullable viewer cannot be null');
        }
        $this->container['viewer'] = $viewer;

        return $this;
    }

    /**
     * Gets viewerSettingsVersion
     *
     * @return string
     */
    public function getViewerSettingsVersion()
    {
        return $this->container['viewerSettingsVersion'];
    }

    /**
     * Sets viewerSettingsVersion
     *
     * @param string $viewerSettingsVersion The current version of the viewer settings.
     *
     * @return self
     */
    public function setViewerSettingsVersion($viewerSettingsVersion)
    {
        if (is_null($viewerSettingsVersion)) {
            throw new \InvalidArgumentException('non-nullable viewerSettingsVersion cannot be null');
        }
        $this->container['viewerSettingsVersion'] = $viewerSettingsVersion;

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


