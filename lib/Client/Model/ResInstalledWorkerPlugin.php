<?php
/**
 * ResInstalledWorkerPlugin
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
 * ResInstalledWorkerPlugin Class Doc Comment
 *
 * @category Class
 * @description Contains information about all installed Grasshopper plugins.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResInstalledWorkerPlugin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResInstalledWorkerPlugin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'version' => 'string',
        'authorName' => 'string',
        'authorContact' => 'string',
        'description' => 'string',
        'assemblyVersion' => 'string',
        'assemblyFullName' => 'string',
        'isCoreLibrary' => 'bool',
        'license' => 'float',
        'loadingMechanism' => 'float',
        'location' => 'string'
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
        'version' => null,
        'authorName' => null,
        'authorContact' => null,
        'description' => null,
        'assemblyVersion' => null,
        'assemblyFullName' => null,
        'isCoreLibrary' => null,
        'license' => null,
        'loadingMechanism' => null,
        'location' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'version' => false,
        'authorName' => false,
        'authorContact' => false,
        'description' => false,
        'assemblyVersion' => false,
        'assemblyFullName' => false,
        'isCoreLibrary' => false,
        'license' => false,
        'loadingMechanism' => false,
        'location' => false
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
        'version' => 'version',
        'authorName' => 'authorName',
        'authorContact' => 'authorContact',
        'description' => 'description',
        'assemblyVersion' => 'assemblyVersion',
        'assemblyFullName' => 'assemblyFullName',
        'isCoreLibrary' => 'isCoreLibrary',
        'license' => 'license',
        'loadingMechanism' => 'loadingMechanism',
        'location' => 'location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'version' => 'setVersion',
        'authorName' => 'setAuthorName',
        'authorContact' => 'setAuthorContact',
        'description' => 'setDescription',
        'assemblyVersion' => 'setAssemblyVersion',
        'assemblyFullName' => 'setAssemblyFullName',
        'isCoreLibrary' => 'setIsCoreLibrary',
        'license' => 'setLicense',
        'loadingMechanism' => 'setLoadingMechanism',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'version' => 'getVersion',
        'authorName' => 'getAuthorName',
        'authorContact' => 'getAuthorContact',
        'description' => 'getDescription',
        'assemblyVersion' => 'getAssemblyVersion',
        'assemblyFullName' => 'getAssemblyFullName',
        'isCoreLibrary' => 'getIsCoreLibrary',
        'license' => 'getLicense',
        'loadingMechanism' => 'getLoadingMechanism',
        'location' => 'getLocation'
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
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('authorName', $data ?? [], null);
        $this->setIfExists('authorContact', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('assemblyVersion', $data ?? [], null);
        $this->setIfExists('assemblyFullName', $data ?? [], null);
        $this->setIfExists('isCoreLibrary', $data ?? [], null);
        $this->setIfExists('license', $data ?? [], null);
        $this->setIfExists('loadingMechanism', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
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
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['authorName'] === null) {
            $invalidProperties[] = "'authorName' can't be null";
        }
        if ($this->container['authorContact'] === null) {
            $invalidProperties[] = "'authorContact' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['assemblyVersion'] === null) {
            $invalidProperties[] = "'assemblyVersion' can't be null";
        }
        if ($this->container['assemblyFullName'] === null) {
            $invalidProperties[] = "'assemblyFullName' can't be null";
        }
        if ($this->container['isCoreLibrary'] === null) {
            $invalidProperties[] = "'isCoreLibrary' can't be null";
        }
        if ($this->container['license'] === null) {
            $invalidProperties[] = "'license' can't be null";
        }
        if ($this->container['loadingMechanism'] === null) {
            $invalidProperties[] = "'loadingMechanism' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
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
     * @param string $version Version of the Grasshopper plugin.
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
     * Gets authorName
     *
     * @return string
     */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
     * Sets authorName
     *
     * @param string $authorName Name of the plugin author.
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
     * Gets authorContact
     *
     * @return string
     */
    public function getAuthorContact()
    {
        return $this->container['authorContact'];
    }

    /**
     * Sets authorContact
     *
     * @param string $authorContact Contact information of the plugin author (homepage URL, email address, etc.).
     *
     * @return self
     */
    public function setAuthorContact($authorContact)
    {
        if (is_null($authorContact)) {
            throw new \InvalidArgumentException('non-nullable authorContact cannot be null');
        }
        $this->container['authorContact'] = $authorContact;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description General description of the Grasshopper plugin.
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
     * Gets assemblyVersion
     *
     * @return string
     */
    public function getAssemblyVersion()
    {
        return $this->container['assemblyVersion'];
    }

    /**
     * Sets assemblyVersion
     *
     * @param string $assemblyVersion Assembly version of the Grasshopper plugin DLL.  See the [documentation](https://learn.microsoft.com/en-us/dotnet/api/system.reflection.assemblyname.version?view=net-8.0) for more information.
     *
     * @return self
     */
    public function setAssemblyVersion($assemblyVersion)
    {
        if (is_null($assemblyVersion)) {
            throw new \InvalidArgumentException('non-nullable assemblyVersion cannot be null');
        }
        $this->container['assemblyVersion'] = $assemblyVersion;

        return $this;
    }

    /**
     * Gets assemblyFullName
     *
     * @return string
     */
    public function getAssemblyFullName()
    {
        return $this->container['assemblyFullName'];
    }

    /**
     * Sets assemblyFullName
     *
     * @param string $assemblyFullName Full assembly name of the Grasshopper plugin DLL.  See the [documentation](https://learn.microsoft.com/en-us/dotnet/api/system.reflection.assembly.fullname?view=net-8.0) for more information.
     *
     * @return self
     */
    public function setAssemblyFullName($assemblyFullName)
    {
        if (is_null($assemblyFullName)) {
            throw new \InvalidArgumentException('non-nullable assemblyFullName cannot be null');
        }
        $this->container['assemblyFullName'] = $assemblyFullName;

        return $this;
    }

    /**
     * Gets isCoreLibrary
     *
     * @return bool
     */
    public function getIsCoreLibrary()
    {
        return $this->container['isCoreLibrary'];
    }

    /**
     * Sets isCoreLibrary
     *
     * @param bool $isCoreLibrary Gets whether this library is a Grasshopper core library. Core libraries are installed along with Grasshopper and thus should always be available anywhere.
     *
     * @return self
     */
    public function setIsCoreLibrary($isCoreLibrary)
    {
        if (is_null($isCoreLibrary)) {
            throw new \InvalidArgumentException('non-nullable isCoreLibrary cannot be null');
        }
        $this->container['isCoreLibrary'] = $isCoreLibrary;

        return $this;
    }

    /**
     * Gets license
     *
     * @return float
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param float $license The license type of the plugin.  See the [documentation](https://developer.rhino3d.com/api/grasshopper/html/T_Grasshopper_Kernel_GH_LibraryLicense.htm) for more information.
     *
     * @return self
     */
    public function setLicense($license)
    {
        if (is_null($license)) {
            throw new \InvalidArgumentException('non-nullable license cannot be null');
        }
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets loadingMechanism
     *
     * @return float
     */
    public function getLoadingMechanism()
    {
        return $this->container['loadingMechanism'];
    }

    /**
     * Sets loadingMechanism
     *
     * @param float $loadingMechanism The mechanism used to load the plugin.  See the [documentation](https://developer.rhino3d.com/api/grasshopper/html/T_Grasshopper_Kernel_GH_LoadingMechanism.htm) for more information.
     *
     * @return self
     */
    public function setLoadingMechanism($loadingMechanism)
    {
        if (is_null($loadingMechanism)) {
            throw new \InvalidArgumentException('non-nullable loadingMechanism cannot be null');
        }
        $this->container['loadingMechanism'] = $loadingMechanism;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Installation path of the Grasshopper plugin.
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

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


