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
use Gally\Sdk\Entity\LocalizedCatalog;
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
     * Get product recommendations for the given products from Gally.
     *
     * @param string           $recommendationType Recommender type code (ex: "related", "upsell", "crosssell")
     * @param LocalizedCatalog $localizedCatalog   Current localized catalog
     * @param string[]         $productSkus        Sku of the products to get recommendations for
     * @param int              $productCount       Max number of recommended products (also capped by Gally)
     * @param string[]         $fields             Extra GraphQL fields to fetch on each recommended product
     *                                             (ex: ["score"]); "sku" is always included
     *
     * @return array<array<string, mixed>> Recommended products data, keyed by requested $fields
     */
    public function getProductRecommendations(
        string $recommendationType,
        LocalizedCatalog $localizedCatalog,
        array $productSkus,
        int $productCount,
        array $fields = [],
    ): array {
        if (empty($productSkus)) {
            return [];
        }

        $variables = [
            'recommendationType' => $recommendationType,
            'localizedCatalog' => $localizedCatalog->getCode(),
            'productSkus' => array_values($productSkus),
            'productCount' => $productCount,
        ];

        $selectedFields = implode(' ', array_unique(['sku', ...$fields]));
        $query = <<<GQL
            query getProductRecommendations (
                \$recommendationType: String!,
                \$localizedCatalog: String!,
                \$productSkus: [String!]!,
                \$productCount: Int!,
            ) {
                productRecommendations (
                    recommendationType: \$recommendationType,
                    localizedCatalog: \$localizedCatalog,
                    productSkus: \$productSkus,
                    productCount: \$productCount,
                ) {
                    $selectedFields
                }
            }
        GQL;

        $response = $this->client->graphql($query, $variables, [], false);

        return $response['data']['productRecommendations'] ?? [];
    }
}
