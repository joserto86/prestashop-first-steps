<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_facetedsearch/src/Filters/Converter.php */
class __TwigTemplate_e416e845306e0d993fef4b822ad04e60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch\\Filters;

use Category;
use Configuration;
use Context;
use Db;
use Manufacturer;
use PrestaShop\\Module\\FacetedSearch\\Definition\\Availability;
use PrestaShop\\Module\\FacetedSearch\\Filters;
use PrestaShop\\Module\\FacetedSearch\\URLSerializer;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\Facet;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\Filter;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\ProductSearchQuery;

class Converter
{
    const WIDGET_TYPE_CHECKBOX = 0;
    const WIDGET_TYPE_RADIO = 1;
    const WIDGET_TYPE_DROPDOWN = 2;
    const WIDGET_TYPE_SLIDER = 3;

    const TYPE_ATTRIBUTE_GROUP = 'id_attribute_group';
    const TYPE_AVAILABILITY = 'availability';
    const TYPE_CATEGORY = 'category';
    const TYPE_CONDITION = 'condition';
    const TYPE_FEATURE = 'id_feature';
    const TYPE_MANUFACTURER = 'manufacturer';
    const TYPE_PRICE = 'price';
    const TYPE_WEIGHT = 'weight';
    const TYPE_EXTRAS = 'extras';

    const PROPERTY_URL_NAME = 'url_name';
    const PROPERTY_COLOR = 'color';
    const PROPERTY_TEXTURE = 'texture';

    /**
     * @var array
     */
    const RANGE_FILTERS = [self::TYPE_PRICE, self::TYPE_WEIGHT];

    /**
     * @var Context
     */
    protected \$context;

    /**
     * @var Db
     */
    protected \$database;

    /**
     * @var URLSerializer
     */
    protected \$urlSerializer;

    /**
     * @var Filters\\DataAccessor
     */
    private \$dataAccessor;

    /**
     * @var Filters\\Provider
     */
    private \$provider;

    public function __construct(
        Context \$context,
        Db \$database,
        URLSerializer \$urlSerializer,
        Filters\\DataAccessor \$dataAccessor,
        Filters\\Provider \$provider
    ) {
        \$this->context = \$context;
        \$this->database = \$database;
        \$this->urlSerializer = \$urlSerializer;
        \$this->dataAccessor = \$dataAccessor;
        \$this->provider = \$provider;
    }

