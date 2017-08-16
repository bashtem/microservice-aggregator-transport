<?php
/**
 * @file
 * Contains \LushDigital\MicroserviceAggregatorTransport\Request.
 */

namespace LushDigital\MicroserviceAggregatorTransport;

/**
 * Models a request to a service.
 *
 * @package LushDigital\MicroserviceAggregatorTransport
 */
final class Request
{
    /**
     * Request body to send to a service resource.
     *
     * @var array
     */
    protected $body = [];

    /**
     * HTTP method for the request.
     *
     * @var string
     */
    protected $method;

    /**
     * Values to be passed as a query string to the service resource.
     *
     * @var array
     */
    protected $query = [];

    /**
     * Values to be passed as a multipart request to the service resource.
     *
     * @var MultipartRequest[]
     */
    protected $multipart = [];

    /**
     * Machine name of the resource of the service.
     *
     * @var string
     */
    protected $resource;

    /**
     * Request constructor.
     *
     * @param string $resource
     * @param string $method
     * @param array $body
     * @param array $query
     * @param array $multipart
     */
    public function __construct($resource, $method, array $body = [], array $query = [], array $multipart = [])
    {
        $this->resource = $resource;
        $this->method = $method;
        $this->body = $body;
        $this->query = $query;
        $this->multipart = $multipart;
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param array $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return array
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param array $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * @return MultipartRequest[]
     */
    public function getMultipart()
    {
        return $this->multipart;
    }

    /**
     * @param MultipartRequest[] $multipart
     */
    public function setMultipart(array $multipart)
    {
        $this->multipart = $multipart;
    }

    /**
     * @param MultipartRequest $multipart
     */
    public function addMultipartRequest(MultipartRequest $multipart)
    {
        $this->multipart[] = $multipart;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }
}