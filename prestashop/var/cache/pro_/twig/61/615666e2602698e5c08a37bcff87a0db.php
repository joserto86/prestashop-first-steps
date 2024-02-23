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

/* @Modules/psgdpr/views/css/customerPersonalData.css */
class __TwigTemplate_780f9274b072fc9b8522908591c3eef4 extends Template
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

#exportDataToCsv {
    margin-right: 10px;
    margin-left: 10px;
}
#exportDataToPdf {
    margin-right: 10px;
    margin-left: 10px;
}
.psgdprinfo17 {
    margin-top: 15px;
    margin-bottom: 15px;
    background: #f1f1f1;
    padding: 20px;
}
.psgdprgetdatabtn17 {
    float: right;
}
.psgdprinfo16 {
    margin-top: 15px;
    margin-bottom: 15px;
}
.psgdprgetdatabtn16{
    float: right;
    margin-right: 10px;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/css/customerPersonalData.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/css/customerPersonalData.css", "/var/www/html/modules/psgdpr/views/css/customerPersonalData.css");
    }
}
