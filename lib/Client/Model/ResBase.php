<?php
/**
 * ResBase
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
 * ResBase Class Doc Comment
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset' => '\ShapeDiver\GeometryApiV2\Client\Model\ResAsset',
        'list' => '\ShapeDiver\GeometryApiV2\Client\Model\ResList',
        'modelState' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModelStateOrData',
        'system' => '\ShapeDiver\GeometryApiV2\Client\Model\ResSystem',
        'actions' => '\ShapeDiver\GeometryApiV2\Client\Model\ResAction[]',
        'analytics' => '\ShapeDiver\GeometryApiV2\Client\Model\ResAnalytics',
        'authGroup' => 'string',
        'cleanup' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModelCleanupProcess[]',
        'decryptedTicket' => '\ShapeDiver\GeometryApiV2\Client\Model\ResTicket',
        'exports' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResExportOrDefinition>',
        'file' => '\ShapeDiver\GeometryApiV2\Client\Model\ResFile',
        'gltf' => '\ShapeDiver\GeometryApiV2\Client\Model\ResGltfUpload',
        'message' => 'string',
        'model' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModel',
        'computations' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModelComputation[]',
        'outputs' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResOutputOrDefinition>',
        'pagination' => '\ShapeDiver\GeometryApiV2\Client\Model\ResPagination',
        'parameters' => 'array<string,\ShapeDiver\GeometryApiV2\Client\Model\ResParameter>',
        'plugins' => '\ShapeDiver\GeometryApiV2\Client\Model\ResPlugins',
        'sessionId' => 'string',
        'setting' => '\ShapeDiver\GeometryApiV2\Client\Model\ResSettings',
        'statistic' => '\ShapeDiver\GeometryApiV2\Client\Model\ResStatistic',
        'templates' => '\ShapeDiver\GeometryApiV2\Client\Model\ResTemplate[]',
        'ticket' => 'string',
        'version' => 'string',
        'viewer' => '\ShapeDiver\GeometryApiV2\Client\Model\ResViewer',
        'viewerSettingsVersion' => 'string',
        'warnings' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset' => null,
        'list' => null,
        'modelState' => null,
        'system' => null,
        'actions' => null,
        'analytics' => null,
        'authGroup' => 'uuid',
        'cleanup' => null,
        'decryptedTicket' => null,
        'exports' => null,
        'file' => null,
        'gltf' => null,
        'message' => null,
        'model' => null,
        'computations' => null,
        'outputs' => null,
        'pagination' => null,
        'parameters' => null,
        'plugins' => null,
        'sessionId' => 'uuid',
        'setting' => null,
        'statistic' => null,
        'templates' => null,
        'ticket' => null,
        'version' => null,
        'viewer' => null,
        'viewerSettingsVersion' => null,
        'warnings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asset' => false,
        'list' => false,
        'modelState' => false,
        'system' => false,
        'actions' => false,
        'analytics' => false,
        'authGroup' => false,
        'cleanup' => false,
        'decryptedTicket' => false,
        'exports' => false,
        'file' => false,
        'gltf' => false,
        'message' => false,
        'model' => false,
        'computations' => false,
        'outputs' => false,
        'pagination' => false,
        'parameters' => false,
        'plugins' => false,
        'sessionId' => false,
        'setting' => false,
        'statistic' => false,
        'templates' => false,
        'ticket' => false,
        'version' => false,
        'viewer' => false,
        'viewerSettingsVersion' => false,
        'warnings' => false
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
        'asset' => 'asset',
        'list' => 'list',
        'modelState' => 'modelState',
        'system' => 'system',
        'actions' => 'actions',
        'analytics' => 'analytics',
        'authGroup' => 'auth_group',
        'cleanup' => 'cleanup',
        'decryptedTicket' => 'decryptedTicket',
        'exports' => 'exports',
        'file' => 'file',
        'gltf' => 'gltf',
        'message' => 'message',
        'model' => 'model',
        'computations' => 'computations',
        'outputs' => 'outputs',
        'pagination' => 'pagination',
        'parameters' => 'parameters',
        'plugins' => 'plugins',
        'sessionId' => 'sessionId',
        'setting' => 'setting',
        'statistic' => 'statistic',
        'templates' => 'templates',
        'ticket' => 'ticket',
        'version' => 'version',
        'viewer' => 'viewer',
        'viewerSettingsVersion' => 'viewerSettingsVersion',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset' => 'setAsset',
        'list' => 'setList',
        'modelState' => 'setModelState',
        'system' => 'setSystem',
        'actions' => 'setActions',
        'analytics' => 'setAnalytics',
        'authGroup' => 'setAuthGroup',
        'cleanup' => 'setCleanup',
        'decryptedTicket' => 'setDecryptedTicket',
        'exports' => 'setExports',
        'file' => 'setFile',
        'gltf' => 'setGltf',
        'message' => 'setMessage',
        'model' => 'setModel',
        'computations' => 'setComputations',
        'outputs' => 'setOutputs',
        'pagination' => 'setPagination',
        'parameters' => 'setParameters',
        'plugins' => 'setPlugins',
        'sessionId' => 'setSessionId',
        'setting' => 'setSetting',
        'statistic' => 'setStatistic',
        'templates' => 'setTemplates',
        'ticket' => 'setTicket',
        'version' => 'setVersion',
        'viewer' => 'setViewer',
        'viewerSettingsVersion' => 'setViewerSettingsVersion',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset' => 'getAsset',
        'list' => 'getList',
        'modelState' => 'getModelState',
        'system' => 'getSystem',
        'actions' => 'getActions',
        'analytics' => 'getAnalytics',
        'authGroup' => 'getAuthGroup',
        'cleanup' => 'getCleanup',
        'decryptedTicket' => 'getDecryptedTicket',
        'exports' => 'getExports',
        'file' => 'getFile',
        'gltf' => 'getGltf',
        'message' => 'getMessage',
        'model' => 'getModel',
        'computations' => 'getComputations',
        'outputs' => 'getOutputs',
        'pagination' => 'getPagination',
        'parameters' => 'getParameters',
        'plugins' => 'getPlugins',
        'sessionId' => 'getSessionId',
        'setting' => 'getSetting',
        'statistic' => 'getStatistic',
        'templates' => 'getTemplates',
        'ticket' => 'getTicket',
        'version' => 'getVersion',
        'viewer' => 'getViewer',
        'viewerSettingsVersion' => 'getViewerSettingsVersion',
        'warnings' => 'getWarnings'
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
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('list', $data ?? [], null);
        $this->setIfExists('modelState', $data ?? [], null);
        $this->setIfExists('system', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('analytics', $data ?? [], null);
        $this->setIfExists('authGroup', $data ?? [], null);
        $this->setIfExists('cleanup', $data ?? [], null);
        $this->setIfExists('decryptedTicket', $data ?? [], null);
        $this->setIfExists('exports', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('gltf', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('computations', $data ?? [], null);
        $this->setIfExists('outputs', $data ?? [], null);
        $this->setIfExists('pagination', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('plugins', $data ?? [], null);
        $this->setIfExists('sessionId', $data ?? [], null);
        $this->setIfExists('setting', $data ?? [], null);
        $this->setIfExists('statistic', $data ?? [], null);
        $this->setIfExists('templates', $data ?? [], null);
        $this->setIfExists('ticket', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('viewer', $data ?? [], null);
        $this->setIfExists('viewerSettingsVersion', $data ?? [], null);
        $this->setIfExists('warnings', $data ?? [], null);
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
     * Gets asset
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResAsset|null
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResAsset|null $asset asset
     *
     * @return self
     */
    public function setAsset($asset)
    {
        if (is_null($asset)) {
            throw new \InvalidArgumentException('non-nullable asset cannot be null');
        }
        $this->container['asset'] = $asset;

        return $this;
    }

    /**
     * Gets list
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResList|null
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResList|null $list list
     *
     * @return self
     */
    public function setList($list)
    {
        if (is_null($list)) {
            throw new \InvalidArgumentException('non-nullable list cannot be null');
        }
        $this->container['list'] = $list;

        return $this;
    }

    /**
     * Gets modelState
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModelStateOrData|null
     */
    public function getModelState()
    {
        return $this->container['modelState'];
    }

    /**
     * Sets modelState
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModelStateOrData|null $modelState modelState
     *
     * @return self
     */
    public function setModelState($modelState)
    {
        if (is_null($modelState)) {
            throw new \InvalidArgumentException('non-nullable modelState cannot be null');
        }
        $this->container['modelState'] = $modelState;

        return $this;
    }

    /**
     * Gets system
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResSystem|null
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResSystem|null $system system
     *
     * @return self
     */
    public function setSystem($system)
    {
        if (is_null($system)) {
            throw new \InvalidArgumentException('non-nullable system cannot be null');
        }
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResAction[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResAction[]|null $actions Actions the client may take.
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
     * Gets analytics
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResAnalytics|null
     */
    public function getAnalytics()
    {
        return $this->container['analytics'];
    }

    /**
     * Sets analytics
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResAnalytics|null $analytics Statistics of the model for the given timespan.
     *
     * @return self
     */
    public function setAnalytics($analytics)
    {
        if (is_null($analytics)) {
            throw new \InvalidArgumentException('non-nullable analytics cannot be null');
        }
        $this->container['analytics'] = $analytics;

        return $this;
    }

    /**
     * Gets authGroup
     *
     * @return string|null
     */
    public function getAuthGroup()
    {
        return $this->container['authGroup'];
    }

    /**
     * Sets authGroup
     *
     * @param string|null $authGroup The auth-group to use for ticked-based authentication.
     *
     * @return self
     */
    public function setAuthGroup($authGroup)
    {
        if (is_null($authGroup)) {
            throw new \InvalidArgumentException('non-nullable authGroup cannot be null');
        }
        $this->container['authGroup'] = $authGroup;

        return $this;
    }

    /**
     * Gets cleanup
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModelCleanupProcess[]|null
     */
    public function getCleanup()
    {
        return $this->container['cleanup'];
    }

    /**
     * Sets cleanup
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModelCleanupProcess[]|null $cleanup Model cleanup information.
     *
     * @return self
     */
    public function setCleanup($cleanup)
    {
        if (is_null($cleanup)) {
            throw new \InvalidArgumentException('non-nullable cleanup cannot be null');
        }
        $this->container['cleanup'] = $cleanup;

        return $this;
    }

    /**
     * Gets decryptedTicket
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResTicket|null
     */
    public function getDecryptedTicket()
    {
        return $this->container['decryptedTicket'];
    }

    /**
     * Sets decryptedTicket
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResTicket|null $decryptedTicket Decrypted ticket details.
     *
     * @return self
     */
    public function setDecryptedTicket($decryptedTicket)
    {
        if (is_null($decryptedTicket)) {
            throw new \InvalidArgumentException('non-nullable decryptedTicket cannot be null');
        }
        $this->container['decryptedTicket'] = $decryptedTicket;

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
     * Gets file
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResFile|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResFile|null $file Links regarding the model file.
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
     * Gets gltf
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResGltfUpload|null
     */
    public function getGltf()
    {
        return $this->container['gltf'];
    }

    /**
     * Sets gltf
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResGltfUpload|null $gltf glTF information.
     *
     * @return self
     */
    public function setGltf($gltf)
    {
        if (is_null($gltf)) {
            throw new \InvalidArgumentException('non-nullable gltf cannot be null');
        }
        $this->container['gltf'] = $gltf;

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
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModel|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModel|null $model The definitions of a ShapeDiver model.
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
     * Gets computations
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModelComputation[]|null
     */
    public function getComputations()
    {
        return $this->container['computations'];
    }

    /**
     * Sets computations
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModelComputation[]|null $computations Statistics about model computations.
     *
     * @return self
     */
    public function setComputations($computations)
    {
        if (is_null($computations)) {
            throw new \InvalidArgumentException('non-nullable computations cannot be null');
        }
        $this->container['computations'] = $computations;

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
     * Gets pagination
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResPagination|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResPagination|null $pagination Pagination information.
     *
     * @return self
     */
    public function setPagination($pagination)
    {
        if (is_null($pagination)) {
            throw new \InvalidArgumentException('non-nullable pagination cannot be null');
        }
        $this->container['pagination'] = $pagination;

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
     * Gets sessionId
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string|null $sessionId The ID of the created session.
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
     * Gets setting
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResSettings|null
     */
    public function getSetting()
    {
        return $this->container['setting'];
    }

    /**
     * Sets setting
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResSettings|null $setting Various settings.
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
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResStatistic|null
     */
    public function getStatistic()
    {
        return $this->container['statistic'];
    }

    /**
     * Sets statistic
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResStatistic|null $statistic Statistics of a model.
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
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResTemplate[]|null
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResTemplate[]|null $templates Request templates for actions.
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
     * Gets ticket
     *
     * @return string|null
     */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
     * Sets ticket
     *
     * @param string|null $ticket The ticket to create a model session.
     *
     * @return self
     */
    public function setTicket($ticket)
    {
        if (is_null($ticket)) {
            throw new \InvalidArgumentException('non-nullable ticket cannot be null');
        }
        $this->container['ticket'] = $ticket;

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
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResViewer|null
     */
    public function getViewer()
    {
        return $this->container['viewer'];
    }

    /**
     * Sets viewer
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResViewer|null $viewer Viewer specific data.
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
     * @return string|null
     */
    public function getViewerSettingsVersion()
    {
        return $this->container['viewerSettingsVersion'];
    }

    /**
     * Sets viewerSettingsVersion
     *
     * @param string|null $viewerSettingsVersion The current version of the viewer settings.
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
     * Gets warnings
     *
     * @return string[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param string[]|null $warnings An array of warnings encountered during request processing. These warnings indicate potential issues or non-critical conditions but did not prevent the request from being successfully processed.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        if (is_null($warnings)) {
            throw new \InvalidArgumentException('non-nullable warnings cannot be null');
        }
        $this->container['warnings'] = $warnings;

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


