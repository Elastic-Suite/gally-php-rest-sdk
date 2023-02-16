<?php
/**
 * RuleEngineGraphQlFiltersApi
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
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29-SNAPSHOT
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
 * RuleEngineGraphQlFiltersApi Class Doc Comment
 *
 * @category Class
 * @package  Gally\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RuleEngineGraphQlFiltersApi
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
     * Operation getRuleEngineGraphQlFiltersItem
     *
     * Retrieves a RuleEngineGraphQlFilters resource.
     *
     * @param  string $id id (required)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getRuleEngineGraphQlFiltersItem($id)
    {
        $this->getRuleEngineGraphQlFiltersItemWithHttpInfo($id);
    }

    /**
     * Operation getRuleEngineGraphQlFiltersItemWithHttpInfo
     *
     * Retrieves a RuleEngineGraphQlFilters resource.
     *
     * @param  string $id (required)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRuleEngineGraphQlFiltersItemWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->getRuleEngineGraphQlFiltersItemRequest($id);

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
     * Operation getRuleEngineGraphQlFiltersItemAsync
     *
     * Retrieves a RuleEngineGraphQlFilters resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRuleEngineGraphQlFiltersItemAsync($id)
    {
        return $this->getRuleEngineGraphQlFiltersItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRuleEngineGraphQlFiltersItemAsyncWithHttpInfo
     *
     * Retrieves a RuleEngineGraphQlFilters resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRuleEngineGraphQlFiltersItemAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->getRuleEngineGraphQlFiltersItemRequest($id);

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
     * Create request for operation 'getRuleEngineGraphQlFiltersItem'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRuleEngineGraphQlFiltersItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getRuleEngineGraphQlFiltersItem'
            );
        }

        $resourcePath = '/rule_engine_graph_ql_filters/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation ruleEngineFiltersRuleEngineGraphQlFiltersCollection
     *
     * Creates a RuleEngineGraphQlFilters resource.
     *
     * @param  \Gally\Rest\Model\RuleEngineGraphQlFilters $ruleEngineGraphQlFilters The new RuleEngineGraphQlFilters resource (optional)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Gally\Rest\Model\RuleEngineGraphQlFilters
     */
    public function ruleEngineFiltersRuleEngineGraphQlFiltersCollection($ruleEngineGraphQlFilters = null)
    {
        list($response) = $this->ruleEngineFiltersRuleEngineGraphQlFiltersCollectionWithHttpInfo($ruleEngineGraphQlFilters);
        return $response;
    }

    /**
     * Operation ruleEngineFiltersRuleEngineGraphQlFiltersCollectionWithHttpInfo
     *
     * Creates a RuleEngineGraphQlFilters resource.
     *
     * @param  \Gally\Rest\Model\RuleEngineGraphQlFilters $ruleEngineGraphQlFilters The new RuleEngineGraphQlFilters resource (optional)
     *
     * @throws \Gally\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Gally\Rest\Model\RuleEngineGraphQlFilters, HTTP status code, HTTP response headers (array of strings)
     */
    public function ruleEngineFiltersRuleEngineGraphQlFiltersCollectionWithHttpInfo($ruleEngineGraphQlFilters = null)
    {
        $returnType = '\Gally\Rest\Model\RuleEngineGraphQlFilters';
        $request = $this->ruleEngineFiltersRuleEngineGraphQlFiltersCollectionRequest($ruleEngineGraphQlFilters);

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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Gally\Rest\Model\RuleEngineGraphQlFilters',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ruleEngineFiltersRuleEngineGraphQlFiltersCollectionAsync
     *
     * Creates a RuleEngineGraphQlFilters resource.
     *
     * @param  \Gally\Rest\Model\RuleEngineGraphQlFilters $ruleEngineGraphQlFilters The new RuleEngineGraphQlFilters resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ruleEngineFiltersRuleEngineGraphQlFiltersCollectionAsync($ruleEngineGraphQlFilters = null)
    {
        return $this->ruleEngineFiltersRuleEngineGraphQlFiltersCollectionAsyncWithHttpInfo($ruleEngineGraphQlFilters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ruleEngineFiltersRuleEngineGraphQlFiltersCollectionAsyncWithHttpInfo
     *
     * Creates a RuleEngineGraphQlFilters resource.
     *
     * @param  \Gally\Rest\Model\RuleEngineGraphQlFilters $ruleEngineGraphQlFilters The new RuleEngineGraphQlFilters resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ruleEngineFiltersRuleEngineGraphQlFiltersCollectionAsyncWithHttpInfo($ruleEngineGraphQlFilters = null)
    {
        $returnType = '\Gally\Rest\Model\RuleEngineGraphQlFilters';
        $request = $this->ruleEngineFiltersRuleEngineGraphQlFiltersCollectionRequest($ruleEngineGraphQlFilters);

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
     * Create request for operation 'ruleEngineFiltersRuleEngineGraphQlFiltersCollection'
     *
     * @param  \Gally\Rest\Model\RuleEngineGraphQlFilters $ruleEngineGraphQlFilters The new RuleEngineGraphQlFilters resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ruleEngineFiltersRuleEngineGraphQlFiltersCollectionRequest($ruleEngineGraphQlFilters = null)
    {

        $resourcePath = '/rule_engine_graphql_filters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($ruleEngineGraphQlFilters)) {
            $_tempBody = $ruleEngineGraphQlFilters;
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
