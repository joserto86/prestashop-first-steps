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

/* @Modules/blockwishlist/upgrade/upgrade-1.1.5.php */
class __TwigTemplate_68f81032c91037e238de035b12022ab8 extends Template
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @param BlockWishList \$module
 *
 * @return bool
 */
function upgrade_module_1_1_5(\$module)
{
    \$list_fields = Db::getInstance()->executeS('SHOW FIELDS FROM `' . _DB_PREFIX_ . 'wishlist`');

    if (is_array(\$list_fields)) {
        foreach (\$list_fields as \$field) {
            if (\$field['Field'] === 'default' && \$field['Type'] === 'int(11)') {
                return (bool) Db::getInstance()->execute('ALTER TABLE `' . _DB_PREFIX_ . 'wishlist` CHANGE `default` `default` INT( 11 ) NOT NULL DEFAULT \"0\"');
            }
        }
    }

    return true;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/upgrade/upgrade-1.1.5.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/upgrade/upgrade-1.1.5.php", "/var/www/html/modules/blockwishlist/upgrade/upgrade-1.1.5.php");
    }
}
