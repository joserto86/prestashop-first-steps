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

/* @Modules/ps_faviconnotificationbo/upgrade/upgrade-2.1.0.php */
class __TwigTemplate_5638899ece30dc06285b42298b7b9480 extends Template
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
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @param Ps_faviconnotificationbo \$module
 *
 * @return bool
 */
function upgrade_module_2_1_0(\$module)
{
    \$result = true;

    // Remove our ModuleAdminControllers from SEO & URLs page
    \$metaCollection = new PrestaShopCollection('Meta');
    \$metaCollection->where('page', 'like', 'module-' . \$module->name . '-Admin%');

    foreach (\$metaCollection->getAll() as \$meta) {
        /** @var Meta \$meta */
        \$result = \$result && (bool) \$meta->delete();
    }

    // Remove old ajax controller and add new controller for configuration
    \$result = \$result && \$module->uninstallTabs() && \$module->installTabs();

    return \$result;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_faviconnotificationbo/upgrade/upgrade-2.1.0.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_faviconnotificationbo/upgrade/upgrade-2.1.0.php", "/var/www/html/modules/ps_faviconnotificationbo/upgrade/upgrade-2.1.0.php");
    }
}
