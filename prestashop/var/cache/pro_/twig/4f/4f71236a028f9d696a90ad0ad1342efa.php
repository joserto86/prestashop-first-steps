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

/* @Modules/ps_linklist/src/LegacyLinkBlockRepository.php */
class __TwigTemplate_3d978af9fcc4854922df393081048301 extends Template
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

namespace PrestaShop\\Module\\LinkList;

use Context;
use Db;
use Hook;
use Language;
use PrestaShop\\Module\\LinkList\\Model\\LinkBlock;
use Shop;
use Symfony\\Contracts\\Translation\\TranslatorInterface as Translator;

/**
 * Class LegacyLinkBlockRepository.
 */
class LegacyLinkBlockRepository
{
    /**
     * @var Db
     */
    private \$db;

    /**
     * @var Shop
     */
    private \$shop;

    /**
     * @var string
     */
    private \$db_prefix;

    /**
     * @var Translator
     */
    private \$translator;

    /**
     * @param Db \$db
     * @param Shop \$shop
     * @param Translator \$translator
     */
    public function __construct(Db \$db, Shop \$shop, Translator \$translator)
    {
        \$this->db = \$db;
        \$this->shop = \$shop;
        \$this->db_prefix = \$db->getPrefix();
        \$this->translator = \$translator;
    }

    /**
     * @param int \$id_hook
     *
     * @return array
     *
     * @throws \\PrestaShopDatabaseException
     * @throws \\PrestaShopException
     */
    public function getByIdHook(\$id_hook)
    {
        \$id_hook = (int) \$id_hook;

        \$sql = \"SELECT lb.`id_link_block`
                    FROM {\$this->db_prefix}link_block lb
                    INNER JOIN {\$this->db_prefix}link_block_shop lbs ON lbs.`id_link_block` = lb.`id_link_block`
                    WHERE lb. `id_hook` = \$id_hook AND lbs.`id_shop` = {\$this->shop->id}
                    ORDER by lbs.`position`
                \";
        \$ids = \$this->db->executeS(\$sql);

        \$cmsBlock = [];
        foreach (\$ids as \$id) {
            \$cmsBlock[] = new LinkBlock((int) \$id['id_link_block']);
        }

        return \$cmsBlock;
    }

    /**
     * @return bool
     */
    public function createTables()
    {
        \$engine = _MYSQL_ENGINE_;
        \$success = true;
        \$this->dropTables();
        \$queries = [
            \"CREATE TABLE IF NOT EXISTS `{\$this->db_prefix}link_block`(
    \t\t\t`id_link_block` int(10) unsigned NOT NULL auto_increment,
    \t\t\t`id_hook` int(1) unsigned DEFAULT NULL,
    \t\t\t`position` int(10) unsigned NOT NULL default '0',
    \t\t\t`content` text default NULL,
    \t\t\tPRIMARY KEY (`id_link_block`)
            ) ENGINE=\$engine DEFAULT CHARSET=utf8\",
            \"CREATE TABLE IF NOT EXISTS `{\$this->db_prefix}link_block_lang`(
    \t\t\t`id_link_block` int(10) unsigned NOT NULL,
    \t\t\t`id_lang` int(10) unsigned NOT NULL,
    \t\t\t`name` varchar(40) NOT NULL default '',
    \t\t\t`custom_content` text default NULL,
    \t\t\tPRIMARY KEY (`id_link_block`, `id_lang`)
            ) ENGINE=\$engine DEFAULT CHARSET=utf8\",
            \"CREATE TABLE IF NOT EXISTS `{\$this->db_prefix}link_block_shop` (
    \t\t\t`id_link_block` int(10) unsigned NOT NULL auto_increment,
    \t\t\t`id_shop` int(10) unsigned NOT NULL,
                `position` int(10) unsigned NOT NULL default '0',
    \t\t\tPRIMARY KEY (`id_link_block`, `id_shop`)
            ) ENGINE=\$engine DEFAULT CHARSET=utf8\",
        ];
        foreach (\$queries as \$query) {
            \$success &= \$this->db->execute(\$query);
        }

        return (bool) \$success;
    }

    public function dropTables()
    {
        \$sql = \"DROP TABLE IF EXISTS
\t\t\t`{\$this->db_prefix}link_block`,
\t\t\t`{\$this->db_prefix}link_block_lang`,
\t\t\t`{\$this->db_prefix}link_block_shop`\";

        return \$this->db->execute(\$sql);
    }

    /**
     * @return bool
     */
    public function installFixtures()
    {
        \$success = true;
        \$id_hook = (int) Hook::getIdByName('displayFooter');
        \$queries = [
            'INSERT INTO `' . \$this->db_prefix . 'link_block` (`id_link_block`, `id_hook`, `position`, `content`) VALUES
                (1, ' . \$id_hook . ', 0, \\'{\"cms\":[false],\"product\":[\"prices-drop\",\"new-products\",\"best-sales\"],\"static\":[false]}\\'),
                (2, ' . \$id_hook . ', 1, \\'{\"cms\":[\"1\",\"2\",\"3\",\"4\",\"5\"],\"product\":[false],\"static\":[\"contact\",\"sitemap\",\"stores\"]}\\');',
        ];
        foreach (Language::getLanguages(true, Context::getContext()->shop->id) as \$lang) {
            \$queries[] = 'INSERT INTO `' . \$this->db_prefix . 'link_block_lang` (`id_link_block`, `id_lang`, `name`) VALUES
                (1, ' . (int) \$lang['id_lang'] . ', \"' . pSQL(\$this->translator->trans('Products', [], 'Modules.Linklist.Shop', \$lang['locale'])) . '\"),
                (2, ' . (int) \$lang['id_lang'] . ', \"' . pSQL(\$this->translator->trans('Our company', [], 'Modules.Linklist.Shop', \$lang['locale'])) . '\");'
            ;
        }

        foreach (\$this->shop::getContextListShopID() as \$shopId) {
            \$queries[] = 'INSERT INTO `' . \$this->db_prefix . 'link_block_shop` (`id_link_block`, `id_shop`, `position`) VALUES
                (1, ' . (int) \$shopId . ', 0),
                (2, ' . (int) \$shopId . ', 1);'
            ;
        }

        foreach (\$queries as \$query) {
            \$success &= \$this->db->execute(\$query);
        }

        return \$success;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/LegacyLinkBlockRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/src/LegacyLinkBlockRepository.php", "/var/www/html/modules/ps_linklist/src/LegacyLinkBlockRepository.php");
    }
}
