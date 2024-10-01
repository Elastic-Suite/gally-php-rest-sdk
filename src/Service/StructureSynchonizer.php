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

namespace Gally\Sdk\Service;

use Gally\Sdk\Client\Configuration;
use Gally\Sdk\Client\RestClient;
use Gally\Sdk\Entity\LocalizedCatalog;
use Gally\Sdk\Entity\SourceField;
use Gally\Sdk\Entity\SourceFieldOption;
use Gally\Sdk\Repository\CatalogRepository;
use Gally\Sdk\Repository\LocalizedCatalogRepository;
use Gally\Sdk\Repository\MetadataRepository;
use Gally\Sdk\Repository\SourceFieldOptionRepository;
use Gally\Sdk\Repository\SourceFieldRepository;

/**
 * Synchronize gally catalogs structure with ecommerce data.
 */
class StructureSynchonizer
{
    private CatalogRepository $catalogRepository;
    private LocalizedCatalogRepository $localizedCatalogRepository;
    private MetadataRepository $metadataRepository;
    private SourceFieldRepository $sourceFieldRepository;
    private SourceFieldOptionRepository $sourceFieldOptionRepository;

    public function __construct(
        Configuration $configuration,
        string        $environment
    ) {
        $client = new RestClient($configuration, $environment);
        $this->catalogRepository = new CatalogRepository($client);
        $this->localizedCatalogRepository = new LocalizedCatalogRepository($client, $this->catalogRepository);
        $this->metadataRepository = new MetadataRepository($client);
        $this->sourceFieldRepository = new SourceFieldRepository($client, $this->metadataRepository);
        $this->sourceFieldOptionRepository = new SourceFieldOptionRepository($client, $this->sourceFieldRepository);
    }

    /**
     * @param iterable<LocalizedCatalog> $localizedCatalogs
     */
    public function syncAllLocalizedCatalogs(iterable $localizedCatalogs): void
    {
        $this->catalogRepository->findAll();
        $this->localizedCatalogRepository->findAll();

        foreach ($localizedCatalogs as $localizedCatalog) {
            $this->syncLocalizedCatalog($localizedCatalog);
        }
    }

    public function syncLocalizedCatalog(LocalizedCatalog $localizedCatalog): LocalizedCatalog
    {
        if (!$localizedCatalog->getCatalog()->getId()) {
            $this->catalogRepository->createOrUpdate($localizedCatalog->getCatalog());
        }

        /** @var LocalizedCatalog $localizedCatalog */
        $localizedCatalog = $this->localizedCatalogRepository->createOrUpdate($localizedCatalog);

        return $localizedCatalog;
    }

    /**
     * @param iterable<SourceField> $sourceFields
     */
    public function syncAllSourceFields(iterable $sourceFields): void
    {
        $this->metadataRepository->findAll();
        $this->localizedCatalogRepository->findAll();

        foreach ($sourceFields as $sourceField) {
            $this->syncSourceField($sourceField);
        }

        $this->sourceFieldRepository->runBulk();
    }

    public function syncSourceField(SourceField $sourceField): void
    {
        // Prevent connector to try to update system sourceFields.
        if ($this->isSystem($sourceField)) {
            return;
        }

        if (!$sourceField->getMetadata()->getId()) {
            $this->metadataRepository->createOrUpdate($sourceField->getMetadata());
        }

        // Replace localized catalog by an instance with id.
        foreach ($sourceField->getLabels() as $label) {
            $label->setLocalizedCatalog($this->localizedCatalogRepository->findByIdentity($label->getLocalizedCatalog()));
        }

        $this->sourceFieldRepository->addEntityToBulk($sourceField);
    }

    /**
     * @param iterable<SourceFieldOption> $sourceFieldOptions
     */
    public function syncAllSourceFieldOptions(iterable $sourceFieldOptions): void
    {
        $this->metadataRepository->findAll();
        $this->sourceFieldRepository->findAll();
        $this->localizedCatalogRepository->findAll();

        foreach ($sourceFieldOptions as $sourceFieldOption) {
            $this->syncSourceFieldOption($sourceFieldOption);
        }

        $this->sourceFieldOptionRepository->runBulk();
    }

    public function syncSourceFieldOption(SourceFieldOption $sourceFieldOption): void
    {
        $sourceFieldOption->setSourceField($this->sourceFieldRepository->findByIdentity($sourceFieldOption->getSourceField()));

        // Replace localized catalog by an instance with id.
        foreach ($sourceFieldOption->getLabels() as $label) {
            $label->setLocalizedCatalog($this->localizedCatalogRepository->findByIdentity($label->getLocalizedCatalog()));
        }

        $this->sourceFieldOptionRepository->addEntityToBulk($sourceFieldOption);
    }

    /**
     * Todo fetch this data from api ?
     */
    private function isSystem(SourceField $sourceField): bool
    {
        if ('product' === $sourceField->getMetadata()->getEntity()) {
            return in_array(
                $sourceField->getCode(),
                [
                    'code',
                    'id',
                    'sku',
                    'category',
                    'name',
                    'price',
                    'image',
                    'stock',
                    'description',
                ]
            );
        } elseif ('category' === $sourceField->getMetadata()->getEntity()) {
            return in_array(
                $sourceField->getCode(),
                [
                    'code',
                    'id',
                    'parentId',
                    'path',
                    'level',
                    'name',
                ]
            );
        }

        return false;
    }

    public function cleanAll(bool $dryRun = true, bool $quiet = false): void
    {
        // Todo
//        $this->fetchEntities();
//
//        $this->catalogCodes = array_flip($this->getAllEntityCodes());
//        $this->localizedCatalogSynchronizer->fetchEntities();
//        $this->localizedCatalogCodes = array_flip($this->localizedCatalogSynchronizer->getAllEntityCodes());
//
//        $criteria = new Criteria();
//        $criteria->addAssociations(['language', 'languages', 'languages.locale', 'currency']);
//
//        /** @var SalesChannelCollection $salesChannels */
//        $salesChannels = $this->entityRepository->search($criteria, $context)->getEntities();
//
//        /** @var SalesChannelEntity $salesChannel */
//        foreach ($salesChannels as $salesChannel) {
//            if ($this->configuration->isActive($salesChannel->getId())) {
//                /** @var LanguageEntity $language */
//                foreach ($salesChannel->getLanguages() as $language) {
//                    unset($this->localizedCatalogCodes[$salesChannel->getId() . $language->getId()]);
//                }
//                unset($this->catalogCodes[$salesChannel->getId()]);
//            }
//        }
//
//        foreach (array_flip($this->localizedCatalogCodes) as $localizedCatalogCode) {
//            /** @var LocalizedCatalogCatalogRead $localizedCatalog */
//            $localizedCatalog = $this->localizedCatalogSynchronizer->getEntityFromApi($localizedCatalogCode);
//            if (!$quiet) {
//                print("  Delete localized catalog {$localizedCatalog->getId()}\n");
//            }
//            if (!$dryRun) {
//                $this->localizedCatalogSynchronizer->deleteEntity($localizedCatalog->getId());
//            }
//        }
//
//        foreach (array_flip($this->catalogCodes) as $catalogCode) {
//            /** @var CatalogCatalogRead $catalog */
//            $catalog = $this->getEntityFromApi($catalogCode);
//            if (!$quiet) {
//                print("  Delete catalog {$catalog->getId()}\n");
//            }
//            if (!$dryRun) {
//                $this->deleteEntity($catalog->getId());
//            }
//        }
    }
}
