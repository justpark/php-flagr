<?php
/**
 * EvalResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  JustPark\Flagr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flagr
 *
 * Flagr is a feature flagging, A/B testing and dynamic configuration microservice
 *
 * OpenAPI spec version: 1.0.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace JustPark\Flagr\Model;

use \ArrayAccess;
use \JustPark\Flagr\ObjectSerializer;

/**
 * EvalResult Class Doc Comment
 *
 * @category Class
 * @package  JustPark\Flagr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EvalResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'evalResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'flag_id' => 'int',
        'flag_key' => 'string',
        'flag_snapshot_id' => 'int',
        'segment_id' => 'int',
        'variant_id' => 'int',
        'variant_key' => 'string',
        'variant_attachment' => 'object',
        'eval_context' => '\JustPark\Flagr\Model\EvalContext',
        'timestamp' => 'string',
        'eval_debug_log' => '\JustPark\Flagr\Model\EvalDebugLog'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'flag_id' => 'int64',
        'flag_key' => null,
        'flag_snapshot_id' => 'int64',
        'segment_id' => 'int64',
        'variant_id' => 'int64',
        'variant_key' => null,
        'variant_attachment' => null,
        'eval_context' => null,
        'timestamp' => null,
        'eval_debug_log' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'flag_id' => 'flagID',
        'flag_key' => 'flagKey',
        'flag_snapshot_id' => 'flagSnapshotID',
        'segment_id' => 'segmentID',
        'variant_id' => 'variantID',
        'variant_key' => 'variantKey',
        'variant_attachment' => 'variantAttachment',
        'eval_context' => 'evalContext',
        'timestamp' => 'timestamp',
        'eval_debug_log' => 'evalDebugLog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flag_id' => 'setFlagId',
        'flag_key' => 'setFlagKey',
        'flag_snapshot_id' => 'setFlagSnapshotId',
        'segment_id' => 'setSegmentId',
        'variant_id' => 'setVariantId',
        'variant_key' => 'setVariantKey',
        'variant_attachment' => 'setVariantAttachment',
        'eval_context' => 'setEvalContext',
        'timestamp' => 'setTimestamp',
        'eval_debug_log' => 'setEvalDebugLog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flag_id' => 'getFlagId',
        'flag_key' => 'getFlagKey',
        'flag_snapshot_id' => 'getFlagSnapshotId',
        'segment_id' => 'getSegmentId',
        'variant_id' => 'getVariantId',
        'variant_key' => 'getVariantKey',
        'variant_attachment' => 'getVariantAttachment',
        'eval_context' => 'getEvalContext',
        'timestamp' => 'getTimestamp',
        'eval_debug_log' => 'getEvalDebugLog'
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
        return self::$swaggerModelName;
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
        $this->container['flag_id'] = isset($data['flag_id']) ? $data['flag_id'] : null;
        $this->container['flag_key'] = isset($data['flag_key']) ? $data['flag_key'] : null;
        $this->container['flag_snapshot_id'] = isset($data['flag_snapshot_id']) ? $data['flag_snapshot_id'] : null;
        $this->container['segment_id'] = isset($data['segment_id']) ? $data['segment_id'] : null;
        $this->container['variant_id'] = isset($data['variant_id']) ? $data['variant_id'] : null;
        $this->container['variant_key'] = isset($data['variant_key']) ? $data['variant_key'] : null;
        $this->container['variant_attachment'] = isset($data['variant_attachment']) ? $data['variant_attachment'] : null;
        $this->container['eval_context'] = isset($data['eval_context']) ? $data['eval_context'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['eval_debug_log'] = isset($data['eval_debug_log']) ? $data['eval_debug_log'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['flag_id'] === null) {
            $invalidProperties[] = "'flag_id' can't be null";
        }
        if (($this->container['flag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'flag_id', must be bigger than or equal to 1.";
        }

        if ($this->container['flag_key'] === null) {
            $invalidProperties[] = "'flag_key' can't be null";
        }
        if ($this->container['segment_id'] === null) {
            $invalidProperties[] = "'segment_id' can't be null";
        }
        if (($this->container['segment_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_id', must be bigger than or equal to 1.";
        }

        if ($this->container['variant_id'] === null) {
            $invalidProperties[] = "'variant_id' can't be null";
        }
        if (($this->container['variant_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'variant_id', must be bigger than or equal to 1.";
        }

        if ($this->container['variant_key'] === null) {
            $invalidProperties[] = "'variant_key' can't be null";
        }
        if ((strlen($this->container['variant_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'variant_key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['variant_attachment'] === null) {
            $invalidProperties[] = "'variant_attachment' can't be null";
        }
        if ($this->container['eval_context'] === null) {
            $invalidProperties[] = "'eval_context' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ((strlen($this->container['timestamp']) < 1)) {
            $invalidProperties[] = "invalid value for 'timestamp', the character length must be bigger than or equal to 1.";
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

        if ($this->container['flag_id'] === null) {
            return false;
        }
        if ($this->container['flag_id'] < 1) {
            return false;
        }
        if ($this->container['flag_key'] === null) {
            return false;
        }
        if ($this->container['segment_id'] === null) {
            return false;
        }
        if ($this->container['segment_id'] < 1) {
            return false;
        }
        if ($this->container['variant_id'] === null) {
            return false;
        }
        if ($this->container['variant_id'] < 1) {
            return false;
        }
        if ($this->container['variant_key'] === null) {
            return false;
        }
        if (strlen($this->container['variant_key']) < 1) {
            return false;
        }
        if ($this->container['variant_attachment'] === null) {
            return false;
        }
        if ($this->container['eval_context'] === null) {
            return false;
        }
        if ($this->container['timestamp'] === null) {
            return false;
        }
        if (strlen($this->container['timestamp']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets flag_id
     *
     * @return int
     */
    public function getFlagId()
    {
        return $this->container['flag_id'];
    }

    /**
     * Sets flag_id
     *
     * @param int $flag_id flag_id
     *
     * @return $this
     */
    public function setFlagId($flag_id)
    {

        if (($flag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $flag_id when calling EvalResult., must be bigger than or equal to 1.');
        }

        $this->container['flag_id'] = $flag_id;

        return $this;
    }

    /**
     * Gets flag_key
     *
     * @return string
     */
    public function getFlagKey()
    {
        return $this->container['flag_key'];
    }

    /**
     * Sets flag_key
     *
     * @param string $flag_key flag_key
     *
     * @return $this
     */
    public function setFlagKey($flag_key)
    {
        $this->container['flag_key'] = $flag_key;

        return $this;
    }

    /**
     * Gets flag_snapshot_id
     *
     * @return int
     */
    public function getFlagSnapshotId()
    {
        return $this->container['flag_snapshot_id'];
    }

    /**
     * Sets flag_snapshot_id
     *
     * @param int $flag_snapshot_id flag_snapshot_id
     *
     * @return $this
     */
    public function setFlagSnapshotId($flag_snapshot_id)
    {
        $this->container['flag_snapshot_id'] = $flag_snapshot_id;

        return $this;
    }

    /**
     * Gets segment_id
     *
     * @return int
     */
    public function getSegmentId()
    {
        return $this->container['segment_id'];
    }

    /**
     * Sets segment_id
     *
     * @param int $segment_id segment_id
     *
     * @return $this
     */
    public function setSegmentId($segment_id)
    {

        if (($segment_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_id when calling EvalResult., must be bigger than or equal to 1.');
        }

        $this->container['segment_id'] = $segment_id;

        return $this;
    }

    /**
     * Gets variant_id
     *
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     *
     * @param int $variant_id variant_id
     *
     * @return $this
     */
    public function setVariantId($variant_id)
    {

        if (($variant_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $variant_id when calling EvalResult., must be bigger than or equal to 1.');
        }

        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets variant_key
     *
     * @return string
     */
    public function getVariantKey()
    {
        return $this->container['variant_key'];
    }

    /**
     * Sets variant_key
     *
     * @param string $variant_key variant_key
     *
     * @return $this
     */
    public function setVariantKey($variant_key)
    {

        if ((strlen($variant_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $variant_key when calling EvalResult., must be bigger than or equal to 1.');
        }

        $this->container['variant_key'] = $variant_key;

        return $this;
    }

    /**
     * Gets variant_attachment
     *
     * @return object
     */
    public function getVariantAttachment()
    {
        return $this->container['variant_attachment'];
    }

    /**
     * Sets variant_attachment
     *
     * @param object $variant_attachment variant_attachment
     *
     * @return $this
     */
    public function setVariantAttachment($variant_attachment)
    {
        $this->container['variant_attachment'] = $variant_attachment;

        return $this;
    }

    /**
     * Gets eval_context
     *
     * @return \JustPark\Flagr\Model\EvalContext
     */
    public function getEvalContext()
    {
        return $this->container['eval_context'];
    }

    /**
     * Sets eval_context
     *
     * @param \JustPark\Flagr\Model\EvalContext $eval_context eval_context
     *
     * @return $this
     */
    public function setEvalContext($eval_context)
    {
        $this->container['eval_context'] = $eval_context;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {

        if ((strlen($timestamp) < 1)) {
            throw new \InvalidArgumentException('invalid length for $timestamp when calling EvalResult., must be bigger than or equal to 1.');
        }

        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets eval_debug_log
     *
     * @return \JustPark\Flagr\Model\EvalDebugLog
     */
    public function getEvalDebugLog()
    {
        return $this->container['eval_debug_log'];
    }

    /**
     * Sets eval_debug_log
     *
     * @param \JustPark\Flagr\Model\EvalDebugLog $eval_debug_log eval_debug_log
     *
     * @return $this
     */
    public function setEvalDebugLog($eval_debug_log)
    {
        $this->container['eval_debug_log'] = $eval_debug_log;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


