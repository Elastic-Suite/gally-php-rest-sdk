<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Gally to newer versions in the future.
 *
 * @package   Gally
 * @author    Gally Team <elasticsuite@smile.fr>
 * @copyright 2024-present Smile
 * @license   Open Software License v. 3.0 (OSL-3.0)
 */

namespace Gally\Sdk\Service\Cache;

interface CacheManagerInterface
{
    public function get(string $cacheKey, callable $callback, ?int $ttl = null): mixed;

    public function clearCache(string $cacheKey): void;
}
