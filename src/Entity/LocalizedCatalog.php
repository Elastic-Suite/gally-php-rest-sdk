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

namespace Gally\Sdk\Entity;

class LocalizedCatalog extends AbstractEntity
{
    public static function getEntityCode(): string
    {
        return 'localized_catalogs';
    }

    public function __construct(
        private Catalog $catalog,
        private string $code,
        private string $name,
        private string $locale,
        private string $currency,
        ?int $id = null,
    ) {
        $this->id = $id;
    }

    public function getCatalog(): Catalog|string
    {
        return $this->catalog;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function __toJson(): array
    {
        return [
            'code' => $this->getCode(),
            'name' => $this->getName(),
            'locale' => $this->getLocale(),
            'currency' => $this->getCurrency(),
            'catalog' => (string) $this->getCatalog(),
        ];
    }
}
