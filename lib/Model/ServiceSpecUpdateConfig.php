<?php
/**
 * ServiceSpecUpdateConfig
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.40) is used. For example, calling `/info` is the same as calling `/v1.40/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a [base64url encoded](https://tools.ietf.org/html/rfc4648#section-5) (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * OpenAPI spec version: 1.40
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ServiceSpecUpdateConfig Class Doc Comment
 *
 * @category Class
 * @description Specification for the update strategy of the service.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceSpecUpdateConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceSpec_UpdateConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parallelism' => 'int',
        'delay' => 'int',
        'failure_action' => 'string',
        'monitor' => 'int',
        'max_failure_ratio' => 'float',
        'order' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parallelism' => 'int64',
        'delay' => 'int64',
        'failure_action' => null,
        'monitor' => 'int64',
        'max_failure_ratio' => null,
        'order' => null
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
        'parallelism' => 'Parallelism',
        'delay' => 'Delay',
        'failure_action' => 'FailureAction',
        'monitor' => 'Monitor',
        'max_failure_ratio' => 'MaxFailureRatio',
        'order' => 'Order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parallelism' => 'setParallelism',
        'delay' => 'setDelay',
        'failure_action' => 'setFailureAction',
        'monitor' => 'setMonitor',
        'max_failure_ratio' => 'setMaxFailureRatio',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parallelism' => 'getParallelism',
        'delay' => 'getDelay',
        'failure_action' => 'getFailureAction',
        'monitor' => 'getMonitor',
        'max_failure_ratio' => 'getMaxFailureRatio',
        'order' => 'getOrder'
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

    const FAILURE_ACTION__CONTINUE = 'continue';
    const FAILURE_ACTION_PAUSE = 'pause';
    const FAILURE_ACTION_ROLLBACK = 'rollback';
    const ORDER_STOP_FIRST = 'stop-first';
    const ORDER_START_FIRST = 'start-first';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFailureActionAllowableValues()
    {
        return [
            self::FAILURE_ACTION__CONTINUE,
            self::FAILURE_ACTION_PAUSE,
            self::FAILURE_ACTION_ROLLBACK,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_STOP_FIRST,
            self::ORDER_START_FIRST,
        ];
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
        $this->container['parallelism'] = isset($data['parallelism']) ? $data['parallelism'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['failure_action'] = isset($data['failure_action']) ? $data['failure_action'] : null;
        $this->container['monitor'] = isset($data['monitor']) ? $data['monitor'] : null;
        $this->container['max_failure_ratio'] = isset($data['max_failure_ratio']) ? $data['max_failure_ratio'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFailureActionAllowableValues();
        if (!is_null($this->container['failure_action']) && !in_array($this->container['failure_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'failure_action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderAllowableValues();
        if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets parallelism
     *
     * @return int
     */
    public function getParallelism()
    {
        return $this->container['parallelism'];
    }

    /**
     * Sets parallelism
     *
     * @param int $parallelism Maximum number of tasks to be updated in one iteration (0 means unlimited parallelism).
     *
     * @return $this
     */
    public function setParallelism($parallelism)
    {
        $this->container['parallelism'] = $parallelism;

        return $this;
    }

    /**
     * Gets delay
     *
     * @return int
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay
     *
     * @param int $delay Amount of time between updates, in nanoseconds.
     *
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;

        return $this;
    }

    /**
     * Gets failure_action
     *
     * @return string
     */
    public function getFailureAction()
    {
        return $this->container['failure_action'];
    }

    /**
     * Sets failure_action
     *
     * @param string $failure_action Action to take if an updated task fails to run, or stops running during the update.
     *
     * @return $this
     */
    public function setFailureAction($failure_action)
    {
        $allowedValues = $this->getFailureActionAllowableValues();
        if (!is_null($failure_action) && !in_array($failure_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'failure_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['failure_action'] = $failure_action;

        return $this;
    }

    /**
     * Gets monitor
     *
     * @return int
     */
    public function getMonitor()
    {
        return $this->container['monitor'];
    }

    /**
     * Sets monitor
     *
     * @param int $monitor Amount of time to monitor each updated task for failures, in nanoseconds.
     *
     * @return $this
     */
    public function setMonitor($monitor)
    {
        $this->container['monitor'] = $monitor;

        return $this;
    }

    /**
     * Gets max_failure_ratio
     *
     * @return float
     */
    public function getMaxFailureRatio()
    {
        return $this->container['max_failure_ratio'];
    }

    /**
     * Sets max_failure_ratio
     *
     * @param float $max_failure_ratio The fraction of tasks that may fail during an update before the failure action is invoked, specified as a floating point number between 0 and 1.
     *
     * @return $this
     */
    public function setMaxFailureRatio($max_failure_ratio)
    {
        $this->container['max_failure_ratio'] = $max_failure_ratio;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order The order of operations when rolling out an updated task. Either the old task is shut down before the new task is started, or the new task is started before the old task is shut down.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $allowedValues = $this->getOrderAllowableValues();
        if (!is_null($order) && !in_array($order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order'] = $order;

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


