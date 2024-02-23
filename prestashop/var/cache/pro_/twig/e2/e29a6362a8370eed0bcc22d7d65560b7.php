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

/* @Modules/blockwishlist/config/routes.yml */
class __TwigTemplate_50e2c9fdbcae7bd2a4409d219b4e8128 extends Template
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
        echo "blockwishlist_configuration:
  path: blockwishlist/configuration
  methods: [GET, POST]
  defaults:
    _controller: PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController::configurationAction
    _legacy_controller: 'WishlistConfigurationAdminController'
    _legacy_link: 'WishlistConfigurationAdminController'

blockwishlist_statistics:
  path: blockwishlist/statistics
  methods: [GET]
  defaults:
    _controller: PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController::statisticsAction
    _legacy_controller: 'WishlistStatisticsAdminController'
    _legacy_link: 'WishlistStatisticsAdminController'

blockwishlist_statistics_reset:
  path: blockwishlist/statistics/reset
  methods: [POST]
  defaults:
    _controller: PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController::resetStatisticsCacheAction
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/config/routes.yml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/config/routes.yml", "/var/www/html/modules/blockwishlist/config/routes.yml");
    }
}
