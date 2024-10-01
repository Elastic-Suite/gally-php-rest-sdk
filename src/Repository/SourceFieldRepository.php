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

use Gally\Sdk\Client\Configuration;
use Gally\Sdk\Entity\AbstractEntity;
use Gally\Sdk\Entity\Metadata;
use Gally\Sdk\Entity\SourceField;

/**
 * Source field repository
 */
class SourceFieldRepository extends AbstractBulkRepository
{
    private MetadataRepository $metadataRepository;

    public function __construct(Configuration $configuration, string $environment)
    {
        parent::__construct($configuration, $environment);
        $this->metadataRepository = new MetadataRepository($configuration, $environment);
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
