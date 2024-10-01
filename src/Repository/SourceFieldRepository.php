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
use Gally\Sdk\Entity\Metadata;
use Gally\Sdk\Entity\SourceField;

/**
 * Source field repository
 *
 * @method SourceField findByIdentity(SourceField $entity)
 */
class SourceFieldRepository extends AbstractBulkRepository
{
    public function __construct(
        RestClient $client,
        private MetadataRepository $metadataRepository,
    ) {
        parent::__construct($client);
    }

    public function getEntityCode(): string
    {
        return SourceField::getEntityCode();
    }

    public function getIdentity(AbstractEntity $entity): string
    {
        if (!$entity instanceof SourceField) {
            throw new \InvalidArgumentException('Not managed'); //Todo
        }

        return $entity->getMetadata()->getEntity() . '_' . $entity->getCode();
    }

    protected function buildEntityObject(array $rawEntity): AbstractEntity
    {
        /** @var Metadata $metadata */
        $metadata = $this->metadataRepository->findByUri($rawEntity['metadata']);
        return new SourceField(
            $metadata,
            $rawEntity['code'],
            $rawEntity['type'],
            $rawEntity['defaultLabel'],
            $rawEntity['labels'],
            $rawEntity['id'] ?? null,
        );
    }
}
