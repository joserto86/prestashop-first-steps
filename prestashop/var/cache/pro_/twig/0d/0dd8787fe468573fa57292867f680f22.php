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

/* @Modules/blockwishlist/views/templates/hook/displayHeader.tpl */
class __TwigTemplate_0687727ae040d079cafbeafca562206b extends Template
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
        echo "{**
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
 *}

{if \$context === \"product\"}
  {include file=\"module:blockwishlist/views/templates/components/modals/add-to-wishlist.tpl\" url=\$url addUrl=\$addUrl newWishlistCTA=\$newWishlistCTA}
  {include file=\"module:blockwishlist/views/templates/components/modals/create.tpl\" url=\$createUrl}
  {include file=\"module:blockwishlist/views/templates/components/modals/login.tpl\"}
  {include file=\"module:blockwishlist/views/templates/components/toast.tpl\"}
{else}
  {include file=\"module:blockwishlist/views/templates/components/modals/add-to-wishlist.tpl\" url=\$url addUrl=\$addUrl newWishlistCTA=\$newWishlistCTA}
  {include file=\"module:blockwishlist/views/templates/components/modals/delete.tpl\" listUrl=\$deleteListUrl productUrl=\$deleteProductUrl}
  {include file=\"module:blockwishlist/views/templates/components/modals/create.tpl\" url=\$createUrl}
  {include file=\"module:blockwishlist/views/templates/components/modals/login.tpl\"}
  {include file=\"module:blockwishlist/views/templates/components/toast.tpl\"}
{/if}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/hook/displayHeader.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/views/templates/hook/displayHeader.tpl", "/var/www/html/modules/blockwishlist/views/templates/hook/displayHeader.tpl");
    }
}
