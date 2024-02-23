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

/* @Modules/blockwishlist/views/templates/components/toast.tpl */
class __TwigTemplate_b46201e4975fe680126e6c4c77e808b8 extends Template
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

<div
    class=\"wishlist-toast\"
    data-rename-wishlist-text=\"{l s='Wishlist name modified!' d='Modules.Blockwishlist.Shop'}\"
    data-added-wishlist-text=\"{l s='Product added to wishlist!' d='Modules.Blockwishlist.Shop'}\"
    data-create-wishlist-text=\"{l s='Wishlist created!' d='Modules.Blockwishlist.Shop'}\"
    data-delete-wishlist-text=\"{l s='Wishlist deleted!' d='Modules.Blockwishlist.Shop'}\"
    data-copy-text=\"{l s='Share link copied!' d='Modules.Blockwishlist.Shop'}\"
    data-delete-product-text=\"{l s='Product deleted!' d='Modules.Blockwishlist.Shop'}\"
  ></div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/components/toast.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/views/templates/components/toast.tpl", "/var/www/html/modules/blockwishlist/views/templates/components/toast.tpl");
    }
}
