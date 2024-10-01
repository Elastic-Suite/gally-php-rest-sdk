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

use Gally\Sdk\Entity\AbstractEntity;
use Gally\Sdk\Entity\Catalog;

class CatalogRepository extends AbstractRepository
{
    public function getEntityCode(): string
    {
        return Catalog::getEntityCode();
    }

    public function getIdentity(AbstractEntity $entity): string
    {
        if (!$entity instanceof Catalog) {
            throw new \InvalidArgumentException('Not managed'); //Todo
        }

        return $entity->getCode();
    }

    protected function buildEntityObject(array $rawEntity): Catalog
    {
        return new Catalog(
            $rawEntity['code'],
            $rawEntity['name'],
            $rawEntity['id'] ?? null,
        );
    }
}
