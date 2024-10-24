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

namespace Gally\Sdk\Synchronizer;

use Gally\Rest\Model\MetadataMetadataRead;
use Gally\Rest\Model\MetadataMetadataWrite;
use Gally\Rest\Model\ModelInterface;
use Shopware\Core\Framework\Context;

/**
 * Synchronize shopware entity with gally metadata.
 */
class MetadataSynchronizer extends AbstractSynchronizer
{
    public function synchronizeAll(Context $context)
    {
        throw new \LogicException('Run source field synchronizer to sync all metadata');
    }

    public function synchronizeItem(array $params): ?ModelInterface
    {
        return $this->createOrUpdateEntity(new MetadataMetadataWrite(['entity' => $params['entity']]));
    }

    public function getIdentity(ModelInterface $entity): string
    {
        /** @var MetadataMetadataRead $entity */
        return $entity->getEntity();
    }

    protected function getEntityFromApi(ModelInterface|string|int $entity): ?ModelInterface
    {
        if (!$this->allEntityHasBeenFetch) {
            $this->fetchEntities();
        }

        return $this->entityByCode[\is_scalar($entity) ? $entity : $this->getIdentity($entity)] ?? null;
    }
}
