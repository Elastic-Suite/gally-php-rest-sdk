<?php

declare(strict_types=1);

namespace Gally\Sdk\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use RuntimeException;

final class RestClient
{
    private ?Client $client = null;
    private ?string $token = null;

    public function __construct(
        private readonly Configuration $configuration,
        private readonly string        $environment
    ) {
    }

    public function get(string $endpoint, array $data = []): array
    {
        return $this->query('GET', $endpoint, $data);
    }

    public function post(string $endpoint, array $data = []): array
    {
        return $this->query('POST', $endpoint, $data);
    }

    public function put(string $endpoint, array $data = []): array
    {
        return $this->query('PUT', $endpoint, $data);
    }

    public function delete(string $endpoint, array $data = []): void
    {
        $this->query('DELETE', $endpoint, $data);
    }

    public function patch(string $endpoint, array $data = []): array
    {
        return $this->query('PATCH', $endpoint, $data);
    }

    /**
     * @throws RuntimeException
     */
    public function query(string $method, string $endpoint, array $data): array
    {
        try {
            $queryParams = $method === 'GET' ? http_build_query($data) : '';
            $response = $this->getClient()->request(
                $method,
                $method === 'GET' ? "$endpoint?$queryParams" : $endpoint,
                [
                    RequestOptions::HEADERS => [
                        'accept' => 'application/json',
                        'Content-Type' => 'application/json',
                        'Authorization' => 'Bearer ' . $this->getAuthorizationToken(),
                    ],
                    RequestOptions::JSON => $data,
                ]
            );

            $responseBody = $response->getBody()->getContents();
            if ($responseBody === '') {
                return [];
            }

            $result = json_decode($responseBody, true);
        } catch (GuzzleException $e) {
            $message = sprintf('An error happened when fetching the "%s" API endpoint.', $endpoint);
            throw new RuntimeException($message, 0, $e);
        }

        return $result;
    }

    private function getAuthorizationToken(): string
    {
        if ($this->token === null) {
            try {
                $response = $this->getClient()->post('/authentication_token', [
                    RequestOptions::HEADERS => [
                        'accept' => 'application/json',
                        'Content-Type' => 'application/json',
                    ],
                    RequestOptions::JSON => [
                        'email' => $this->configuration->getUser(),
                        'password' => $this->configuration->getPassword(),
                    ],
                ]);

                $json = json_decode($response->getBody()->getContents(), true);
                $this->token = $json['token'];
            } catch (GuzzleException $e) {
                throw new RuntimeException('An error happened when fetching the authentication token.', 0, $e);
            }
        }

        return $this->token;
    }

    private function getClient(): Client
    {
        if ($this->client === null) {
            $this->client = new Client([
                'base_uri' => $this->configuration->getBaseUri(),
                'verify' => $this->environment === 'prod',
            ]);
        }

        return $this->client;
    }
}
