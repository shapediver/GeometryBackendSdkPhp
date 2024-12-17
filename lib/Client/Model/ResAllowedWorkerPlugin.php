<?php
/**
 * ResAllowedWorkerPlugin
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
 * ResAllowedWorkerPlugin Class Doc Comment
 *
 * @category Class
 * @description Contains the model checking configuration for the Grasshopper plugins.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResAllowedWorkerPlugin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResAllowedWorkerPlugin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'minVersion' => 'string',
        'maxVersion' => 'string',
        'authorName' => 'string',
        'description' => 'string',
        'href' => 'string',
        'allowFallbackToAssemblyVersion' => 'bool',
        'checkMajorMinorVersionOnly' => 'bool',
        'checkIfInstalled' => 'bool',
        'previousIds' => 'string[]',
        'allowedComponents' => '\ShapeDiver\GeometryApiV2\Client\Model\ResWorkerPluginComponent[]',
        'disallowedComponents' => '\ShapeDiver\GeometryApiV2\Client\Model\ResWorkerPluginComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'minVersion' => null,
        'maxVersion' => null,
        'authorName' => null,
        'description' => null,
        'href' => null,
        'allowFallbackToAssemblyVersion' => null,
        'checkMajorMinorVersionOnly' => null,
        'checkIfInstalled' => null,
        'previousIds' => null,
        'allowedComponents' => null,
        'disallowedComponents' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'minVersion' => false,
        'maxVersion' => false,
        'authorName' => false,
        'description' => false,
        'href' => false,
        'allowFallbackToAssemblyVersion' => false,
        'checkMajorMinorVersionOnly' => false,
        'checkIfInstalled' => false,
        'previousIds' => false,
        'allowedComponents' => false,
        'disallowedComponents' => false
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
        'name' => 'name',
        'minVersion' => 'minVersion',
        'maxVersion' => 'maxVersion',
        'authorName' => 'authorName',
        'description' => 'description',
        'href' => 'href',
        'allowFallbackToAssemblyVersion' => 'allowFallbackToAssemblyVersion',
        'checkMajorMinorVersionOnly' => 'checkMajorMinorVersionOnly',
        'checkIfInstalled' => 'checkIfInstalled',
        'previousIds' => 'previousIds',
        'allowedComponents' => 'allowedComponents',
        'disallowedComponents' => 'disallowedComponents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'minVersion' => 'setMinVersion',
        'maxVersion' => 'setMaxVersion',
        'authorName' => 'setAuthorName',
        'description' => 'setDescription',
        'href' => 'setHref',
        'allowFallbackToAssemblyVersion' => 'setAllowFallbackToAssemblyVersion',
        'checkMajorMinorVersionOnly' => 'setCheckMajorMinorVersionOnly',
        'checkIfInstalled' => 'setCheckIfInstalled',
        'previousIds' => 'setPreviousIds',
        'allowedComponents' => 'setAllowedComponents',
        'disallowedComponents' => 'setDisallowedComponents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'minVersion' => 'getMinVersion',
        'maxVersion' => 'getMaxVersion',
        'authorName' => 'getAuthorName',
        'description' => 'getDescription',
        'href' => 'getHref',
        'allowFallbackToAssemblyVersion' => 'getAllowFallbackToAssemblyVersion',
        'checkMajorMinorVersionOnly' => 'getCheckMajorMinorVersionOnly',
        'checkIfInstalled' => 'getCheckIfInstalled',
        'previousIds' => 'getPreviousIds',
        'allowedComponents' => 'getAllowedComponents',
        'disallowedComponents' => 'getDisallowedComponents'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('minVersion', $data ?? [], null);
        $this->setIfExists('maxVersion', $data ?? [], null);
        $this->setIfExists('authorName', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('href', $data ?? [], null);
        $this->setIfExists('allowFallbackToAssemblyVersion', $data ?? [], null);
        $this->setIfExists('checkMajorMinorVersionOnly', $data ?? [], null);
        $this->setIfExists('checkIfInstalled', $data ?? [], null);
        $this->setIfExists('previousIds', $data ?? [], null);
        $this->setIfExists('allowedComponents', $data ?? [], null);
        $this->setIfExists('disallowedComponents', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['minVersion'] === null) {
            $invalidProperties[] = "'minVersion' can't be null";
        }
        if ($this->container['maxVersion'] === null) {
            $invalidProperties[] = "'maxVersion' can't be null";
        }
        if ($this->container['allowFallbackToAssemblyVersion'] === null) {
            $invalidProperties[] = "'allowFallbackToAssemblyVersion' can't be null";
        }
        if ($this->container['checkMajorMinorVersionOnly'] === null) {
            $invalidProperties[] = "'checkMajorMinorVersionOnly' can't be null";
        }
        if ($this->container['checkIfInstalled'] === null) {
            $invalidProperties[] = "'checkIfInstalled' can't be null";
        }
        if ($this->container['previousIds'] === null) {
            $invalidProperties[] = "'previousIds' can't be null";
        }
        if ($this->container['allowedComponents'] === null) {
            $invalidProperties[] = "'allowedComponents' can't be null";
        }
        if ($this->container['disallowedComponents'] === null) {
            $invalidProperties[] = "'disallowedComponents' can't be null";
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
     * @param string $id ID of the Grasshopper plugin.
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
     * @param string $name Name of the Grasshopper plugin.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets minVersion
     *
     * @return string
     */
    public function getMinVersion()
    {
        return $this->container['minVersion'];
    }

    /**
     * Sets minVersion
     *
     * @param string $minVersion Minimum supported version of the plugin.
     *
     * @return self
     */
    public function setMinVersion($minVersion)
    {
        if (is_null($minVersion)) {
            throw new \InvalidArgumentException('non-nullable minVersion cannot be null');
        }
        $this->container['minVersion'] = $minVersion;

        return $this;
    }

    /**
     * Gets maxVersion
     *
     * @return string
     */
    public function getMaxVersion()
    {
        return $this->container['maxVersion'];
    }

    /**
     * Sets maxVersion
     *
     * @param string $maxVersion Maximum supported version of the plugin.
     *
     * @return self
     */
    public function setMaxVersion($maxVersion)
    {
        if (is_null($maxVersion)) {
            throw new \InvalidArgumentException('non-nullable maxVersion cannot be null');
        }
        $this->container['maxVersion'] = $maxVersion;

        return $this;
    }

    /**
     * Gets authorName
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
     * Sets authorName
     *
     * @param string|null $authorName Name of the plugin author.
     *
     * @return self
     */
    public function setAuthorName($authorName)
    {
        if (is_null($authorName)) {
            throw new \InvalidArgumentException('non-nullable authorName cannot be null');
        }
        $this->container['authorName'] = $authorName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Link to a website related to the plugin.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href Link to a website related to the plugin.
     *
     * @return self
     */
    public function setHref($href)
    {
        if (is_null($href)) {
            throw new \InvalidArgumentException('non-nullable href cannot be null');
        }
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets allowFallbackToAssemblyVersion
     *
     * @return bool
     */
    public function getAllowFallbackToAssemblyVersion()
    {
        return $this->container['allowFallbackToAssemblyVersion'];
    }

    /**
     * Sets allowFallbackToAssemblyVersion
     *
     * @param bool $allowFallbackToAssemblyVersion When `true` then `GH_AssemblyInfo.AssemblyVersion` may be used instead of `GH_AssemblyInfo.Version` for version checking.  Defaults to `false`.
     *
     * @return self
     */
    public function setAllowFallbackToAssemblyVersion($allowFallbackToAssemblyVersion)
    {
        if (is_null($allowFallbackToAssemblyVersion)) {
            throw new \InvalidArgumentException('non-nullable allowFallbackToAssemblyVersion cannot be null');
        }
        $this->container['allowFallbackToAssemblyVersion'] = $allowFallbackToAssemblyVersion;

        return $this;
    }

    /**
     * Gets checkMajorMinorVersionOnly
     *
     * @return bool
     */
    public function getCheckMajorMinorVersionOnly()
    {
        return $this->container['checkMajorMinorVersionOnly'];
    }

    /**
     * Sets checkMajorMinorVersionOnly
     *
     * @param bool $checkMajorMinorVersionOnly When `true` then only the major and minor version numbers recorded in Grasshopper models will be checked.  Defaults to `false`.
     *
     * @return self
     */
    public function setCheckMajorMinorVersionOnly($checkMajorMinorVersionOnly)
    {
        if (is_null($checkMajorMinorVersionOnly)) {
            throw new \InvalidArgumentException('non-nullable checkMajorMinorVersionOnly cannot be null');
        }
        $this->container['checkMajorMinorVersionOnly'] = $checkMajorMinorVersionOnly;

        return $this;
    }

    /**
     * Gets checkIfInstalled
     *
     * @return bool
     */
    public function getCheckIfInstalled()
    {
        return $this->container['checkIfInstalled'];
    }

    /**
     * Sets checkIfInstalled
     *
     * @param bool $checkIfInstalled When `false` then the installation check of the plugin will be skipped.  Defaults to `true`.
     *
     * @return self
     */
    public function setCheckIfInstalled($checkIfInstalled)
    {
        if (is_null($checkIfInstalled)) {
            throw new \InvalidArgumentException('non-nullable checkIfInstalled cannot be null');
        }
        $this->container['checkIfInstalled'] = $checkIfInstalled;

        return $this;
    }

    /**
     * Gets previousIds
     *
     * @return string[]
     */
    public function getPreviousIds()
    {
        return $this->container['previousIds'];
    }

    /**
     * Sets previousIds
     *
     * @param string[] $previousIds List of previous plugin IDs supported by this plugin version. This is used for the obscure case of the plugin developer changing the plugin ID.
     *
     * @return self
     */
    public function setPreviousIds($previousIds)
    {
        if (is_null($previousIds)) {
            throw new \InvalidArgumentException('non-nullable previousIds cannot be null');
        }
        $this->container['previousIds'] = $previousIds;

        return $this;
    }

    /**
     * Gets allowedComponents
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResWorkerPluginComponent[]
     */
    public function getAllowedComponents()
    {
        return $this->container['allowedComponents'];
    }

    /**
     * Sets allowedComponents
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResWorkerPluginComponent[] $allowedComponents List of plugin components that are explicitly allowed. When this property is set, only the listed components are allowed, overruling the list in `disallowedComponents`.
     *
     * @return self
     */
    public function setAllowedComponents($allowedComponents)
    {
        if (is_null($allowedComponents)) {
            throw new \InvalidArgumentException('non-nullable allowedComponents cannot be null');
        }
        $this->container['allowedComponents'] = $allowedComponents;

        return $this;
    }

    /**
     * Gets disallowedComponents
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResWorkerPluginComponent[]
     */
    public function getDisallowedComponents()
    {
        return $this->container['disallowedComponents'];
    }

    /**
     * Sets disallowedComponents
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResWorkerPluginComponent[] $disallowedComponents List of plugin components which may not be used. This list might be overruled by `allowedComponents`.
     *
     * @return self
     */
    public function setDisallowedComponents($disallowedComponents)
    {
        if (is_null($disallowedComponents)) {
            throw new \InvalidArgumentException('non-nullable disallowedComponents cannot be null');
        }
        $this->container['disallowedComponents'] = $disallowedComponents;

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


