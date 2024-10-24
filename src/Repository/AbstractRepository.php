<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Gally to newer versions in the future.
 *
 * @package   Gally
 * @author    Gally Team <elasticsuite@smile.fr>
 * @copyright 2022-present Smile
 * @license   Open Software License v. 3.0 (OSL-3.0)
 */

declare(strict_types=1);

namespace Gally\Sdk\Repository;

use Gally\Sdk\Client\RestClient;
use Gally\Sdk\Entity\AbstractEntity;

/**
 * Abstract entity repository
 */
abstract class AbstractRepository
{
    protected const FETCH_PAGE_SIZE = 50;

    protected array $entityByIdentity = [];
    protected array $entityByUri = [];

    public function __construct(
        protected RestClient $client
    ) {
    }

    abstract public function getEntityCode(): string;

    abstract public function getIdentity(AbstractEntity $entity): string;

    public function findByUri(string $uri): AbstractEntity
    {
        if (array_key_exists($uri, $this->entityByUri)) {
            return $this->entityByUri[$uri];
        }

        $rawEntity = $this->client->get($uri);
        $entity = $this->buildEntityObject($rawEntity);
        $this->saveInCache($entity);

        return $entity;
    }

    public function findByIdentity(AbstractEntity $entity): ?AbstractEntity
    {
        $identity = $this->getIdentity($entity);
        if (array_key_exists($identity, $this->entityByIdentity)) {
            return $this->entityByIdentity[$identity];
        }

        return null;
    }

    public function findAll(): void
    {
        $currentPage = 1;
        do {
            $rawEntities = $this->client->get(
                "/{$this->getEntityCode()}",
                ['currentPage' => $currentPage, 'pageSize' => self::FETCH_PAGE_SIZE]
            );

            foreach ($rawEntities as $rawEntity) {
                $entity = $this->buildEntityObject($rawEntity);
                $this->saveInCache($entity);
            }
            ++$currentPage;
        } while (\count($rawEntities) >= self::FETCH_PAGE_SIZE);
    }

    public function createOrUpdate(AbstractEntity $entity): AbstractEntity
    {
        $identity = $this->getIdentity($entity);

        $existingEntity = $this->entityByIdentity[$identity] ?? null;
        $result = $existingEntity
            ? $this->client->put((string) $existingEntity, $entity->__toJson())
            : $this->client->post("/{$this->getEntityCode()}", $entity->__toJson());

        $entity->setId($result['id']);
        $this->saveInCache($entity);

        return $entity;
    }

    protected function saveInCache(AbstractEntity $entity): void
    {
        $this->entityByIdentity[$this->getIdentity($entity)] = $entity;
        $this->entityByUri[(string) $entity] = $entity;
    }

    abstract protected function buildEntityObject(array $rawEntity): AbstractEntity;
}
