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

abstract class AbstractCacheManager implements CacheManagerInterface
{
    protected function getPrefix(): string
    {
        return 'gally';
    }

    private function buildKey(string $cacheKey): string
    {
        return $this->getPrefix() . '_' . $cacheKey;
    }

    abstract protected function doGet(string $cacheKey, callable $callback, ?int $ttl): mixed;

    abstract protected function doClear(string $cacheKey): void;

    final public function get(string $cacheKey, callable $callback, ?int $ttl = null): mixed
    {
        return $this->doGet($this->buildKey($cacheKey), $callback, $ttl);
    }

    final public function clearCache(string $cacheKey): void
    {
        $this->doClear($this->buildKey($cacheKey));
    }
}
