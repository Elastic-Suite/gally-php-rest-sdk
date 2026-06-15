<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Gally to newer versions in the future.
 *
 * @package   Gally
 * @author    Gally Team <elasticsuite@smile.fr>
 * @copyright 2024-present Smile
 * @license   Open Software License v. 3.0 (OSL-3.0)
 */

namespace Gally\Sdk\Client;

use Gally\Sdk\Service\Cache\CacheManagerInterface;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class Client
{
    public const API_TOKEN_CACHE_KEY = 'api_token';

    private ?GuzzleClient $client = null;

    private ?string $token = null;

    public function __construct(
        private readonly Configuration $configuration,
        private readonly ?CacheManagerInterface $cacheManager = null,
    ) {
    }

    public function get(string $endpoint, array $data = [], bool $isPrivate = true): array
    {
        return $this->query('GET', $endpoint, $data, [], $isPrivate);
    }

    public function post(string $endpoint, array $data = [], bool $isPrivate = true): array
    {
        return $this->query('POST', $endpoint, $data, [], $isPrivate);
    }

    public function put(string $endpoint, array $data = [], bool $isPrivate = true): array
    {
        return $this->query('PUT', $endpoint, $data, [], $isPrivate);
    }

    public function delete(string $endpoint, array $data = [], bool $isPrivate = true): void
    {
        $this->query('DELETE', $endpoint, $data, [], $isPrivate);
    }

    public function patch(string $endpoint, array $data = [], bool $isPrivate = true): array
    {
        return $this->query('PATCH', $endpoint, $data, [], $isPrivate);
    }

    public function graphql(string $query, array $variables = [], array $headers = [], bool $isPrivate = true): array
    {
        $response = $this->query(
            'POST',
            'graphql',
            ['query' => $query, 'variables' => $variables],
            array_merge(
                [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
                $headers,
            ),
            $isPrivate
        );
        if (isset($response['errors'])) {
            $error = reset($response['errors']);
            throw new \RuntimeException($error['extensions']['debugMessage'] ?? $error['message']);
        }

        return $response;
    }

    /**
     * @throws \RuntimeException
     */
    public function query(string $method, string $endpoint, array $data, array $headers = [], bool $isPrivate = true): array
    {
        try {
            $headers = array_merge(
                [
                    'Accept' => 'application/ld+json',
                    'Content-Type' => 'application/ld+json',
                ],
                $headers,
            );

            if ($isPrivate) {
                $headers['Authorization'] = 'Bearer ' . $this->getToken();
            }

            $queryParams = 'GET' === $method ? http_build_query($data) : '';
            try {
                $response = $this->getClient()->request(
                    $method,
                    'GET' === $method ? "$endpoint?$queryParams" : $endpoint,
                    [RequestOptions::HEADERS => $headers, RequestOptions::JSON => $data]
                );
            } catch (GuzzleException $e) {
                // If we get a 401, we try to generate a new token.
                if ($isPrivate && 401 === $e->getCode()) {
                    $headers['Authorization'] = 'Bearer ' . $this->resetToken();

                    $response = $this->getClient()->request(
                        $method,
                        'GET' === $method ? "$endpoint?$queryParams" : $endpoint,
                        [RequestOptions::HEADERS => $headers, RequestOptions::JSON => $data]
                    );
                } else {
                    throw $e;
                }
            }

            $responseBody = $response->getBody()->getContents();
            if ('' === $responseBody) {
                return [];
            }

            /** @var array<mixed> $result */
            $result = json_decode($responseBody, true);
        } catch (GuzzleException $e) {
            $message = \sprintf('An error happened when fetching the "%s" API endpoint.', $endpoint);
            throw new \RuntimeException($message, 0, $e);
        }

        return $result;
    }

    public function getToken(): string
    {
        if (!$this->cacheManager instanceof CacheManagerInterface) {
            return $this->getAuthorizationToken();
        }

        if (null === $this->token) {
            $token = $this->cacheManager->get(self::API_TOKEN_CACHE_KEY, [$this, 'getAuthorizationToken']);
            $this->token = \is_scalar($token) ? (string) $token : null;
        }

        return (string) $this->token;
    }

    public function resetToken(): string
    {
        if (!$this->cacheManager instanceof CacheManagerInterface) {
            return $this->getAuthorizationToken();
        }

        $this->token = null;
        $this->cacheManager->clearCache(self::API_TOKEN_CACHE_KEY);

        return $this->getToken();
    }

    public function getAuthorizationToken(): string
    {
        try {
            $response = $this->getClient()->post('authentication_token', [
                RequestOptions::HEADERS => [
                    'accept' => 'application/ld+json',
                    'Content-Type' => 'application/ld+json',
                ],
                RequestOptions::JSON => [
                    'email' => $this->configuration->getUser(),
                    'password' => $this->configuration->getPassword(),
                ],
            ]);

            /** @var array<string> $json */
            $json = json_decode($response->getBody()->getContents(), true);

            return $json['token'];
        } catch (GuzzleException $e) {
            throw new \RuntimeException('An error happened when fetching the authentication token.', 0, $e);
        }
    }

    private function getClient(): GuzzleClient
    {
        if (null === $this->client) {
            $this->client = new GuzzleClient([
                'base_uri' => trim($this->configuration->getBaseUri(), '/') . '/',
                'verify' => $this->configuration->getCheckSSL(),
            ]);
        }

        return $this->client;
    }
}