    public function getFacetsFromFilterBlocks(array \$filterBlocks)
    {
        \$facets = [];

        foreach (\$filterBlocks as \$filterBlock) {
            if (empty(\$filterBlock)) {
                // Empty filter, let's continue
                continue;
            }

            \$facet = new Facet();
            \$facet
                ->setLabel(\$filterBlock['name'])
                ->setProperty('filter_show_limit', \$filterBlock['filter_show_limit'])
                ->setMultipleSelectionAllowed(true);

            switch (\$filterBlock['type']) {
                case self::TYPE_CATEGORY:
                case self::TYPE_CONDITION:
                case self::TYPE_EXTRAS:
                case self::TYPE_MANUFACTURER:
                case self::TYPE_AVAILABILITY:
                case self::TYPE_ATTRIBUTE_GROUP:
                case self::TYPE_FEATURE:
                    \$type = \$filterBlock['type'];
                    if (\$filterBlock['type'] == self::TYPE_ATTRIBUTE_GROUP) {
                        \$type = 'attribute_group';
                        \$facet->setProperty(self::TYPE_ATTRIBUTE_GROUP, \$filterBlock['id_key']);
                        if (isset(\$filterBlock['url_name'])) {
                            \$facet->setProperty(self::PROPERTY_URL_NAME, \$filterBlock['url_name']);
                        }
                    } elseif (\$filterBlock['type'] == self::TYPE_FEATURE) {
                        \$type = 'feature';
                        \$facet->setProperty(self::TYPE_FEATURE, \$filterBlock['id_key']);
                        if (isset(\$filterBlock['url_name'])) {
                            \$facet->setProperty(self::PROPERTY_URL_NAME, \$filterBlock['url_name']);
                        }
                    }

                    \$facet->setType(\$type);
                    \$filters = [];
                    foreach (\$filterBlock['values'] as \$id => \$filterArray) {
                        \$filter = new Filter();
                        \$filter
                            ->setType(\$type)
                            ->setLabel(\$filterArray['name'])
                            ->setMagnitude(\$filterArray['nbr'])
                            ->setValue(\$id);

                        if (isset(\$filterArray['url_name'])) {
                            \$filter->setProperty(self::PROPERTY_URL_NAME, \$filterArray['url_name']);
                        }

                        if (array_key_exists('checked', \$filterArray)) {
                            \$filter->setActive(\$filterArray['checked']);
                        }

                        if (isset(\$filterArray['color'])) {
                            if (\$filterArray['color'] != '') {
                                \$filter->setProperty(self::PROPERTY_COLOR, \$filterArray['color']);
                            } elseif (file_exists(_PS_COL_IMG_DIR_ . \$id . '.jpg')) {
                                \$filter->setProperty(self::PROPERTY_TEXTURE, _THEME_COL_DIR_ . \$id . '.jpg');
                            }
                        }

                        \$filters[] = \$filter;
                    }

                    if ((int) \$filterBlock['filter_show_limit'] !== 0) {
                        usort(\$filters, [\$this, 'sortFiltersByMagnitude']);
                    }

                    \$this->hideZeroValuesAndShowLimit(\$filters, (int) \$filterBlock['filter_show_limit']);

                    if ((int) \$filterBlock['filter_show_limit'] !== 0 ||
                        (\$filterBlock['type'] !== self::TYPE_ATTRIBUTE_GROUP && \$filterBlock['type'] !== self::TYPE_AVAILABILITY)
                    ) {
                        usort(\$filters, [\$this, 'sortFiltersByLabel']);
                    }

                    // No method available to add all filters
                    foreach (\$filters as \$filter) {
                        \$facet->addFilter(\$filter);
                    }
                    break;
                case self::TYPE_WEIGHT:
                case self::TYPE_PRICE:
                    \$facet
                        ->setType(\$filterBlock['type'])
                        ->setProperty('min', \$filterBlock['min'])
                        ->setProperty('max', \$filterBlock['max'])
                        ->setProperty('unit', \$filterBlock['unit'])
                        ->setProperty('specifications', \$filterBlock['specifications'])
                        ->setMultipleSelectionAllowed(false)
                        ->setProperty('range', true);

                    \$filter = new Filter();
                    \$filter
                        ->setActive(\$filterBlock['value'] !== null)
                        ->setType(\$filterBlock['type'])
                        ->setMagnitude(\$filterBlock['nbr'])
                        ->setProperty('symbol', \$filterBlock['unit'])
                        ->setValue(\$filterBlock['value']);

                    \$facet->addFilter(\$filter);

                    break;
            }

            switch ((int) \$filterBlock['filter_type']) {
                case self::WIDGET_TYPE_CHECKBOX:
                    \$facet->setMultipleSelectionAllowed(true);
                    \$facet->setWidgetType('checkbox');
                    break;
                case self::WIDGET_TYPE_RADIO:
                    \$facet->setMultipleSelectionAllowed(false);
                    \$facet->setWidgetType('radio');
                    break;
                case self::WIDGET_TYPE_DROPDOWN:
                    \$facet->setMultipleSelectionAllowed(false);
                    \$facet->setWidgetType('dropdown');
                    break;
                case self::WIDGET_TYPE_SLIDER:
                    \$facet->setMultipleSelectionAllowed(false);
                    \$facet->setWidgetType('slider');
                    break;
            }

            \$facets[] = \$facet;
        }

        return \$facets;
    }

