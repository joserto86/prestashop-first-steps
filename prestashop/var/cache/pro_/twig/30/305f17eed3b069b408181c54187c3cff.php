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

/* @Modules/ps_googleanalytics/classes/Database/Install.php */
class __TwigTemplate_48f952467b96ebbc774c2c49c2f74996 extends Template
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
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Database;

use Configuration;
use Db;
use Ps_Googleanalytics;
use Shop;

class Install
{
    /**
     * @var Ps_Googleanalytics
     */
    private \$module;

    public function __construct(Ps_Googleanalytics \$module)
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        \$this->module = \$module;
    }

    /**
     * installTables
     *
     * @return bool
     */
    public function installTables()
    {
        \$sql = [];

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'ganalytics` (
            `id_google_analytics` int(11) NOT NULL AUTO_INCREMENT,
            `id_order` int(11) NOT NULL,
            `id_customer` int(10) NOT NULL,
            `id_shop` int(11) NOT NULL,
            `sent` tinyint(1) DEFAULT NULL,
            `refund_sent` tinyint(1) DEFAULT NULL,
            `date_add` datetime DEFAULT NULL,
            PRIMARY KEY (`id_google_analytics`),
            KEY `id_order` (`id_order`),
            KEY `sent` (`sent`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'ganalytics_data` (
            `id_cart` int(11) NOT NULL,
            `id_shop` int(11) NOT NULL,
            `data` TEXT DEFAULT NULL,
            PRIMARY KEY (`id_cart`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

        foreach (\$sql as \$query) {
            if (!Db::getInstance()->execute(\$query)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Insert default data to database
     *
     * @return bool
     */
    public function setDefaultConfiguration()
    {
        Configuration::updateValue('GA_CANCELLED_STATES', json_encode([Configuration::get('PS_OS_CANCELED')]));

        return true;
    }

    /**
     * Register Module hooks
     *
     * @return bool
     */
    public function registerHooks()
    {
        return \$this->module->registerHook('displayHeader') &&
            \$this->module->registerHook('displayAdminOrder') &&
            \$this->module->registerHook('displayBeforeBodyClosingTag') &&
            \$this->module->registerHook('displayFooter') &&
            \$this->module->registerHook('displayFooterProduct') &&
            \$this->module->registerHook('displayOrderConfirmation') &&
            \$this->module->registerHook('actionProductCancel') &&
            \$this->module->registerHook('actionOrderStatusPostUpdate') &&
            \$this->module->registerHook('actionCartSave') &&
            \$this->module->registerHook('displayBackOfficeHeader') &&
            \$this->module->registerHook('actionCarrierProcess');
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Database/Install.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/classes/Database/Install.php", "/var/www/html/modules/ps_googleanalytics/classes/Database/Install.php");
    }
}
