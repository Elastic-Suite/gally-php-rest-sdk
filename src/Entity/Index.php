<?php
declare(strict_types=1);

namespace Gally\Sdk\Entity;

class Index extends AbstractEntity
{
    public static function getEntityCode(): string
    {
        return 'indices';
    }

    public function __construct(
        private Metadata $metadata,
        private LocalizedCatalog $localizedCatalog,
        ?int $id = null,
    ) {
        $this->id = $id;
    }

    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    public function getLocalizedCatalog(): LocalizedCatalog
    {
        return $this->localizedCatalog;
    }

    public function __toJson(): array
    {
        return [
            'entityType' => $this->getMetadata()->getEntity(),
            'localizedCatalog' => $this->getLocalizedCatalog()->getCode(),
        ];
    }
}
