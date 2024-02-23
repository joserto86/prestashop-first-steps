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

/* @Modules/ps_facetedsearch/upgrade/upgrade-3.11.0.php */
class __TwigTemplate_e62ac57819c41a5fa25ddc1cacda619e extends Template
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

function upgrade_module_3_11_0(\$module)
{
    // Get all filter templates
    \$filterTemplates = Db::getInstance()->executeS(
        'SELECT * FROM ' . _DB_PREFIX_ . 'layered_filter'
    );

    // Add controller info to each of the configuration
    if (!empty(\$filterTemplates)) {
        foreach (\$filterTemplates as \$template) {
            \$filters = Tools::unSerialize(\$template['filters']);
            \$filters['controllers'] = ['category'];
            Db::getInstance()->execute(
                'UPDATE `' . _DB_PREFIX_ . 'layered_filter` 
                SET `filters` = \"' . pSQL(serialize(\$filters)) . '\"
                WHERE `id_layered_filter` = ' . (int) \$template['id_layered_filter']
            );
        }
    }

    // Add new column to generated filters and fill it with a category controller
    Db::getInstance()->execute('ALTER TABLE `' . _DB_PREFIX_ . 'layered_category` ADD `controller` VARCHAR(64) NOT NULL AFTER `id_shop`;');
    Db::getInstance()->execute('UPDATE `' . _DB_PREFIX_ . \"layered_category` SET `controller`= 'category';\");

    // Flush block cache - the cache key changed a bit with this version anyway
    \$module->invalidateLayeredFilterBlockCache();

    return true;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/upgrade/upgrade-3.11.0.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/upgrade/upgrade-3.11.0.php", "/var/www/html/modules/ps_facetedsearch/upgrade/upgrade-3.11.0.php");
    }
}
