# Gally SDK

## Debug 

```shell
doco exec --env XDEBUG_SESSION=cli php-fpm-app bin/console oro:website-search:reindex
```

## Reprendre

Indexer les status / stock / prix / visibilité
    
## Todo

- [x] Fetch one entity by code ?
- [ ] Manage update (catalog; localized catalog)
- [x] Fix source field type (names ==> select)
- [x] Source field mapping (names ==> name)
- [ ] Clean cmd
- [ ] Add code analysis tools
- [ ] https://doc.oroinc.com/bundles/commerce/CustomerRecommendationBundle/#customer-action-boost
- [ ] Feature.yml -> customer recommendation
- [x] Multi currency
- [x] Get entity code with entityAlias
- [ ] Add children data


## Oro dataprovider



❌ ✔  oro_website_search.event.index_entity

generic
    ✔ oro/commerce/src/Oro/Bundle/ProductBundle/Resources/config/services.yml                           (1 usages found)
    ✔ oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/config/services.yml                        (1 usages found)

product
    ✔ oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/config/services.yml                           (1 usages found)
    ✔ oro/commerce/src/Oro/Bundle/InventoryBundleResources/config/services.yml                          (1 usages found)
    ❌ oro/commerce/src/Oro/Bundle/ProductBundle/Resources/config/services.yml                           (5 usages found)
    ❌ oro/commerce/src/Oro/Bundle/ProductBundle/Resources/config/website_search_term.yml                (1 usages found)
    ❌ oro/commerce/src/Oro/Bundle/OrderBundleResources/config/services.yml                              (1 usages found)
    ❌ oro/commerce/src/Oro/Bundle/SEOBundle/Resources/config/services.yml                               (1 usages found)
    ❌ oro/commerce/src/Oro/Bundle/VisibilityBundle/Resources/config/services.yml                        (1 usages found)
    ✔ oro/commerce/src/Oro/Bundle/PricingBundle/Resources/config/services.yml                           (2 usages found)
    ❌ oro/commerce-enterprise/src/Oro/Bundle/CustomerRecommendationBundle/Resources/config/services.yml (2 usages found)

saved-search
    ❌ oro/commerce-enterprise/src/Oro/Bundle/WebsiteElasticSearchBundle/Resources/config/services.yml   (2 usages found)

suggestion
    ❌ oro/commerce/src/Oro/Bundle/WebsiteSearchSuggestionBundle/Resources/config/services.yml           (1 usages found)

category
    ✔ \Gally\OroPlugin\EventListener\WebsiteSearchWebCatalogIndexerListener



Troubleshooting:

- Slow sourceFIeld sync :
```yml
framework:
    translator:
        cache_dir: '%kernel.cache_dir%/translations'
```
