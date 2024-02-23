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

/* @Modules/dashgoals/controllers/admin/AdminDashgoalsController.php */
class __TwigTemplate_8f6e1fea766657f4a27f62a3ede9456e extends Template
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
 */

/**
 * @property dashgoals \$module
 */
class AdminDashgoalsController extends ModuleAdminController
{
    public function ajaxProcessChangeConfYear()
    {
        \$year = (int) Tools::getValue('year');
        Configuration::updateValue('PS_DASHGOALS_CURRENT_YEAR', \$year);
        \$months = \$this->module->setMonths(\$year);

        \$this->context->smarty->assign(
            [
                'currency' => \$this->context->currency,
                'goals_year' => \$year,
                'goals_months' => \$months,
                'link' => \$this->context->link,
            ]
        );

        exit(\$this->module->display(_PS_MODULE_DIR_ . \$this->module->name . DIRECTORY_SEPARATOR . \$this->module->name . '.php', 'config.tpl'));
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/dashgoals/controllers/admin/AdminDashgoalsController.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/dashgoals/controllers/admin/AdminDashgoalsController.php", "/var/www/html/modules/dashgoals/controllers/admin/AdminDashgoalsController.php");
    }
}
