<?php
/**
 * ContainerApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ContainerApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContainerApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for containerArchive
     *
     * Get an archive of a filesystem resource in a container.
     *
     */
    public function testContainerArchive()
    {
    }

    /**
     * Test case for containerArchiveInfo
     *
     * Get information about files in a container.
     *
     */
    public function testContainerArchiveInfo()
    {
    }

    /**
     * Test case for containerAttach
     *
     * Attach to a container.
     *
     */
    public function testContainerAttach()
    {
    }

    /**
     * Test case for containerAttachWebsocket
     *
     * Attach to a container via a websocket.
     *
     */
    public function testContainerAttachWebsocket()
    {
    }

    /**
     * Test case for containerChanges
     *
     * Get changes on a container’s filesystem.
     *
     */
    public function testContainerChanges()
    {
    }

    /**
     * Test case for containerCreate
     *
     * Create a container.
     *
     */
    public function testContainerCreate()
    {
    }

    /**
     * Test case for containerDelete
     *
     * Remove a container.
     *
     */
    public function testContainerDelete()
    {
    }

    /**
     * Test case for containerExport
     *
     * Export a container.
     *
     */
    public function testContainerExport()
    {
    }

    /**
     * Test case for containerInspect
     *
     * Inspect a container.
     *
     */
    public function testContainerInspect()
    {
    }

    /**
     * Test case for containerKill
     *
     * Kill a container.
     *
     */
    public function testContainerKill()
    {
    }

    /**
     * Test case for containerList
     *
     * List containers.
     *
     */
    public function testContainerList()
    {
    }

    /**
     * Test case for containerLogs
     *
     * Get container logs.
     *
     */
    public function testContainerLogs()
    {
    }

    /**
     * Test case for containerPause
     *
     * Pause a container.
     *
     */
    public function testContainerPause()
    {
    }

    /**
     * Test case for containerPrune
     *
     * Delete stopped containers.
     *
     */
    public function testContainerPrune()
    {
    }

    /**
     * Test case for containerRename
     *
     * Rename a container.
     *
     */
    public function testContainerRename()
    {
    }

    /**
     * Test case for containerResize
     *
     * Resize a container TTY.
     *
     */
    public function testContainerResize()
    {
    }

    /**
     * Test case for containerRestart
     *
     * Restart a container.
     *
     */
    public function testContainerRestart()
    {
    }

    /**
     * Test case for containerStart
     *
     * Start a container.
     *
     */
    public function testContainerStart()
    {
    }

    /**
     * Test case for containerStats
     *
     * Get container stats based on resource usage.
     *
     */
    public function testContainerStats()
    {
    }

    /**
     * Test case for containerStop
     *
     * Stop a container.
     *
     */
    public function testContainerStop()
    {
    }

    /**
     * Test case for containerTop
     *
     * List processes running inside a container.
     *
     */
    public function testContainerTop()
    {
    }

    /**
     * Test case for containerUnpause
     *
     * Unpause a container.
     *
     */
    public function testContainerUnpause()
    {
    }

    /**
     * Test case for containerUpdate
     *
     * Update a container.
     *
     */
    public function testContainerUpdate()
    {
    }

    /**
     * Test case for containerWait
     *
     * Wait for a container.
     *
     */
    public function testContainerWait()
    {
    }

    /**
     * Test case for putContainerArchive
     *
     * Extract an archive of files or folders to a directory in a container.
     *
     */
    public function testPutContainerArchive()
    {
    }
}
