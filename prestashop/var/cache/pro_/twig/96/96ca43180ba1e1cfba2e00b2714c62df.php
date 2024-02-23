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

/* @Modules/productcomments/views/templates/hook/product-additional-info-quickview.tpl */
class __TwigTemplate_3f5fa55424ef727043eab5e1fbc745f0 extends Template
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

{if \$nb_comments != 0}
  <script type=\"text/javascript\">    
    \$('#product-quickview-{\$product.id}').insertAfter(\$('.quickview #product-description-short'));
    \$('#product-quickview-{\$product.id} .grade-stars').rating({ grade: {\$average_grade} });
    \$('#product-quickview-{\$product.id} .comments-nb').html('({\$nb_comments})');
  </script>

  <div id=\"product-quickview-{\$product.id}\" class=\"product-quickview-review\">
    <div class=\"grade-stars\"></div>
    <div class=\"comments-nb\"></div>
  </div>
</div>
{/if}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/views/templates/hook/product-additional-info-quickview.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/views/templates/hook/product-additional-info-quickview.tpl", "/var/www/html/modules/productcomments/views/templates/hook/product-additional-info-quickview.tpl");
    }
}
