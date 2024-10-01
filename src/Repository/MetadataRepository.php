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
use Gally\Sdk\Entity\Metadata;

class MetadataRepository extends AbstractRepository
{
    public function getEntityCode(): string
    {
        return Metadata::getEntityCode();
    }

    public function getIdentity(AbstractEntity $entity): string
    {
        if (!$entity instanceof Metadata) {
            throw new \InvalidArgumentException('Not managed'); //Todo
        }

        return $entity->getEntity();
    }

    protected function buildEntityObject(array $rawEntity): Metadata
    {
        return new Metadata(
            $rawEntity['entity'],
            $rawEntity['id'] ?? null,
        );
    }
}
