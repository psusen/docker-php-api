<?php
/**
 * Body2
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
 * Body2 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'listen_addr' => 'string',
        'advertise_addr' => 'string',
        'data_path_addr' => 'string',
        'remote_addrs' => 'string[]',
        'join_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'listen_addr' => null,
        'advertise_addr' => null,
        'data_path_addr' => null,
        'remote_addrs' => null,
        'join_token' => null
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
        'listen_addr' => 'ListenAddr',
        'advertise_addr' => 'AdvertiseAddr',
        'data_path_addr' => 'DataPathAddr',
        'remote_addrs' => 'RemoteAddrs',
        'join_token' => 'JoinToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listen_addr' => 'setListenAddr',
        'advertise_addr' => 'setAdvertiseAddr',
        'data_path_addr' => 'setDataPathAddr',
        'remote_addrs' => 'setRemoteAddrs',
        'join_token' => 'setJoinToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listen_addr' => 'getListenAddr',
        'advertise_addr' => 'getAdvertiseAddr',
        'data_path_addr' => 'getDataPathAddr',
        'remote_addrs' => 'getRemoteAddrs',
        'join_token' => 'getJoinToken'
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
        $this->container['listen_addr'] = isset($data['listen_addr']) ? $data['listen_addr'] : null;
        $this->container['advertise_addr'] = isset($data['advertise_addr']) ? $data['advertise_addr'] : null;
        $this->container['data_path_addr'] = isset($data['data_path_addr']) ? $data['data_path_addr'] : null;
        $this->container['remote_addrs'] = isset($data['remote_addrs']) ? $data['remote_addrs'] : null;
        $this->container['join_token'] = isset($data['join_token']) ? $data['join_token'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets listen_addr
     *
     * @return string
     */
    public function getListenAddr()
    {
        return $this->container['listen_addr'];
    }

    /**
     * Sets listen_addr
     *
     * @param string $listen_addr Listen address used for inter-manager communication if the node gets promoted to manager, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP).
     *
     * @return $this
     */
    public function setListenAddr($listen_addr)
    {
        $this->container['listen_addr'] = $listen_addr;

        return $this;
    }

    /**
     * Gets advertise_addr
     *
     * @return string
     */
    public function getAdvertiseAddr()
    {
        return $this->container['advertise_addr'];
    }

    /**
     * Sets advertise_addr
     *
     * @param string $advertise_addr Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @return $this
     */
    public function setAdvertiseAddr($advertise_addr)
    {
        $this->container['advertise_addr'] = $advertise_addr;

        return $this;
    }

    /**
     * Gets data_path_addr
     *
     * @return string
     */
    public function getDataPathAddr()
    {
        return $this->container['data_path_addr'];
    }

    /**
     * Sets data_path_addr
     *
     * @param string $data_path_addr Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`, or an interface, like `eth0`. If `DataPathAddr` is unspecified, the same addres as `AdvertiseAddr` is used.  The `DataPathAddr` specifies the address that global scope network drivers will publish towards other nodes in order to reach the containers running on this node. Using this parameter it is possible to separate the container data traffic from the management traffic of the cluster.
     *
     * @return $this
     */
    public function setDataPathAddr($data_path_addr)
    {
        $this->container['data_path_addr'] = $data_path_addr;

        return $this;
    }

    /**
     * Gets remote_addrs
     *
     * @return string[]
     */
    public function getRemoteAddrs()
    {
        return $this->container['remote_addrs'];
    }

    /**
     * Sets remote_addrs
     *
     * @param string[] $remote_addrs Addresses of manager nodes already participating in the swarm.
     *
     * @return $this
     */
    public function setRemoteAddrs($remote_addrs)
    {
        $this->container['remote_addrs'] = $remote_addrs;

        return $this;
    }

    /**
     * Gets join_token
     *
     * @return string
     */
    public function getJoinToken()
    {
        return $this->container['join_token'];
    }

    /**
     * Sets join_token
     *
     * @param string $join_token Secret token for joining this swarm.
     *
     * @return $this
     */
    public function setJoinToken($join_token)
    {
        $this->container['join_token'] = $join_token;

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


