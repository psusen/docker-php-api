<?php
/**
 * ObjectSerializer
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

namespace Swagger\Client;

/**
 * ObjectSerializer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ObjectSerializer
{
    /**
     * Serialize data
     *
     * @param mixed  $data   the data to serialize
     * @param string $type   the SwaggerType of the data
     * @param string $format the format of the Swagger type of the data
     *
     * @return string|object serialized form of $data
     */
    public static function sanitizeForSerialization($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(\DateTime::ATOM);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif ($data instanceof \stdClass) {
            foreach ($data as $property => $value) {
                $data->$property = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::swaggerFormats();
            foreach ($data::swaggerTypes() as $property => $swaggerType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if ($value !== null
                    && !in_array($swaggerType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                    && method_exists($swaggerType, 'getAllowableEnumValues')
                    && !in_array($value, $swaggerType::getAllowableEnumValues(), true)) {
                    $imploded = implode("', '", $swaggerType::getAllowableEnumValues());
                    throw new \InvalidArgumentException("Invalid value for enum '$swaggerType', must be one of: '$imploded'");
                }
                if ($value !== null) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $swaggerType, $formats[$property]);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|\DateTime $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string|\SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        } else {
            return self::toString($value);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string|\DateTime $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        if ($value instanceof \DateTime) { // datetime in ISO8601 format
            return $value->format(\DateTime::ATOM);
        } else {
            return $value;
        }
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $collectionFormat           the format use for serialization (csv,
     * ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($collectionFormat) {
            case 'pipes':
                return implode('|', $collection);

            case 'tsv':
                return implode("\t", $collection);

            case 'ssv':
                return implode(' ', $collection);

            case 'csv':
                // Deliberate fall through. CSV is default format.
            default:
                return implode(',', $collection);
        }
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed    $data          object or primitive to be deserialized
     * @param string   $class         class name is passed as a string
     * @param string[] $httpHeaders   HTTP headers
     * @param string   $discriminator discriminator if polymorphism is used
     *
     * @return object|array|null an single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        } elseif (substr($class, 0, 4) === 'map[') { // for associative array e.g. map[string,int]
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }
            return $deserialized;
        } elseif (strcasecmp(substr($class, -2), '[]') === 0) {
            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }
            return $values;
        } elseif ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === '\DateTime') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                return new \DateTime($data);
            } else {
                return null;
            }
        } elseif (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        } elseif ($class === '\SplFileObject') {
            /** @var \Psr\Http\Message\StreamInterface $data */

            // determine file name
            if (array_key_exists('Content-Disposition', $httpHeaders) &&
                preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . DIRECTORY_SEPARATOR . self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');
            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }
            fclose($file);

            return new \SplFileObject($filename, 'r');
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            // If a discriminator is defined and points to a valid subclass, use it.
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '\Swagger\Client\Model\\' . $data->{$discriminator};
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }
            $instance = new $class();
            foreach ($instance::swaggerTypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                $propertyValue = $data->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }
            return $instance;
        }
    }
}
