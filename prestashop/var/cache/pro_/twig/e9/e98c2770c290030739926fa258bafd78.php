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

/* @Modules/ps_distributionapiclient/src/ShopDataProvider.php */
class __TwigTemplate_85ae10d96156d68109b1980f3b60e165 extends Template
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
declare(strict_types=1);

namespace PrestaShop\\Module\\DistributionApiClient;

use Context;
use Link;
use RuntimeException;

/**
 * Provides information about the shop, to be added to API calls
 */
class ShopDataProvider
{
    /**
     * Returns the default URL to shop's Front office
     *
     * @return string
     */
    public function getShopUrl(): string
    {
        \$context = Context::getContext();
        if (!\$context instanceof Context || !\$context->link instanceof Link) {
            throw new RuntimeException('Unable to retrieve the contextual Link instance');
        }

        return \$context->link->getBaseLink();
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/src/ShopDataProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_distributionapiclient/src/ShopDataProvider.php", "/var/www/html/modules/ps_distributionapiclient/src/ShopDataProvider.php");
    }
}
