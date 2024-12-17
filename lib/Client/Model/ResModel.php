<?php
/**
 * ResModel
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
 * ResModel Class Doc Comment
 *
 * @category Class
 * @description Definition of a ShapeDiver model.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowedLibraries' => 'string[]',
        'backlinkurl' => 'string',
        'checkurl' => 'string',
        'createdate' => 'string',
        'documentid' => 'string',
        'filename' => 'string',
        'id' => 'string',
        'id2' => 'string',
        'msg' => 'string',
        'name' => 'string',
        'orgId' => 'string',
        'stat' => '\ShapeDiver\GeometryApiV2\Client\Model\ResModelStatus',
        'userId' => 'string',
        'webhookUrl' => 'string',
        'webhookToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowedLibraries' => null,
        'backlinkurl' => null,
        'checkurl' => null,
        'createdate' => null,
        'documentid' => 'uuid',
        'filename' => null,
        'id' => 'uuid',
        'id2' => 'uuid',
        'msg' => null,
        'name' => null,
        'orgId' => 'uuid',
        'stat' => null,
        'userId' => 'uuid',
        'webhookUrl' => null,
        'webhookToken' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allowedLibraries' => false,
        'backlinkurl' => false,
        'checkurl' => false,
        'createdate' => false,
        'documentid' => false,
        'filename' => false,
        'id' => false,
        'id2' => false,
        'msg' => false,
        'name' => false,
        'orgId' => false,
        'stat' => false,
        'userId' => false,
        'webhookUrl' => false,
        'webhookToken' => false
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
        'allowedLibraries' => 'allowed_libraries',
        'backlinkurl' => 'backlinkurl',
        'checkurl' => 'checkurl',
        'createdate' => 'createdate',
        'documentid' => 'documentid',
        'filename' => 'filename',
        'id' => 'id',
        'id2' => 'id2',
        'msg' => 'msg',
        'name' => 'name',
        'orgId' => 'org_id',
        'stat' => 'stat',
        'userId' => 'user_id',
        'webhookUrl' => 'webhook_url',
        'webhookToken' => 'webhook_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowedLibraries' => 'setAllowedLibraries',
        'backlinkurl' => 'setBacklinkurl',
        'checkurl' => 'setCheckurl',
        'createdate' => 'setCreatedate',
        'documentid' => 'setDocumentid',
        'filename' => 'setFilename',
        'id' => 'setId',
        'id2' => 'setId2',
        'msg' => 'setMsg',
        'name' => 'setName',
        'orgId' => 'setOrgId',
        'stat' => 'setStat',
        'userId' => 'setUserId',
        'webhookUrl' => 'setWebhookUrl',
        'webhookToken' => 'setWebhookToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowedLibraries' => 'getAllowedLibraries',
        'backlinkurl' => 'getBacklinkurl',
        'checkurl' => 'getCheckurl',
        'createdate' => 'getCreatedate',
        'documentid' => 'getDocumentid',
        'filename' => 'getFilename',
        'id' => 'getId',
        'id2' => 'getId2',
        'msg' => 'getMsg',
        'name' => 'getName',
        'orgId' => 'getOrgId',
        'stat' => 'getStat',
        'userId' => 'getUserId',
        'webhookUrl' => 'getWebhookUrl',
        'webhookToken' => 'getWebhookToken'
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
        $this->setIfExists('allowedLibraries', $data ?? [], null);
        $this->setIfExists('backlinkurl', $data ?? [], null);
        $this->setIfExists('checkurl', $data ?? [], null);
        $this->setIfExists('createdate', $data ?? [], null);
        $this->setIfExists('documentid', $data ?? [], null);
        $this->setIfExists('filename', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('id2', $data ?? [], null);
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('orgId', $data ?? [], null);
        $this->setIfExists('stat', $data ?? [], null);
        $this->setIfExists('userId', $data ?? [], null);
        $this->setIfExists('webhookUrl', $data ?? [], null);
        $this->setIfExists('webhookToken', $data ?? [], null);
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

        if (!is_null($this->container['createdate']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/", $this->container['createdate'])) {
            $invalidProperties[] = "invalid value for 'createdate', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['stat'] === null) {
            $invalidProperties[] = "'stat' can't be null";
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
     * Gets allowedLibraries
     *
     * @return string[]|null
     */
    public function getAllowedLibraries()
    {
        return $this->container['allowedLibraries'];
    }

    /**
     * Sets allowedLibraries
     *
     * @param string[]|null $allowedLibraries List of allowed Grasshopper libraries.
     *
     * @return self
     */
    public function setAllowedLibraries($allowedLibraries)
    {
        if (is_null($allowedLibraries)) {
            throw new \InvalidArgumentException('non-nullable allowedLibraries cannot be null');
        }
        $this->container['allowedLibraries'] = $allowedLibraries;

        return $this;
    }

    /**
     * Gets backlinkurl
     *
     * @return string|null
     */
    public function getBacklinkurl()
    {
        return $this->container['backlinkurl'];
    }

    /**
     * Sets backlinkurl
     *
     * @param string|null $backlinkurl Link to view the model on the ShapeDiver Platform.
     *
     * @return self
     */
    public function setBacklinkurl($backlinkurl)
    {
        if (is_null($backlinkurl)) {
            throw new \InvalidArgumentException('non-nullable backlinkurl cannot be null');
        }
        $this->container['backlinkurl'] = $backlinkurl;

        return $this;
    }

    /**
     * Gets checkurl
     *
     * @return string|null
     */
    public function getCheckurl()
    {
        return $this->container['checkurl'];
    }

    /**
     * Sets checkurl
     *
     * @param string|null $checkurl Link to continue the checking process of the model on the ShapeDiver Platform.
     *
     * @return self
     */
    public function setCheckurl($checkurl)
    {
        if (is_null($checkurl)) {
            throw new \InvalidArgumentException('non-nullable checkurl cannot be null');
        }
        $this->container['checkurl'] = $checkurl;

        return $this;
    }

    /**
     * Gets createdate
     *
     * @return string|null
     */
    public function getCreatedate()
    {
        return $this->container['createdate'];
    }

    /**
     * Sets createdate
     *
     * @param string|null $createdate Timestamp of creation of the model.
     *
     * @return self
     */
    public function setCreatedate($createdate)
    {
        if (is_null($createdate)) {
            throw new \InvalidArgumentException('non-nullable createdate cannot be null');
        }

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/", ObjectSerializer::toString($createdate)))) {
            throw new \InvalidArgumentException("invalid value for \$createdate when calling ResModel., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/.");
        }

        $this->container['createdate'] = $createdate;

        return $this;
    }

    /**
     * Gets documentid
     *
     * @return string|null
     */
    public function getDocumentid()
    {
        return $this->container['documentid'];
    }

    /**
     * Sets documentid
     *
     * @param string|null $documentid ID of the Grasshopper document.
     *
     * @return self
     */
    public function setDocumentid($documentid)
    {
        if (is_null($documentid)) {
            throw new \InvalidArgumentException('non-nullable documentid cannot be null');
        }
        $this->container['documentid'] = $documentid;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string|null $filename Original name of the model's grasshopper file.
     *
     * @return self
     */
    public function setFilename($filename)
    {
        if (is_null($filename)) {
            throw new \InvalidArgumentException('non-nullable filename cannot be null');
        }
        $this->container['filename'] = $filename;

        return $this;
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
     * @param string $id ID of the model.
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
     * Gets id2
     *
     * @return string|null
     */
    public function getId2()
    {
        return $this->container['id2'];
    }

    /**
     * Sets id2
     *
     * @param string|null $id2 Optional second ID of the model. This value can be unset via an empty string.
     *
     * @return self
     */
    public function setId2($id2)
    {
        if (is_null($id2)) {
            throw new \InvalidArgumentException('non-nullable id2 cannot be null');
        }
        $this->container['id2'] = $id2;

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
     * @param string|null $msg Optional message, used in case the model was denied.
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Model name.
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
     * Gets orgId
     *
     * @return string|null
     */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
     * Sets orgId
     *
     * @param string|null $orgId Organization ID of the user that owns the model.
     *
     * @return self
     */
    public function setOrgId($orgId)
    {
        if (is_null($orgId)) {
            throw new \InvalidArgumentException('non-nullable orgId cannot be null');
        }
        $this->container['orgId'] = $orgId;

        return $this;
    }

    /**
     * Gets stat
     *
     * @return \ShapeDiver\GeometryApiV2\Client\Model\ResModelStatus
     */
    public function getStat()
    {
        return $this->container['stat'];
    }

    /**
     * Sets stat
     *
     * @param \ShapeDiver\GeometryApiV2\Client\Model\ResModelStatus $stat stat
     *
     * @return self
     */
    public function setStat($stat)
    {
        if (is_null($stat)) {
            throw new \InvalidArgumentException('non-nullable stat cannot be null');
        }
        $this->container['stat'] = $stat;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId ShapeDiver User ID of the model owner.
     *
     * @return self
     */
    public function setUserId($userId)
    {
        if (is_null($userId)) {
            throw new \InvalidArgumentException('non-nullable userId cannot be null');
        }
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets webhookUrl
     *
     * @return string|null
     */
    public function getWebhookUrl()
    {
        return $this->container['webhookUrl'];
    }

    /**
     * Sets webhookUrl
     *
     * @param string|null $webhookUrl The webhook-url for updating the platform backend about model status changes.
     *
     * @return self
     */
    public function setWebhookUrl($webhookUrl)
    {
        if (is_null($webhookUrl)) {
            throw new \InvalidArgumentException('non-nullable webhookUrl cannot be null');
        }
        $this->container['webhookUrl'] = $webhookUrl;

        return $this;
    }

    /**
     * Gets webhookToken
     *
     * @return string|null
     */
    public function getWebhookToken()
    {
        return $this->container['webhookToken'];
    }

    /**
     * Sets webhookToken
     *
     * @param string|null $webhookToken The webhook-token for authentication used by the webhook-url.
     *
     * @return self
     */
    public function setWebhookToken($webhookToken)
    {
        if (is_null($webhookToken)) {
            throw new \InvalidArgumentException('non-nullable webhookToken cannot be null');
        }
        $this->container['webhookToken'] = $webhookToken;

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


