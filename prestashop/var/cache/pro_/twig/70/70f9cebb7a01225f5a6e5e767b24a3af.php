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

/* @Modules/blockwishlist/src/Grid/Data/BaseGridDataFactory.php */
class __TwigTemplate_9943cc8a1b7e186854a55e40eaa07a99 extends Template
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\\Module\\BlockWishList\\Grid\\Data;

use Doctrine\\Common\\Cache\\CacheProvider;
use PrestaShop\\Module\\BlockWishList\\Calculator\\StatisticsCalculator;

class BaseGridDataFactory
{
    const CACHE_KEY_STATS_CURRENT_DAY = 'blockwishlist.stats.currentDay';
    const CACHE_KEY_STATS_CURRENT_MONTH = 'blockwishlist.stats.currentMonth';
    const CACHE_KEY_STATS_CURRENT_YEAR = 'blockwishlist.stats.currentYear';
    const CACHE_KEY_STATS_ALL_TIME = 'blockwishlist.stats.allTime';

    /* @var CacheProvider \$cache */
    protected \$cache;

    /* @var StatisticsCalculator \$calculator */
    protected \$calculator;

    /**
     * @var int|null
     */
    protected \$shopId;

    public function __construct(CacheProvider \$cache, StatisticsCalculator \$calculator, \$shopId)
    {
        \$this->cache = \$cache;
        \$this->calculator = \$calculator;
        \$this->shopId = \$shopId;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/src/Grid/Data/BaseGridDataFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/src/Grid/Data/BaseGridDataFactory.php", "/var/www/html/modules/blockwishlist/src/Grid/Data/BaseGridDataFactory.php");
    }
}