<?php
/**
 * ResModelStateList
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
 * ResModelStateList Class Doc Comment
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResModelStateList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResModelStateList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file' => '\ShapeDiver\GeometryApiV2\Client\Model\ResFileInfo[]',
        'sdtf' => '\ShapeDiver\GeometryApiV2\Client\Model\ResSdtfInfo[]',
        'model' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModel[]',
        'modelState' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModelStateInfo[]',
        'output' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOutput[]',
        'export' => '\ShapeDiver\GeometryApiV2\Client\Model\ResExport[]',
        'texture' => '\ShapeDiver\GeometryApiV2\Client\Model\ResTexture[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'file' => null,
        'sdtf' => null,
        'model' => null,
        'modelState' => null,
        'output' => null,
        'export' => null,
        'texture' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'file' => false,
        'sdtf' => false,
        'model' => false,
        'modelState' => false,
        'output' => false,
        'export' => false,
        'texture' => false
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
        'file' => 'file',
        'sdtf' => 'sdtf',
        'model' => 'model',
        'modelState' => 'modelState',
        'output' => 'output',
        'export' => 'export',
        'texture' => 'texture'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file' => 'setFile',
        'sdtf' => 'setSdtf',
        'model' => 'setModel',
        'modelState' => 'setModelState',
        'output' => 'setOutput',
        'export' => 'setExport',
        'texture' => 'setTexture'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file' => 'getFile',
        'sdtf' => 'getSdtf',
        'model' => 'getModel',
        'modelState' => 'getModelState',
        'output' => 'getOutput',
        'export' => 'getExport',
        'texture' => 'getTexture'
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
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('sdtf', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('modelState', $data ?? [], null);
        $this->setIfExists('output', $data ?? [], null);
        $this->setIfExists('export', $data ?? [], null);
        $this->setIfExists('texture', $data ?? [], null);
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

        if ($this->container['modelState'] === null) {
            $invalidProperties[] = "'modelState' can't be null";
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
     * Gets file
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResFileInfo[]|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResFileInfo[]|null $file A directory of file objects.
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
     * Gets sdtf
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResSdtfInfo[]|null
     */
    public function getSdtf()
    {
        return $this->container['sdtf'];
    }

    /**
     * Sets sdtf
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResSdtfInfo[]|null $sdtf A directory of sdTF objects.
     *
     * @return self
     */
    public function setSdtf($sdtf)
    {
        if (is_null($sdtf)) {
            throw new \InvalidArgumentException('non-nullable sdtf cannot be null');
        }
        $this->container['sdtf'] = $sdtf;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModel[]|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModel[]|null $model A directory of ShapeDiver models.
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
     * Gets modelState
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModelStateInfo[]
     */
    public function getModelState()
    {
        return $this->container['modelState'];
    }

    /**
     * Sets modelState
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModelStateInfo[] $modelState A directory of Model-States.
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
     * Gets output
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOutput[]|null
     */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
     * Sets output
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOutput[]|null $output A directory of output versions.
     *
     * @return self
     */
    public function setOutput($output)
    {
        if (is_null($output)) {
            throw new \InvalidArgumentException('non-nullable output cannot be null');
        }
        $this->container['output'] = $output;

        return $this;
    }

    /**
     * Gets export
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResExport[]|null
     */
    public function getExport()
    {
        return $this->container['export'];
    }

    /**
     * Sets export
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResExport[]|null $export A directory of export versions.
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
     * Gets texture
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResTexture[]|null
     */
    public function getTexture()
    {
        return $this->container['texture'];
    }

    /**
     * Sets texture
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResTexture[]|null $texture A directory of model textures.
     *
     * @return self
     */
    public function setTexture($texture)
    {
        if (is_null($texture)) {
            throw new \InvalidArgumentException('non-nullable texture cannot be null');
        }
        $this->container['texture'] = $texture;

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


