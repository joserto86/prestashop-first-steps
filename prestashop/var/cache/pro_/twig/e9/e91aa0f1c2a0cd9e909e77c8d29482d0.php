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

/* @Modules/ps_cashondelivery/upgrade/upgrade-1.0.7.php */
class __TwigTemplate_f4c7efed4035e3366f1dd6959fc47add extends Template
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @param Ps_Cashondelivery \$module
 *
 * @return bool
 */
function upgrade_module_1_0_7(\$module)
{
    \$module->unregisterHook('paymentReturn');
    if (method_exists(\$module, 'hookDisplayPaymentReturn') || \$module instanceof WidgetInterface) {
        \$module->registerHook('displayPaymentReturn');
    }

    return true;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_cashondelivery/upgrade/upgrade-1.0.7.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_cashondelivery/upgrade/upgrade-1.0.7.php", "/var/www/html/modules/ps_cashondelivery/upgrade/upgrade-1.0.7.php");
    }
}
