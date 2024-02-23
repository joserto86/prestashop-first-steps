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

/* @Modules/blockwishlist/src/Database/Uninstall.php */
class __TwigTemplate_b5a003ad0ece5995e318e068d1cc7d59 extends Template
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

namespace PrestaShop\\Module\\BlockWishList\\Database;

use BlockWishList;
use Db;
use Tab;
use Validate;

class Uninstall
{
    public function run()
    {
        return \$this->dropTables() && \$this->uninstallTabs();
    }

    private function dropTables()
    {
        \$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'wishlist`';
        \$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'wishlist_product`';
        \$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'wishlist_product_cart`';
        \$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'blockwishlist_statistics`';

        \$result = true;
        foreach (\$sql as \$query) {
            \$result = \$result && Db::getInstance()->execute(\$query);
        }

        return \$result;
    }

    private function uninstallTabs()
    {
        \$uninstallTabCompleted = true;

        foreach (BlockWishList::MODULE_ADMIN_CONTROLLERS as \$controller) {
            \$id_tab = (int) Tab::getIdFromClassName(\$controller['class_name']);
            \$tab = new Tab(\$id_tab);
            if (Validate::isLoadedObject(\$tab)) {
                \$uninstallTabCompleted = \$uninstallTabCompleted && \$tab->delete();
            }
        }

        return \$uninstallTabCompleted;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/src/Database/Uninstall.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/src/Database/Uninstall.php", "/var/www/html/modules/blockwishlist/src/Database/Uninstall.php");
    }
}
