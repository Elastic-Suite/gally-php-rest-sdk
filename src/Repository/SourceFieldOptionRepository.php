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
use Gally\Sdk\Entity\SourceField;
use Gally\Sdk\Entity\SourceFieldOption;

/**
 * Source field option repository
 */
class SourceFieldOptionRepository extends AbstractBulkRepository
{
    public function __construct(
        RestClient $client,
        private SourceFieldRepository $sourceFieldRepository,
    ) {
        parent::__construct($client);
    }

    public function getEntityCode(): string
    {
        return SourceFieldOption::getEntityCode();
    }

    public function getIdentity(AbstractEntity $entity): string
    {
        if (!$entity instanceof SourceFieldOption) {
            throw new \InvalidArgumentException('Not managed'); //Todo
        }

        return $entity->getSourceField()->getCode() . '_' . $entity->getCode();
    }

    protected function buildEntityObject(array $rawEntity): AbstractEntity
    {
        /** @var SourceField $sourceField */
        $sourceField = $this->sourceFieldRepository->findByUri($rawEntity['sourceField']);
        return new SourceFieldOption(
            $sourceField,
            $rawEntity['code'],
            $rawEntity['position'],
            $rawEntity['defaultLabel'],
            $rawEntity['labels'],
            $rawEntity['id'] ?? null,
        );
    }
}
