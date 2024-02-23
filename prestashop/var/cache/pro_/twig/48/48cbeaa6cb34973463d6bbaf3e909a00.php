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

/* @Modules/psgdpr/upgrade/upgrade-1.4.0.php */
class __TwigTemplate_5cb7e70ec06611d48f54de7efc8cc197 extends Template
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
function upgrade_module_1_4_0(\$module)
{
    // Update database
    \$sql = ' ALTER TABLE `' . _DB_PREFIX_ . 'psgdpr_log`
        ADD INDEX `idx_id_customer` ( `id_customer`, `id_guest`, `client_name`, `id_module`, `date_add`, `date_upd`); ';

    if (Db::getInstance()->execute(\$sql) == false) {
        return false;
    }

    // Remove hook
    return \$module->unregisterHook('registerGDPRConsent')
        && \$module->unregisterHook('actionDeleteGDPRCustomer');
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/upgrade/upgrade-1.4.0.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/upgrade/upgrade-1.4.0.php", "/var/www/html/modules/psgdpr/upgrade/upgrade-1.4.0.php");
    }
}