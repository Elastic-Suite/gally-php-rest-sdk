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

namespace Gally\Sdk\Repository;

use Gally\Sdk\Entity\AbstractEntity;
use Gally\Sdk\Entity\RecommenderType;
use Gally\Sdk\Service\Cache\CacheManagerInterface;

class RecommenderTypeRepository extends AbstractRepository
{
    protected static array $entityByIdentity = [];
    protected static array $entityByUri = [];

    /** Recommender types are admin-managed in Gally and change rarely: cache the full list. */
    private const CACHE_KEY = 'recommender_types';
    private const CACHE_TTL = 300;

    public function getEntityCode(): string
    {
        return RecommenderType::getEntityCode();
    }

    public function getIdentity(AbstractEntity $entity): string
    {
        if (!$entity instanceof RecommenderType) {
            throw new \InvalidArgumentException(\sprintf('Entity %s not managed by this repository.', $entity::class));
        }

        return $entity->getCode();
    }

    public function findAll(): array
    {
        $cacheManager = $this->client->getCacheManager();
        if (!$cacheManager instanceof CacheManagerInterface) {
            return parent::findAll();
        }

        /** @var array<RecommenderType> */
        return $cacheManager->get(self::CACHE_KEY, fn () => parent::findAll(), self::CACHE_TTL);
    }

    protected function buildEntityObject(array $rawEntity): RecommenderType
    {
        return new RecommenderType(
            $rawEntity['name'],
            $rawEntity['code'],
            $rawEntity['@id'] ?? null,
        );
    }
}