    /**
     * This method is responsible of parsing the search filters sent in the query.
     * These filters come from the URL in 99 % of cases.
     *
     * It will unserialize it and convert it to actual unique and valid values that
     * we will later use to construct the database query. All invalid filters in the
     * query (unknown value, deleted in shop etc.) are ignored.
     *
     * Filters that are found (if any) will be later used in initSearch method, along
     * with some predefined ones related the the controller we are on.
     *
     * @param ProductSearchQuery \$query
     *
     * @return array
     */
    public function createFacetedSearchFiltersFromQuery(ProductSearchQuery \$query)
    {
        \$idShop = (int) \$this->context->shop->id;
        \$idLang = (int) \$this->context->language->id;

        // Get category ID from the query or home category as a fallback
        \$idCategory = (int) \$query->getIdCategory();
        if (empty(\$idCategory)) {
            \$idCategory = (int) Configuration::get('PS_HOME_CATEGORY');
        }

        \$searchFilters = [];

        // Get filters configured in module settings for the current query
        \$configuredFilters = \$this->provider->getFiltersForQuery(\$query, \$idShop);

        /*
         * Parses submitted encoded facets from (URL) string into a nice array.
         *
         * Facets are set to the URL with a textual representation. This unfortunately does not
         * work very well, because there could be duplicate values for both facet and filter.
         * For example, if there are two features, feature values or categories with the same name.
         */
        \$receivedFilters = \$this->urlSerializer->unserialize(\$query->getEncodedFacets());

        // Go through filters that are configured and find out which should be activated,
        // depending on what was provided in the encodedFacets.
        foreach (\$configuredFilters as \$filter) {
            \$filterLabel = \$this->convertFilterTypeToLabel(\$filter['type']);

            switch (\$filter['type']) {
                case self::TYPE_MANUFACTURER:
                    if (!isset(\$receivedFilters[\$filterLabel])) {
                        // No need to filter if no information
                        continue 2;
                    }

                    \$manufacturers = Manufacturer::getManufacturers(false, \$idLang);
                    \$searchFilters[\$filter['type']] = [];
                    foreach (\$manufacturers as \$manufacturer) {
                        if (in_array(\$manufacturer['name'], \$receivedFilters[\$filterLabel])) {
                            \$searchFilters[\$filter['type']][\$manufacturer['name']] = \$manufacturer['id_manufacturer'];
                        }
                    }
                    break;
                case self::TYPE_AVAILABILITY:
                    if (!isset(\$receivedFilters[\$filterLabel])) {
                        // No need to filter if no information
                        continue 2;
                    }

                    \$quantityArray = [
                        \$this->context->getTranslator()->trans(
                            'Not available',
                            [],
                            'Modules.Facetedsearch.Shop'
                        ) => Availability::NOT_AVAILABLE,
                        \$this->context->getTranslator()->trans(
                            'Available',
                            [],
                            'Modules.Facetedsearch.Shop'
                        ) => Availability::AVAILABLE,
                        \$this->context->getTranslator()->trans(
                            'In stock',
                            [],
                            'Modules.Facetedsearch.Shop'
                        ) => Availability::IN_STOCK,
                    ];

                    \$searchFilters[\$filter['type']] = [];
                    foreach (\$quantityArray as \$quantityName => \$quantityId) {
                        if (isset(\$receivedFilters[\$filterLabel]) && in_array(\$quantityName, \$receivedFilters[\$filterLabel])) {
                            \$searchFilters[\$filter['type']][] = \$quantityId;
                        }
                    }
                    break;
                case self::TYPE_CONDITION:
                    if (!isset(\$receivedFilters[\$filterLabel])) {
                        // No need to filter if no information
                        continue 2;
                    }

                    \$conditionArray = [
                        \$this->context->getTranslator()->trans(
                            'New',
                            [],
                            'Modules.Facetedsearch.Shop'
                        ) => 'new',
                        \$this->context->getTranslator()->trans(
                            'Used',
                            [],
                            'Modules.Facetedsearch.Shop'
                        ) => 'used',
                        \$this->context->getTranslator()->trans(
                            'Refurbished',
                            [],
                            'Modules.Facetedsearch.Shop'
                        ) => 'refurbished',
                    ];

                    \$searchFilters[\$filter['type']] = [];
                    foreach (\$conditionArray as \$conditionName => \$conditionId) {
                        if (isset(\$receivedFilters[\$filterLabel]) && in_array(\$conditionName, \$receivedFilters[\$filterLabel])) {
                            \$searchFilters[\$filter['type']][] = \$conditionId;
                        }
                    }
                    break;
                case self::TYPE_EXTRAS:
                        if (!isset(\$receivedFilters[\$filterLabel])) {
                            // No need to filter if no information
                            continue 2;
                        }

                        \$extrasOptions = [
                            \$this->context->getTranslator()->trans(
                                'New product',
                                [],
                                'Modules.Facetedsearch.Shop'
                            ) => 'new',
                            \$this->context->getTranslator()->trans(
                                'On sale',
                                [],
                                'Modules.Facetedsearch.Shop'
                            ) => 'sale',
                            \$this->context->getTranslator()->trans(
                                'Discounted',
                                [],
                                'Modules.Facetedsearch.Shop'
                            ) => 'discount',
                        ];

                        \$searchFilters[\$filter['type']] = [];
                        foreach (\$extrasOptions as \$extrasOption => \$optionId) {
                            if (isset(\$receivedFilters[\$filterLabel]) && in_array(\$extrasOption, \$receivedFilters[\$filterLabel])) {
                                \$searchFilters[\$filter['type']][] = \$optionId;
                            }
                        }
                        break;
                case self::TYPE_FEATURE:
                    \$features = \$this->dataAccessor->getFeatures(\$idLang);
                    foreach (\$features as \$feature) {
                        if (\$filter['id_value'] != \$feature['id_feature']) {
                            continue;
                        }

                        if (isset(\$receivedFilters[\$feature['url_name']])) {
                            \$featureValueLabels = \$receivedFilters[\$feature['url_name']];
                        } elseif (isset(\$receivedFilters[\$feature['name']])) {
                            \$featureValueLabels = \$receivedFilters[\$feature['name']];
                        } else {
                            continue;
                        }

                        \$featureValues = \$this->dataAccessor->getFeatureValues(\$feature['id_feature'], \$idLang);
                        foreach (\$featureValues as \$featureValue) {
                            if (in_array(\$featureValue['url_name'], \$featureValueLabels)
                                || in_array(\$featureValue['value'], \$featureValueLabels)
                            ) {
                                \$searchFilters['id_feature'][\$feature['id_feature']][] = \$featureValue['id_feature_value'];
                            }
                        }
                    }
                    break;
                case self::TYPE_ATTRIBUTE_GROUP:
                    \$attributesGroup = \$this->dataAccessor->getAttributesGroups(\$idLang);
                    foreach (\$attributesGroup as \$attributeGroup) {
                        if (\$filter['id_value'] != \$attributeGroup['id_attribute_group']) {
                            continue;
                        }

                        if (isset(\$receivedFilters[\$attributeGroup['url_name']])) {
                            \$attributeLabels = \$receivedFilters[\$attributeGroup['url_name']];
                        } elseif (isset(\$receivedFilters[\$attributeGroup['attribute_group_name']])) {
                            \$attributeLabels = \$receivedFilters[\$attributeGroup['attribute_group_name']];
                        } else {
                            continue;
                        }

                        \$attributes = \$this->dataAccessor->getAttributes(\$idLang, \$attributeGroup['id_attribute_group']);
                        foreach (\$attributes as \$attribute) {
                            if (in_array(\$attribute['url_name'], \$attributeLabels)
                                || in_array(\$attribute['name'], \$attributeLabels)
                            ) {
                                \$searchFilters['id_attribute_group'][\$attributeGroup['id_attribute_group']][] = \$attribute['id_attribute'];
                            }
                        }
                    }
                    break;
                case self::TYPE_PRICE:
                case self::TYPE_WEIGHT:
                    if (isset(\$receivedFilters[\$filterLabel])) {
                        \$filters = \$receivedFilters[\$filterLabel];
                        if (isset(\$filters[1]) && isset(\$filters[2])) {
                            \$from = \$filters[1];
                            \$to = \$filters[2];
                            \$searchFilters[\$filter['type']][0] = \$from;
                            \$searchFilters[\$filter['type']][1] = \$to;
                        }
                    }
                    break;
                case self::TYPE_CATEGORY:
                    if (isset(\$receivedFilters[\$filterLabel])) {
                        foreach (\$receivedFilters[\$filterLabel] as \$queryFilter) {
                            /*
                             * This works only for categories that are child of the category we are browsing (or home category).
                             * Categories deeper in the tree will never be found. This could be fixed by providing a unique ID
                             * to the URL.
                             */
                            \$categories = Category::searchByNameAndParentCategoryId(\$idLang, \$queryFilter, (int) \$idCategory);
                            if (\$categories) {
                                \$searchFilters[\$filter['type']][] = \$categories['id_category'];
                            }
                        }
                    }
                    break;
                default:
                    if (isset(\$receivedFilters[\$filterLabel])) {
                        foreach (\$receivedFilters[\$filterLabel] as \$queryFilter) {
                            \$searchFilters[\$filter['type']][] = \$queryFilter;
                        }
                    }
            }
        }

        // Remove all empty selected filters
        foreach (\$searchFilters as \$key => \$value) {
            switch (\$key) {
                case self::TYPE_PRICE:
                case self::TYPE_WEIGHT:
                    if (\$value[0] === '' && \$value[1] === '') {
                        unset(\$searchFilters[\$key]);
                    }
                    break;
                default:
                    if (\$value == '' || \$value == []) {
                        unset(\$searchFilters[\$key]);
                    }
                    break;
            }
        }

        return \$searchFilters;
    }

