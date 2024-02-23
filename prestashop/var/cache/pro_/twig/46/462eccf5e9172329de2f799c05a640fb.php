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

/* @Modules/psgdpr/upgrade/upgrade-1.1.4.php */
class __TwigTemplate_d3faf58c931f9dfee74a73502fc850d3 extends Template
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
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @param Psgdpr \$module
 *
 * @return bool
 */
function upgrade_module_1_1_4(\$module)
{
    \$result = true;

    // Remove our ModuleAdminControllers from SEO & URLs page
    \$metaCollection = new PrestaShopCollection('Meta');
    \$metaCollection->where('page', 'like', 'module-' . \$module->name . '-Admin%');

    foreach (\$metaCollection->getAll() as \$meta) {
        /** @var Meta \$meta */
        \$result = \$result && (bool) \$meta->delete();
    }

    return \$result;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/upgrade/upgrade-1.1.4.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/upgrade/upgrade-1.1.4.php", "/var/www/html/modules/psgdpr/upgrade/upgrade-1.1.4.php");
    }
}
