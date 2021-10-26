<?php
/**
 * AvailableQuantityApi
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\QuantitiesV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Available Quantity API
 *
 * Quantities interface
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\QuantitiesV2\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EzzeSiftuz\QuantitiesV2\ApiException;
use EzzeSiftuz\QuantitiesV2\Configuration;
use EzzeSiftuz\QuantitiesV2\HeaderSelector;
use EzzeSiftuz\QuantitiesV2\ObjectSerializer;

/**
 * AvailableQuantityApi Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\QuantitiesV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailableQuantityApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAvailableQuantities
     *
     * Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated
     *
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     *
     * @throws \EzzeSiftuz\QuantitiesV2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityResponseV2
     */
    public function getAvailableQuantities($limit = '200', $page = '0')
    {
        list($response) = $this->getAvailableQuantitiesWithHttpInfo($limit, $page);
        return $response;
    }

    /**
     * Operation getAvailableQuantitiesWithHttpInfo
     *
     * Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated
     *
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     *
     * @throws \EzzeSiftuz\QuantitiesV2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityResponseV2, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailableQuantitiesWithHttpInfo($limit = '200', $page = '0')
    {
        $returnType = '\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityResponseV2';
        $request = $this->getAvailableQuantitiesRequest($limit, $page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityResponseV2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAvailableQuantitiesAsync
     *
     * Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated
     *
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAvailableQuantitiesAsync($limit = '200', $page = '0')
    {
        return $this->getAvailableQuantitiesAsyncWithHttpInfo($limit, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAvailableQuantitiesAsyncWithHttpInfo
     *
     * Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated
     *
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAvailableQuantitiesAsyncWithHttpInfo($limit = '200', $page = '0')
    {
        $returnType = '\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityResponseV2';
        $request = $this->getAvailableQuantitiesRequest($limit, $page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAvailableQuantities'
     *
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAvailableQuantitiesRequest($limit = '200', $page = '0')
    {

        $resourcePath = '/v2/quantities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, 'int32');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAvailableQuantityBySku
     *
     * Get available quantity for a specific Sku
     *
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \EzzeSiftuz\QuantitiesV2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantitySingleResponseDTOV2
     */
    public function getAvailableQuantityBySku($sku)
    {
        list($response) = $this->getAvailableQuantityBySkuWithHttpInfo($sku);
        return $response;
    }

    /**
     * Operation getAvailableQuantityBySkuWithHttpInfo
     *
     * Get available quantity for a specific Sku
     *
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \EzzeSiftuz\QuantitiesV2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantitySingleResponseDTOV2, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailableQuantityBySkuWithHttpInfo($sku)
    {
        $returnType = '\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantitySingleResponseDTOV2';
        $request = $this->getAvailableQuantityBySkuRequest($sku);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantitySingleResponseDTOV2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAvailableQuantityBySkuAsync
     *
     * Get available quantity for a specific Sku
     *
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAvailableQuantityBySkuAsync($sku)
    {
        return $this->getAvailableQuantityBySkuAsyncWithHttpInfo($sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAvailableQuantityBySkuAsyncWithHttpInfo
     *
     * Get available quantity for a specific Sku
     *
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAvailableQuantityBySkuAsyncWithHttpInfo($sku)
    {
        $returnType = '\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantitySingleResponseDTOV2';
        $request = $this->getAvailableQuantityBySkuRequest($sku);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAvailableQuantityBySku'
     *
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAvailableQuantityBySkuRequest($sku)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling getAvailableQuantityBySku'
            );
        }

        $resourcePath = '/v2/quantities/{sku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation storeAvailableQuantitiesUsingPOST
     *
     * Update the available quantity for a specific SKU (up to 200 SKUs per request)
     *
     * @param  \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2[] $body availableQuantityRequestDTO (required)
     *
     * @throws \EzzeSiftuz\QuantitiesV2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function storeAvailableQuantitiesUsingPOST($body)
    {
        list($response) = $this->storeAvailableQuantitiesUsingPOSTWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation storeAvailableQuantitiesUsingPOSTWithHttpInfo
     *
     * Update the available quantity for a specific SKU (up to 200 SKUs per request)
     *
     * @param  \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2[] $body availableQuantityRequestDTO (required)
     *
     * @throws \EzzeSiftuz\QuantitiesV2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function storeAvailableQuantitiesUsingPOSTWithHttpInfo($body)
    {
        $returnType = 'object';
        $request = $this->storeAvailableQuantitiesUsingPOSTRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 207:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EzzeSiftuz\QuantitiesV2\Model\UpdateQuantityMultiStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EzzeSiftuz\QuantitiesV2\Model\PayloadTooLargeApiErrorResponseV2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EzzeSiftuz\QuantitiesV2\Model\ApiErrorResponseV2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation storeAvailableQuantitiesUsingPOSTAsync
     *
     * Update the available quantity for a specific SKU (up to 200 SKUs per request)
     *
     * @param  \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2[] $body availableQuantityRequestDTO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storeAvailableQuantitiesUsingPOSTAsync($body)
    {
        return $this->storeAvailableQuantitiesUsingPOSTAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation storeAvailableQuantitiesUsingPOSTAsyncWithHttpInfo
     *
     * Update the available quantity for a specific SKU (up to 200 SKUs per request)
     *
     * @param  \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2[] $body availableQuantityRequestDTO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storeAvailableQuantitiesUsingPOSTAsyncWithHttpInfo($body)
    {
        $returnType = 'object';
        $request = $this->storeAvailableQuantitiesUsingPOSTRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'storeAvailableQuantitiesUsingPOST'
     *
     * @param  \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2[] $body availableQuantityRequestDTO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function storeAvailableQuantitiesUsingPOSTRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling storeAvailableQuantitiesUsingPOST'
            );
        }

        $resourcePath = '/v2/quantities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
