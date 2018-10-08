<?php
/**
 * DistributionApi
 * PHP version 5
 *
 * @category Class
 * @package  Justpark\Flagr
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

namespace Justpark\Flagr\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Justpark\Flagr\ApiException;
use Justpark\Flagr\Configuration;
use Justpark\Flagr\HeaderSelector;
use Justpark\Flagr\ObjectSerializer;

/**
 * DistributionApi Class Doc Comment
 *
 * @category Class
 * @package  Justpark\Flagr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DistributionApi
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
     * Operation findDistributions
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     *
     * @throws \Justpark\Flagr\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Justpark\Flagr\Model\Distribution[]
     */
    public function findDistributions($flag_id, $segment_id)
    {
        list($response) = $this->findDistributionsWithHttpInfo($flag_id, $segment_id);
        return $response;
    }

    /**
     * Operation findDistributionsWithHttpInfo
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     *
     * @throws \Justpark\Flagr\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Justpark\Flagr\Model\Distribution[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findDistributionsWithHttpInfo($flag_id, $segment_id)
    {
        $returnType = '\Justpark\Flagr\Model\Distribution[]';
        $request = $this->findDistributionsRequest($flag_id, $segment_id);

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
                        '\Justpark\Flagr\Model\Distribution[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Justpark\Flagr\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findDistributionsAsync
     *
     * 
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findDistributionsAsync($flag_id, $segment_id)
    {
        return $this->findDistributionsAsyncWithHttpInfo($flag_id, $segment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findDistributionsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findDistributionsAsyncWithHttpInfo($flag_id, $segment_id)
    {
        $returnType = '\Justpark\Flagr\Model\Distribution[]';
        $request = $this->findDistributionsRequest($flag_id, $segment_id);

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
     * Create request for operation 'findDistributions'
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findDistributionsRequest($flag_id, $segment_id)
    {
        // verify the required parameter 'flag_id' is set
        if ($flag_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flag_id when calling findDistributions'
            );
        }
        if ($flag_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$flag_id" when calling DistributionApi.findDistributions, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'segment_id' is set
        if ($segment_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $segment_id when calling findDistributions'
            );
        }
        if ($segment_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$segment_id" when calling DistributionApi.findDistributions, must be bigger than or equal to 1.');
        }


        $resourcePath = '/flags/{flagID}/segments/{segmentID}/distributions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($flag_id !== null) {
            $resourcePath = str_replace(
                '{' . 'flagID' . '}',
                ObjectSerializer::toPathValue($flag_id),
                $resourcePath
            );
        }
        // path params
        if ($segment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'segmentID' . '}',
                ObjectSerializer::toPathValue($segment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation putDistributions
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     * @param  \Justpark\Flagr\Model\PutDistributionsRequest $body array of distributions (required)
     *
     * @throws \Justpark\Flagr\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Justpark\Flagr\Model\Distribution[]
     */
    public function putDistributions($flag_id, $segment_id, $body)
    {
        list($response) = $this->putDistributionsWithHttpInfo($flag_id, $segment_id, $body);
        return $response;
    }

    /**
     * Operation putDistributionsWithHttpInfo
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     * @param  \Justpark\Flagr\Model\PutDistributionsRequest $body array of distributions (required)
     *
     * @throws \Justpark\Flagr\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Justpark\Flagr\Model\Distribution[], HTTP status code, HTTP response headers (array of strings)
     */
    public function putDistributionsWithHttpInfo($flag_id, $segment_id, $body)
    {
        $returnType = '\Justpark\Flagr\Model\Distribution[]';
        $request = $this->putDistributionsRequest($flag_id, $segment_id, $body);

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
                        '\Justpark\Flagr\Model\Distribution[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Justpark\Flagr\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putDistributionsAsync
     *
     * 
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     * @param  \Justpark\Flagr\Model\PutDistributionsRequest $body array of distributions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDistributionsAsync($flag_id, $segment_id, $body)
    {
        return $this->putDistributionsAsyncWithHttpInfo($flag_id, $segment_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putDistributionsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     * @param  \Justpark\Flagr\Model\PutDistributionsRequest $body array of distributions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putDistributionsAsyncWithHttpInfo($flag_id, $segment_id, $body)
    {
        $returnType = '\Justpark\Flagr\Model\Distribution[]';
        $request = $this->putDistributionsRequest($flag_id, $segment_id, $body);

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
     * Create request for operation 'putDistributions'
     *
     * @param  int $flag_id numeric ID of the flag (required)
     * @param  int $segment_id numeric ID of the segment (required)
     * @param  \Justpark\Flagr\Model\PutDistributionsRequest $body array of distributions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putDistributionsRequest($flag_id, $segment_id, $body)
    {
        // verify the required parameter 'flag_id' is set
        if ($flag_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $flag_id when calling putDistributions'
            );
        }
        if ($flag_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$flag_id" when calling DistributionApi.putDistributions, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'segment_id' is set
        if ($segment_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $segment_id when calling putDistributions'
            );
        }
        if ($segment_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$segment_id" when calling DistributionApi.putDistributions, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling putDistributions'
            );
        }

        $resourcePath = '/flags/{flagID}/segments/{segmentID}/distributions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($flag_id !== null) {
            $resourcePath = str_replace(
                '{' . 'flagID' . '}',
                ObjectSerializer::toPathValue($flag_id),
                $resourcePath
            );
        }
        // path params
        if ($segment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'segmentID' . '}',
                ObjectSerializer::toPathValue($segment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            'PUT',
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
