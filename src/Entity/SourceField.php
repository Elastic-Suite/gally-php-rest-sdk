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

class SourceField extends AbstractEntity
{
    public const TYPE_TEXT = 'text';
    public const TYPE_KEYWORD = 'keyword';
    public const TYPE_SELECT = 'select';
    public const TYPE_INT = 'int';
    public const TYPE_BOOLEAN = 'boolean';
    public const TYPE_FLOAT = 'float';
    public const TYPE_PRICE = 'price';
    public const TYPE_STOCK = 'stock';
    public const TYPE_CATEGORY = 'category';
    public const TYPE_REFERENCE = 'reference';
    public const TYPE_IMAGE = 'image';
    public const TYPE_OBJECT = 'object';
    public const TYPE_DATE = 'date';
    public const TYPE_LOCATION = 'location';

    public static function getEntityCode(): string
    {
        return 'source_fields';
    }

    /**
     * @param Label[] $labels
     */
    public function __construct(
        private Metadata $metadata,
        private string $code,
        private string $type,
        private string $defaultLabel,
        private array $labels,
        ?int $id = null,
    ) {
        $this->id = $id;
    }

    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getDefaultLabel(): string
    {
        return $this->defaultLabel;
    }

    /**
     * @return Label[]
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    public function __toJson(): array
    {
        return [
            'metadata' => (string) $this->getMetadata(),
            'code' => $this->getCode(),
            'type' => $this->getType(),
            'defaultLabel' => $this->getDefaultLabel(),
            'labels' => array_map(
                function($label) {
                    return $label->__toJson();
                },
                $this->getLabels()
            ),
        ];
    }
}