    /**
     * Convert filter type to label
     *
     * @param string \$filterType
     */
    private function convertFilterTypeToLabel(\$filterType)
    {
        switch (\$filterType) {
            case self::TYPE_PRICE:
                return \$this->context->getTranslator()->trans('Price', [], 'Modules.Facetedsearch.Shop');
            case self::TYPE_WEIGHT:
                return \$this->context->getTranslator()->trans('Weight', [], 'Modules.Facetedsearch.Shop');
            case self::TYPE_CONDITION:
                return \$this->context->getTranslator()->trans('Condition', [], 'Modules.Facetedsearch.Shop');
            case self::TYPE_EXTRAS:
                return \$this->context->getTranslator()->trans('Selections', [], 'Modules.Facetedsearch.Shop');
            case self::TYPE_AVAILABILITY:
                return \$this->context->getTranslator()->trans('Availability', [], 'Modules.Facetedsearch.Shop');
            case self::TYPE_MANUFACTURER:
                return \$this->context->getTranslator()->trans('Brand', [], 'Modules.Facetedsearch.Shop');
            case self::TYPE_CATEGORY:
                return \$this->context->getTranslator()->trans('Categories', [], 'Modules.Facetedsearch.Shop');
            case self::TYPE_FEATURE:
            case self::TYPE_ATTRIBUTE_GROUP:
            default:
                return null;
        }
    }

