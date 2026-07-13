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
 * Recommender manager service.
 */
class RecommenderManager
{
    protected Client $client;

    public function __construct(
        Configuration $configuration,
        ?CacheManagerInterface $cacheManager = null,
    ) {
        $this->client = new Client($configuration, $cacheManager);
    }

    /**
     * @param string[] $productSkus
     *
     * @return array<array{sku: ?string, score: ?float}>
     */
    public function getProductRecommendations(
        string $recommendationType,
        string $localizedCatalogCode,
        array $productSkus,
        int $productCount,
    ): array {
        $query = <<<GQL
            query getProductRecommendations(
                \$recommendationType: String!,
                \$localizedCatalog: String!,
                \$productSkus: [String!]!,
                \$productCount: Int!,
            ) {
                productRecommendations(
                    recommendationType: \$recommendationType,
                    localizedCatalog: \$localizedCatalog,
                    productSkus: \$productSkus,
                    productCount: \$productCount,
                ) {
                    sku
                    score
                }
            }
        GQL;

        $response = $this->client->graphql(
            $query,
            [
                'recommendationType' => $recommendationType,
                'localizedCatalog' => $localizedCatalogCode,
                'productSkus' => $productSkus,
                'productCount' => $productCount,
            ],
            [],
            false,
        );

        /** @var array<array{sku: ?string, score: ?float}> $recommendations */
        $recommendations = $response['data']['productRecommendations'] ?? [];

        return $recommendations;
    }
}
