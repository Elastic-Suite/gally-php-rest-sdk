<?php

declare(strict_types=1);

namespace Gally\Sdk\Client;

final class Configuration
{
    public static function create(array $gallyConf): self
    {
        return new self(...$gallyConf);
    }

    public function __construct(
        private string $baseUri,
        private string $user,
        private string $password
    ) {
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
