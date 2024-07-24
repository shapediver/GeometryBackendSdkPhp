<?php
/**
 * CommonsTicket
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
 * CommonsTicket Class Doc Comment
 *
 * @category Class
 * @description Authorization ticket.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommonsTicket implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CommonsTicket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessdomains' => 'string[]',
        'author' => 'bool',
        'pub' => 'bool',
        'until' => 'string',
        'useId2' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessdomains' => null,
        'author' => null,
        'pub' => null,
        'until' => null,
        'useId2' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accessdomains' => false,
        'author' => false,
        'pub' => false,
        'until' => false,
        'useId2' => false
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
        'accessdomains' => 'accessdomains',
        'author' => 'author',
        'pub' => 'pub',
        'until' => 'until',
        'useId2' => 'use_id2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessdomains' => 'setAccessdomains',
        'author' => 'setAuthor',
        'pub' => 'setPub',
        'until' => 'setUntil',
        'useId2' => 'setUseId2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessdomains' => 'getAccessdomains',
        'author' => 'getAuthor',
        'pub' => 'getPub',
        'until' => 'getUntil',
        'useId2' => 'getUseId2'
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
        $this->setIfExists('accessdomains', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('pub', $data ?? [], null);
        $this->setIfExists('until', $data ?? [], null);
        $this->setIfExists('useId2', $data ?? [], null);
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

        if ($this->container['pub'] === null) {
            $invalidProperties[] = "'pub' can't be null";
        }
        if ($this->container['until'] === null) {
            $invalidProperties[] = "'until' can't be null";
        }
        if (!preg_match("/^\\d{14}$/", $this->container['until'])) {
            $invalidProperties[] = "invalid value for 'until', must be conform to the pattern /^\\d{14}$/.";
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
     * Gets accessdomains
     *
     * @return string[]|null
     */
    public function getAccessdomains()
    {
        return $this->container['accessdomains'];
    }

    /**
     * Sets accessdomains
     *
     * @param string[]|null $accessdomains List of domains (origins) this ticket should be limited to; may be empty.
     *
     * @return self
     */
    public function setAccessdomains($accessdomains)
    {
        if (is_null($accessdomains)) {
            throw new \InvalidArgumentException('non-nullable accessdomains cannot be null');
        }
        $this->container['accessdomains'] = $accessdomains;

        return $this;
    }

    /**
     * Gets author
     *
     * @return bool|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param bool|null $author Should this ticket provide access to model authoring (allows to change configuration)?
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets pub
     *
     * @return bool
     */
    public function getPub()
    {
        return $this->container['pub'];
    }

    /**
     * Sets pub
     *
     * @param bool $pub Should this ticket allow public access (ignore the model's `accessdomains` property)?
     *
     * @return self
     */
    public function setPub($pub)
    {
        if (is_null($pub)) {
            throw new \InvalidArgumentException('non-nullable pub cannot be null');
        }
        $this->container['pub'] = $pub;

        return $this;
    }

    /**
     * Gets until
     *
     * @return string
     */
    public function getUntil()
    {
        return $this->container['until'];
    }

    /**
     * Sets until
     *
     * @param string $until The timestamp until which the ticket should be valid.
     *
     * @return self
     */
    public function setUntil($until)
    {
        if (is_null($until)) {
            throw new \InvalidArgumentException('non-nullable until cannot be null');
        }

        if ((!preg_match("/^\\d{14}$/", ObjectSerializer::toString($until)))) {
            throw new \InvalidArgumentException("invalid value for \$until when calling CommonsTicket., must conform to the pattern /^\\d{14}$/.");
        }

        $this->container['until'] = $until;

        return $this;
    }

    /**
     * Gets useId2
     *
     * @return bool|null
     */
    public function getUseId2()
    {
        return $this->container['useId2'];
    }

    /**
     * Sets useId2
     *
     * @param bool|null $useId2 Does this ticket identify the model via its secondary ID (model property `id2`)?
     *
     * @return self
     */
    public function setUseId2($useId2)
    {
        if (is_null($useId2)) {
            throw new \InvalidArgumentException('non-nullable useId2 cannot be null');
        }
        $this->container['useId2'] = $useId2;

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


