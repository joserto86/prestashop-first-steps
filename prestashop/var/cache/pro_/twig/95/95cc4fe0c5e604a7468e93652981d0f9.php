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

/* @Modules/blockwishlist/config/services.yml */
class __TwigTemplate_d2a1d0ca41af01425c70b52f8c1190dd extends Template
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
        echo "services:
  # Controller
  PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController:
    public: true
    class: PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController
    arguments:
      - '@doctrine.cache.provider'
      - '@=service(\"prestashop.adapter.shop.context\").getContextShopID()'

  # Calculator
  prestashop.module.blockwishlist.calculator.statistics_calculator:
    public: true
    class: PrestaShop\\Module\\BlockWishList\\Calculator\\StatisticsCalculator
    arguments:
      - '@prestashop.adapter.legacy.context' #used for product presenter
      - '@=service(\"prestashop.core.localization.locale.repository\").getLocale(service(\"prestashop.adapter.legacy.context\").getContext().language.getLocale())' # From PS 1.7.7: \"@prestashop.core.localization.locale.context_locale\"

  # Grid Definition
  prestashop.module.blockwishlist.grid.all_time_statistics_grid_definition_factory:
    public: true
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Definition\\AllTimeStatisticsGridDefinitionFactory'
    parent: 'prestashop.core.grid.definition.factory.abstract_grid_definition'

  prestashop.module.blockwishlist.grid.current_year_statistics_grid_definition_factory:
    public: true
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Definition\\CurrentYearStatisticsGridDefinitionFactory'
    parent: 'prestashop.core.grid.definition.factory.abstract_grid_definition'

  prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory:
    public: true
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Definition\\CurrentMonthStatisticsGridDefinitionFactory'
    parent: 'prestashop.core.grid.definition.factory.abstract_grid_definition'

  prestashop.module.blockwishlist.grid.current_day_statistics_grid_definition_factory:
    public: true
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Definition\\CurrentDayStatisticsGridDefinitionFactory'
    parent: 'prestashop.core.grid.definition.factory.abstract_grid_definition'

  # Grid Data Factories
  prestashop.module.blockwishlist.grid.all_time_statistics_data_factory:
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Data\\AllTimeStatisticsGridDataFactory'
    arguments:
        - '@doctrine.cache.provider'
        - '@prestashop.module.blockwishlist.calculator.statistics_calculator'
        - '@=service(\"prestashop.adapter.shop.context\").getContextShopID()'

  prestashop.module.blockwishlist.grid.current_year_statistics_data_factory:
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Data\\CurrentYearStatisticsGridDataFactory'
    arguments:
        - '@doctrine.cache.provider'
        - '@prestashop.module.blockwishlist.calculator.statistics_calculator'
        - '@=service(\"prestashop.adapter.shop.context\").getContextShopID()'

  prestashop.module.blockwishlist.grid.current_month_statistics_data_factory:
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Data\\CurrentMonthStatisticsGridDataFactory'
    arguments:
        - '@doctrine.cache.provider'
        - '@prestashop.module.blockwishlist.calculator.statistics_calculator'
        - '@=service(\"prestashop.adapter.shop.context\").getContextShopID()'

  prestashop.module.blockwishlist.grid.current_day_statistics_data_factory:
    class: 'PrestaShop\\Module\\BlockWishList\\Grid\\Data\\CurrentDayStatisticsGridDataFactory'
    arguments:
        - '@doctrine.cache.provider'
        - '@prestashop.module.blockwishlist.calculator.statistics_calculator'
        - '@=service(\"prestashop.adapter.shop.context\").getContextShopID()'

  # Grid Factories
  prestashop.module.blockwishlist.grid.all_time_stastistics_grid_factory:
    public: true
    class: 'PrestaShop\\PrestaShop\\Core\\Grid\\GridFactory'
    arguments:
        - '@prestashop.module.blockwishlist.grid.all_time_statistics_grid_definition_factory'
        - '@prestashop.module.blockwishlist.grid.all_time_statistics_data_factory'
        - '@prestashop.core.grid.filter.form_factory'
        - '@prestashop.core.hook.dispatcher'

  prestashop.module.blockwishlist.grid.current_year_stastistics_grid_factory:
    public: true
    class: 'PrestaShop\\PrestaShop\\Core\\Grid\\GridFactory'
    arguments:
        - '@prestashop.module.blockwishlist.grid.current_year_statistics_grid_definition_factory'
        - '@prestashop.module.blockwishlist.grid.current_year_statistics_data_factory'
        - '@prestashop.core.grid.filter.form_factory'
        - '@prestashop.core.hook.dispatcher'

  prestashop.module.blockwishlist.grid.current_month_stastistics_grid_factory:
    public: true
    class: 'PrestaShop\\PrestaShop\\Core\\Grid\\GridFactory'
    arguments:
        - '@prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory'
        - '@prestashop.module.blockwishlist.grid.current_month_statistics_data_factory'
        - '@prestashop.core.grid.filter.form_factory'
        - '@prestashop.core.hook.dispatcher'

  prestashop.module.blockwishlist.grid.current_day_stastistics_grid_factory:
    public: true
    class: 'PrestaShop\\PrestaShop\\Core\\Grid\\GridFactory'
    arguments:
        - '@prestashop.module.blockwishlist.grid.current_day_statistics_grid_definition_factory'
        - '@prestashop.module.blockwishlist.grid.current_day_statistics_data_factory'
        - '@prestashop.core.grid.filter.form_factory'
        - '@prestashop.core.hook.dispatcher'
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/config/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/config/services.yml", "/var/www/html/modules/blockwishlist/config/services.yml");
    }
}
