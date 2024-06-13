<?php
/**
 * IndexDocumentApi
 * PHP version 5
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Gally API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.3.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.30
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Gally\Rest\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Gally\Rest\ApiException;
use Gally\Rest\Configuration;
use Gally\Rest\HeaderSelector;
use Gally\Rest\ObjectSerializer;

/**
 * IndexDocumentApi Class Doc Comment
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IndexDocumentApi
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
     * Operation getIndexDocumentItem
     *
     * Retrieves a IndexDocument resource.
     *
     * @param  string $indexName indexName (required)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getIndexDocumentItem($indexName)
    {
        $this->getIndexDocumentItemWithHttpInfo($indexName);
    }

    /**
     * Operation getIndexDocumentItemWithHttpInfo
     *
     * Retrieves a IndexDocument resource.
     *
     * @param  string $indexName (required)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIndexDocumentItemWithHttpInfo($indexName)
    {
        $returnType = '';
        $request = $this->getIndexDocumentItemRequest($indexName);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation getIndexDocumentItemAsync
     *
     * Retrieves a IndexDocument resource.
     *
     * @param  string $indexName (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIndexDocumentItemAsync($indexName)
    {
        return $this->getIndexDocumentItemAsyncWithHttpInfo($indexName)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIndexDocumentItemAsyncWithHttpInfo
     *
     * Retrieves a IndexDocument resource.
     *
     * @param  string $indexName (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIndexDocumentItemAsyncWithHttpInfo($indexName)
    {
        $returnType = '';
        $request = $this->getIndexDocumentItemRequest($indexName);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'getIndexDocumentItem'
     *
     * @param  string $indexName (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIndexDocumentItemRequest($indexName)
    {
        // verify the required parameter 'indexName' is set
        if ($indexName === null || (is_array($indexName) && count($indexName) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $indexName when calling getIndexDocumentItem'
            );
        }

        $resourcePath = '/index_documents/{indexName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($indexName !== null) {
            $resourcePath = str_replace(
                '{' . 'indexName' . '}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/html'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postIndexDocumentCollection
     *
     * Creates a IndexDocument resource.
     *
     * @param  \Gally\Rest\Model\IndexDocument $indexDocument The new IndexDocument resource (optional)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Gally\Rest\Model\IndexDocument
     */
    public function postIndexDocumentCollection($indexDocument = null)
    {
        list($response) = $this->postIndexDocumentCollectionWithHttpInfo($indexDocument);
        return $response;
    }

    /**
     * Operation postIndexDocumentCollectionWithHttpInfo
     *
     * Creates a IndexDocument resource.
     *
     * @param  \Gally\Rest\Model\IndexDocument $indexDocument The new IndexDocument resource (optional)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Gally\Rest\Model\IndexDocument, HTTP status code, HTTP response headers (array of strings)
     */
    public function postIndexDocumentCollectionWithHttpInfo($indexDocument = null)
    {
        $returnType = '\Gally\Rest\Model\IndexDocument';
        $request = $this->postIndexDocumentCollectionRequest($indexDocument);

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
                if ($returnType !== 'string') {
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Gally\Rest\Model\IndexDocument',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postIndexDocumentCollectionAsync
     *
     * Creates a IndexDocument resource.
     *
     * @param  \Gally\Rest\Model\IndexDocument $indexDocument The new IndexDocument resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postIndexDocumentCollectionAsync($indexDocument = null)
    {
        return $this->postIndexDocumentCollectionAsyncWithHttpInfo($indexDocument)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postIndexDocumentCollectionAsyncWithHttpInfo
     *
     * Creates a IndexDocument resource.
     *
     * @param  \Gally\Rest\Model\IndexDocument $indexDocument The new IndexDocument resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postIndexDocumentCollectionAsyncWithHttpInfo($indexDocument = null)
    {
        $returnType = '\Gally\Rest\Model\IndexDocument';
        $request = $this->postIndexDocumentCollectionRequest($indexDocument);

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
     * Create request for operation 'postIndexDocumentCollection'
     *
     * @param  \Gally\Rest\Model\IndexDocument $indexDocument The new IndexDocument resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postIndexDocumentCollectionRequest($indexDocument = null)
    {

        $resourcePath = '/index_documents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($indexDocument)) {
            $_tempBody = $indexDocument;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json', 'application/json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json', 'application/json', 'text/html'],
                ['application/ld+json', 'application/json', 'text/html']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation removeIndexDocumentItem
     *
     * Removes the IndexDocument resource.
     *
     * @param  string $indexName indexName (required)
     * @param  array $documentIds document ids (required)  /!\ Manually added params
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function removeIndexDocumentItem($indexName, $documentIds)
    {
        $this->removeIndexDocumentItemWithHttpInfo($indexName, $documentIds);
    }

    /**
     * Operation removeIndexDocumentItemWithHttpInfo
     *
     * Removes the IndexDocument resource.
     *
     * @param  string $indexName (required)
     * @param  array $documentIds document ids (required)  /!\ Manually added params
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeIndexDocumentItemWithHttpInfo($indexName, $documentIds)
    {
        $returnType = '';
        $request = $this->removeIndexDocumentItemRequest($indexName, $documentIds);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation removeIndexDocumentItemAsync
     *
     * Removes the IndexDocument resource.
     *
     * @param  string $indexName (required)
     * @param  array $documentIds document ids (required)  /!\ Manually added params
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeIndexDocumentItemAsync($indexName, $documentIds)
    {
        return $this->removeIndexDocumentItemAsyncWithHttpInfo($indexName, $documentIds)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeIndexDocumentItemAsyncWithHttpInfo
     *
     * Removes the IndexDocument resource.
     *
     * @param  string $indexName (required)
     * @param  array $documentIds document ids (required)  /!\ Manually added params
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeIndexDocumentItemAsyncWithHttpInfo($indexName, $documentIds)
    {
        $returnType = '';
        $request = $this->removeIndexDocumentItemRequest($indexName, $documentIds);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'removeIndexDocumentItem'
     *
     * @param  string $indexName (required)
     * @param  array $documentIds document ids (required)  /!\ Manually added params
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function removeIndexDocumentItemRequest($indexName, $documentIds)
    {
        // verify the required parameter 'indexName' is set
        if ($indexName === null || (is_array($indexName) && count($indexName) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $indexName when calling removeIndexDocumentItem'
            );
        }

        $resourcePath = '/index_documents/{indexName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($indexName !== null) {
            $resourcePath = str_replace(
                '{' . 'indexName' . '}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($documentIds)) {
            $_tempBody = $documentIds;
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
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
