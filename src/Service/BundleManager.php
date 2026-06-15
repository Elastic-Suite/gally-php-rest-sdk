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

namespace Gally\Sdk\Service;

use Gally\Sdk\Client\Client;
use Gally\Sdk\Client\Configuration;
use Gally\Sdk\Service\Cache\CacheManagerInterface;

/**
 * Search manager service.
 */
class BundleManager
{
    public const BUNDLES_CACHE_KEY = 'bundles';

    public const TERM_SUGGESTION_BUNDLE_NAME = 'GallyTermSuggestionBundle';

    protected Client $client;

    /** @var array<string, true> */
    private array $bundles = [];

    public function __construct(
        Configuration $configuration,
        private readonly ?CacheManagerInterface $cacheManager = null,
    ) {
        $client = new Client($configuration, $cacheManager);
        $this->client = $client;
    }

    /**
     * @return array<string, true>
     */
    public function getBundles(): array
    {
        if ([] === $this->bundles) {
            if ($this->cacheManager instanceof CacheManagerInterface) {
                $result = $this->cacheManager->get(self::BUNDLES_CACHE_KEY, [$this, 'fetchBundles']);
                $this->bundles = \is_array($result) ? $result : [];
            } else {
                $this->bundles = $this->fetchBundles();
            }
        }

        return $this->bundles;
    }

    public function hasBundle(string $bundleName): bool
    {
        return isset($this->getBundles()[$bundleName]);
    }

    public function fetchBundles(): array
    {
        $query = <<<GQL
                    query extraBundles {
                        extraBundles {
                            name
                        }
                    }
                GQL;

        $bundles = $this->client->graphql($query, [], [], false);

        return array_fill_keys(array_column($bundles['data']['extraBundles'], 'name'), true);
    }
}
