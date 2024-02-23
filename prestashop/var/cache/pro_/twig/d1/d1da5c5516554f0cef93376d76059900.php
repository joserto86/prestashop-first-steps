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

/* @Modules/psgdpr/views/js/menu.js */
class __TwigTemplate_f8da271f5434710b389f729448bce65c extends Template
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
        echo "/**
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
\$(window).ready(function() {
    moduleAdminLink = moduleAdminLink.replace(/\\amp;/g,'');

    window.vMenu = new Vue({
        el: '#psgdpr-menu',
        data: {
            selectedTabName : currentPage,
        },
        methods: {
            makeActive: function(item){
                this.selectedTabName = item;
                if (ps_version) { // if on 1.7
                    window.history.pushState({} , '', moduleAdminLink+'&page='+item );
                } else { // if on 1.6
                    window.history.pushState({} , '', moduleAdminLink+'&configure='+moduleName+'&module_name='+moduleName+'&page='+item );
                }
            },
            isActive : function(item){
                if (this.selectedTabName == item) {
                    \$('.psgdpr_menu').addClass('addons-hide');
                    \$('#'+item).removeClass('addons-hide');
                    return true;
                }
            }
        }
    });
});
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/js/menu.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/js/menu.js", "/var/www/html/modules/psgdpr/views/js/menu.js");
    }
}
