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
use Gally\Sdk\Entity\Catalog;
use Gally\Sdk\Entity\LocalizedCatalog;

/**
 * Localized Catalog repository
 */
class LocalizedCatalogRepository extends AbstractRepository
{
    private CatalogRepository $catalogRepository;

    public function __construct(Configuration $configuration, string $environment)
    {
        parent::__construct($configuration, $environment);
        $this->catalogRepository = new CatalogRepository($configuration, $environment);
    }

    public function getEntityCode(): string
    {
        return LocalizedCatalog::getEntityCode();
    }

    public function getIdentity(AbstractEntity $entity): string
    {
        if (!$entity instanceof LocalizedCatalog) {
            throw new \InvalidArgumentException('Not managed'); //Todo
        }

        return $entity->getCode();
    }

    protected function buildEntityObject(array $rawEntity): AbstractEntity
    {
        /** @var Catalog $catalog */
        $catalog = $this->catalogRepository->findByUri($rawEntity['catalog']);
        return new LocalizedCatalog(
            $catalog,
            $rawEntity['code'],
            $rawEntity['name'],
            $rawEntity['locale'],
            $rawEntity['currency'],
            $rawEntity['id'] ?? null,
        );
    }
}