    /**
     * Hide entries with 0 results
     * Hide depending of show limit parameter
     *
     * @param array \$filters
     *
     * @return array
     */
    private function hideZeroValuesAndShowLimit(array \$filters, \$showLimit)
    {
        \$count = 0;
        foreach (\$filters as \$filter) {
            if (\$filter->getMagnitude() === 0
                || (\$showLimit > 0 && \$count >= \$showLimit)
            ) {
                \$filter->setDisplayed(false);
                continue;
            }

            ++\$count;
        }

        return \$filters;
    }

    /**
     * Sort filters by magnitude
     *
     * @param Filter \$a
     * @param Filter \$b
     *
     * @return int
     */
    private function sortFiltersByMagnitude(Filter \$a, Filter \$b)
    {
        \$aMagnitude = \$a->getMagnitude();
        \$bMagnitude = \$b->getMagnitude();
        if (\$aMagnitude == \$bMagnitude) {
            // Same magnitude, sort by label
            return \$this->sortFiltersByLabel(\$a, \$b);
        }

        return \$aMagnitude > \$bMagnitude ? -1 : +1;
    }

    /**
     * Sort filters by label
     *
     * @param Filter \$a
     * @param Filter \$b
     *
     * @return int
     */
    private function sortFiltersByLabel(Filter \$a, Filter \$b)
    {
        return strnatcasecmp(\$a->getLabel(), \$b->getLabel());
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Filters/Converter.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/src/Filters/Converter.php", "/var/www/html/modules/ps_facetedsearch/src/Filters/Converter.php");
    }
}
