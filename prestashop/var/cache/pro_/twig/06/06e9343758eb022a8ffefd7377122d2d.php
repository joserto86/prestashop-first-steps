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

/* @Modules/ps_customtext/upgrade/install-3.0.0.php */
class __TwigTemplate_c385638ab177beea1cb0f21b7185950b extends Template
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
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Upgrade the Ps_Customtext module to V3.0.0
 *
 * @param Ps_Customtext \$module
 *
 * @return bool
 */
function upgrade_module_3_0_0(\$module)
{
    require_once _PS_MODULE_DIR_ . \$module->name . '/classes/MigrateData.php';
    \$migration = new MigrateData();

    \$return = true;

    \$migration->retrieveOldData();
    \$return &= \$module->uninstallDB();

    /* Register the hook responsible for adding custom text when adding a new store */
    \$return &= \$module->registerHook('actionShopDataDuplication');

    \$return &= \$module->installDB();

    /* Reset DB data */
    \$return &= \$migration->insertData();

    return (bool) \$return;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_customtext/upgrade/install-3.0.0.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_customtext/upgrade/install-3.0.0.php", "/var/www/html/modules/ps_customtext/upgrade/install-3.0.0.php");
    }
}
