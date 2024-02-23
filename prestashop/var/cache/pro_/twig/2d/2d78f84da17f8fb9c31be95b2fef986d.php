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

/* @Modules/ps_linklist/src/Form/ChoiceProvider/CMSCategoryChoiceProvider.php */
class __TwigTemplate_2a61fb6783b663a9a240b1e77d2f74e2 extends Template
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

namespace PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider;

/**
 * Class CMSCategoryChoiceProvider.
 */
final class CMSCategoryChoiceProvider extends AbstractDatabaseChoiceProvider
{
    /**
     * @return array
     */
    public function getChoices()
    {
        \$qb = \$this->connection->createQueryBuilder();
        \$qb
            ->select('cc.id_cms_category, ccl.name')
            ->from(\$this->dbPrefix . 'cms_category', 'cc')
            ->innerJoin('cc', \$this->dbPrefix . 'cms_category_lang', 'ccl', 'cc.id_cms_category = ccl.id_cms_category')
            ->innerJoin('cc', \$this->dbPrefix . 'cms_category_shop', 'ccs', 'cc.id_cms_category = ccs.id_cms_category')
            ->andWhere('cc.active = 1')
            ->andWhere('ccl.id_lang = :idLang')
            ->andWhere('ccs.id_shop IN (:shopIds)')
            ->setParameter('idLang', \$this->idLang)
            ->setParameter('shopIds', implode(',', \$this->shopIds))
            ->orderBy('ccl.name')
        ;

        \$categories = \$qb->execute()->fetchAll();
        \$choices = [];
        foreach (\$categories as \$category) {
            \$choices[\$category['name']] = \$category['id_cms_category'];
        }

        return \$choices;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Form/ChoiceProvider/CMSCategoryChoiceProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/src/Form/ChoiceProvider/CMSCategoryChoiceProvider.php", "/var/www/html/modules/ps_linklist/src/Form/ChoiceProvider/CMSCategoryChoiceProvider.php");
    }
}
