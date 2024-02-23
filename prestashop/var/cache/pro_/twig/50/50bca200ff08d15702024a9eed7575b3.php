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

/* @Modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl */
class __TwigTemplate_16e9ffabd31a1a088d98879f72807c5d extends Template
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

<div class=\"blockreassurance_product\">
    {foreach from=\$blocks item=\$block key=\$key}
        <div{if \$block['type_link'] !== \$LINK_TYPE_NONE && !empty(\$block['link'])} style=\"cursor:pointer;\" onclick=\"window.open('{\$block['link']}')\"{/if}>
            <span class=\"item-product\">
                {if \$block['icon'] != 'undefined'}
                    {if \$block['custom_icon']}
                    <img {if \$block['is_svg']}class=\"svg invisible\" {/if}src=\"{\$block['custom_icon']}\">
                    {elseif \$block['icon']}
                    <img class=\"svg invisible\" src=\"{\$block['icon']}\">
                    {/if}
                {/if}&nbsp;
            </span>
            {if empty(\$block['description'])}
              <p class=\"block-title\" style=\"color:{\$textColor};\">{\$block['title']}</p>
            {else}
              <span class=\"block-title\" style=\"color:{\$textColor};\">{\$block['title']}</span>
              <p style=\"color:{\$textColor};\">{\$block['description'] nofilter}</p>
            {/if}
        </div>
    {/foreach}
    <div class=\"clearfix\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl", "/var/www/html/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl");
    }
}
