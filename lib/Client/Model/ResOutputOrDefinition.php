<?php
/**
 * ResOutputOrDefinition
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
 * ResOutputOrDefinition Class Doc Comment
 *
 * @category Class
 * @description Either a full output or it&#39;s definition.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResOutputOrDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResOutputOrDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'uid' => 'string',
        'name' => 'string',
        'material' => 'string',
        'chunks' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOutputChunk[]',
        'dependency' => 'string[]',
        'group' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOutputDefinitionGroup',
        'order' => 'int',
        'tooltip' => 'string',
        'displayname' => 'string',
        'hidden' => 'bool',
        'version' => 'string',
        'delay' => 'int',
        'content' => '\ShapeDiver\GeometryApiV2\Client\Model\ResOutputContent[]',
        'bbmin' => 'float[]',
        'bbmax' => 'float[]',
        'msg' => 'string',
        'statusComputation' => '\ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus',
        'statusCollect' => '\ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus'
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
        'uid' => 'uuid',
        'name' => null,
        'material' => null,
        'chunks' => null,
        'dependency' => null,
        'group' => null,
        'order' => null,
        'tooltip' => null,
        'displayname' => null,
        'hidden' => null,
        'version' => null,
        'delay' => null,
        'content' => null,
        'bbmin' => null,
        'bbmax' => null,
        'msg' => null,
        'statusComputation' => null,
        'statusCollect' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'uid' => false,
        'name' => false,
        'material' => false,
        'chunks' => false,
        'dependency' => false,
        'group' => false,
        'order' => false,
        'tooltip' => false,
        'displayname' => false,
        'hidden' => false,
        'version' => false,
        'delay' => false,
        'content' => false,
        'bbmin' => false,
        'bbmax' => false,
        'msg' => false,
        'statusComputation' => false,
        'statusCollect' => false
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
        'uid' => 'uid',
        'name' => 'name',
        'material' => 'material',
        'chunks' => 'chunks',
        'dependency' => 'dependency',
        'group' => 'group',
        'order' => 'order',
        'tooltip' => 'tooltip',
        'displayname' => 'displayname',
        'hidden' => 'hidden',
        'version' => 'version',
        'delay' => 'delay',
        'content' => 'content',
        'bbmin' => 'bbmin',
        'bbmax' => 'bbmax',
        'msg' => 'msg',
        'statusComputation' => 'status_computation',
        'statusCollect' => 'status_collect'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uid' => 'setUid',
        'name' => 'setName',
        'material' => 'setMaterial',
        'chunks' => 'setChunks',
        'dependency' => 'setDependency',
        'group' => 'setGroup',
        'order' => 'setOrder',
        'tooltip' => 'setTooltip',
        'displayname' => 'setDisplayname',
        'hidden' => 'setHidden',
        'version' => 'setVersion',
        'delay' => 'setDelay',
        'content' => 'setContent',
        'bbmin' => 'setBbmin',
        'bbmax' => 'setBbmax',
        'msg' => 'setMsg',
        'statusComputation' => 'setStatusComputation',
        'statusCollect' => 'setStatusCollect'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uid' => 'getUid',
        'name' => 'getName',
        'material' => 'getMaterial',
        'chunks' => 'getChunks',
        'dependency' => 'getDependency',
        'group' => 'getGroup',
        'order' => 'getOrder',
        'tooltip' => 'getTooltip',
        'displayname' => 'getDisplayname',
        'hidden' => 'getHidden',
        'version' => 'getVersion',
        'delay' => 'getDelay',
        'content' => 'getContent',
        'bbmin' => 'getBbmin',
        'bbmax' => 'getBbmax',
        'msg' => 'getMsg',
        'statusComputation' => 'getStatusComputation',
        'statusCollect' => 'getStatusCollect'
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
        $this->setIfExists('uid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('material', $data ?? [], null);
        $this->setIfExists('chunks', $data ?? [], null);
        $this->setIfExists('dependency', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('tooltip', $data ?? [], null);
        $this->setIfExists('displayname', $data ?? [], null);
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('delay', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('bbmin', $data ?? [], null);
        $this->setIfExists('bbmax', $data ?? [], null);
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('statusComputation', $data ?? [], null);
        $this->setIfExists('statusCollect', $data ?? [], null);
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
        if ($this->container['dependency'] === null) {
            $invalidProperties[] = "'dependency' can't be null";
        }
        if ($this->container['hidden'] === null) {
            $invalidProperties[] = "'hidden' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if (!is_null($this->container['delay']) && ($this->container['delay'] < 0)) {
            $invalidProperties[] = "invalid value for 'delay', must be bigger than or equal to 0.";
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
     * @param string $id ID of the output, dependent on model ID, and therefore changing each time a model gets uploaded.
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
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid Constant ID of the output, not dependent on model ID, and therefore NOT changing each time a model gets uploaded. Might be undefined because this property was introduced in summer 2020 and does not exist for outputs of older models.
     *
     * @return self
     */
    public function setUid($uid)
    {
        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }
        $this->container['uid'] = $uid;

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
     * @param string $name Name of the output.
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
     * Gets material
     *
     * @return string|null
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     *
     * @param string|null $material Optional ID of the output holding material information for this output.
     *
     * @return self
     */
    public function setMaterial($material)
    {
        if (is_null($material)) {
            throw new \InvalidArgumentException('non-nullable material cannot be null');
        }
        $this->container['material'] = $material;

        return $this;
    }

    /**
     * Gets chunks
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOutputChunk[]|null
     */
    public function getChunks()
    {
        return $this->container['chunks'];
    }

    /**
     * Sets chunks
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOutputChunk[]|null $chunks Information about which chunks exist in the asset/sdTF.
     *
     * @return self
     */
    public function setChunks($chunks)
    {
        if (is_null($chunks)) {
            throw new \InvalidArgumentException('non-nullable chunks cannot be null');
        }
        $this->container['chunks'] = $chunks;

        return $this;
    }

    /**
     * Gets dependency
     *
     * @return string[]
     */
    public function getDependency()
    {
        return $this->container['dependency'];
    }

    /**
     * Sets dependency
     *
     * @param string[] $dependency List of IDs of parameters influencing this output.
     *
     * @return self
     */
    public function setDependency($dependency)
    {
        if (is_null($dependency)) {
            throw new \InvalidArgumentException('non-nullable dependency cannot be null');
        }
        $this->container['dependency'] = $dependency;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOutputDefinitionGroup|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOutputDefinitionGroup|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order Ordering of the output in client applications.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets tooltip
     *
     * @return string|null
     */
    public function getTooltip()
    {
        return $this->container['tooltip'];
    }

    /**
     * Sets tooltip
     *
     * @param string|null $tooltip Description that is shown as a tooltip in the clients.
     *
     * @return self
     */
    public function setTooltip($tooltip)
    {
        if (is_null($tooltip)) {
            throw new \InvalidArgumentException('non-nullable tooltip cannot be null');
        }
        $this->container['tooltip'] = $tooltip;

        return $this;
    }

    /**
     * Gets displayname
     *
     * @return string|null
     */
    public function getDisplayname()
    {
        return $this->container['displayname'];
    }

    /**
     * Sets displayname
     *
     * @param string|null $displayname Parameter name to display instead of `name`.
     *
     * @return self
     */
    public function setDisplayname($displayname)
    {
        if (is_null($displayname)) {
            throw new \InvalidArgumentException('non-nullable displayname cannot be null');
        }
        $this->container['displayname'] = $displayname;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Controls whether the parameter should be hidden in the UI.
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        if (is_null($hidden)) {
            throw new \InvalidArgumentException('non-nullable hidden cannot be null');
        }
        $this->container['hidden'] = $hidden;

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
     * @param string $version A unique identifier for the particular version of the output. This is a hash code which is based on the parameter values that were used to compute the resulting data. The hash code only depends on the values of the parameters which may theoretically influence the results of the output. As an example, parameters which are in no way connected to the output component in Grasshopper are not considered.
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
     * Gets delay
     *
     * @return int|null
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay
     *
     * @param int|null $delay The delay in milliseconds after which a cache request shall be sent to check again for this output version. This property is used ONLY if the output version has not been computed yet.  Note that the existence of this property does not necessarily imply the presence of an active or queued computation for the respective output version.
     *
     * @return self
     */
    public function setDelay($delay)
    {
        if (is_null($delay)) {
            throw new \InvalidArgumentException('non-nullable delay cannot be null');
        }

        if (($delay < 0)) {
            throw new \InvalidArgumentException('invalid value for $delay when calling ResOutputOrDefinition., must be bigger than or equal to 0.');
        }

        $this->container['delay'] = $delay;

        return $this;
    }

    /**
     * Gets content
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResOutputContent[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResOutputContent[]|null $content Result parts. In case this array does not exist, this means that the workers have not finished computation for this output version.
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets bbmin
     *
     * @return float[]|null
     */
    public function getBbmin()
    {
        return $this->container['bbmin'];
    }

    /**
     * Sets bbmin
     *
     * @param float[]|null $bbmin Optional bounding box, minimum corner.
     *
     * @return self
     */
    public function setBbmin($bbmin)
    {
        if (is_null($bbmin)) {
            throw new \InvalidArgumentException('non-nullable bbmin cannot be null');
        }
        $this->container['bbmin'] = $bbmin;

        return $this;
    }

    /**
     * Gets bbmax
     *
     * @return float[]|null
     */
    public function getBbmax()
    {
        return $this->container['bbmax'];
    }

    /**
     * Sets bbmax
     *
     * @param float[]|null $bbmax Optional bounding box, maximum corner.
     *
     * @return self
     */
    public function setBbmax($bbmax)
    {
        if (is_null($bbmax)) {
            throw new \InvalidArgumentException('non-nullable bbmax cannot be null');
        }
        $this->container['bbmax'] = $bbmax;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string|null
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg In case computation of the export version (temporarily) failed. Contains a message explaining what went wrong.
     *
     * @return self
     */
    public function setMsg($msg)
    {
        if (is_null($msg)) {
            throw new \InvalidArgumentException('non-nullable msg cannot be null');
        }
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets statusComputation
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus|null
     */
    public function getStatusComputation()
    {
        return $this->container['statusComputation'];
    }

    /**
     * Sets statusComputation
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus|null $statusComputation Status of the computation which resulted in the output version.
     *
     * @return self
     */
    public function setStatusComputation($statusComputation)
    {
        if (is_null($statusComputation)) {
            throw new \InvalidArgumentException('non-nullable statusComputation cannot be null');
        }
        $this->container['statusComputation'] = $statusComputation;

        return $this;
    }

    /**
     * Gets statusCollect
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus|null
     */
    public function getStatusCollect()
    {
        return $this->container['statusCollect'];
    }

    /**
     * Sets statusCollect
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResComputationStatus|null $statusCollect Status of collecting results for the output version.
     *
     * @return self
     */
    public function setStatusCollect($statusCollect)
    {
        if (is_null($statusCollect)) {
            throw new \InvalidArgumentException('non-nullable statusCollect cannot be null');
        }
        $this->container['statusCollect'] = $statusCollect;

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


