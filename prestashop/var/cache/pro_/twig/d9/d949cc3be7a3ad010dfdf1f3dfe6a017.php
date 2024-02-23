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

/* @Modules/ps_linklist/src/Form/ChoiceProvider/PageChoiceProvider.php */
class __TwigTemplate_7d7c248c4861c395508b7d01affed003 extends Template
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

use Doctrine\\DBAL\\Connection;
use PrestaShop\\PrestaShop\\Core\\Foundation\\Database\\EntityNotFoundException;
use Tools;

/**
 * Class PageChoiceProvider.
 */
final class PageChoiceProvider extends AbstractDatabaseChoiceProvider
{
    /**
     * @var array
     */
    private \$pageNames;

    /**
     * PageChoiceProvider constructor.
     *
     * @param Connection \$connection
     * @param string \$dbPrefix
     * @param int \$idLang
     * @param array \$shopIds
     * @param array \$pageNames
     */
    public function __construct(
        Connection \$connection,
        \$dbPrefix,
        \$idLang,
        array \$shopIds,
        array \$pageNames
    ) {
        parent::__construct(\$connection, \$dbPrefix, \$idLang, \$shopIds);
        \$this->pageNames = \$pageNames;
    }

    /**
     * @return array
     *
     * @throws EntityNotFoundException
     */
    public function getChoices()
    {
        \$choices = [];
        foreach (\$this->pageNames as \$pageName) {
            \$qb = \$this->connection->createQueryBuilder();
            \$qb
                ->select('m.id_meta, ml.title')
                ->from(\$this->dbPrefix . 'meta', 'm')
                ->leftJoin('m', \$this->dbPrefix . 'meta_lang', 'ml', 'm.id_meta = ml.id_meta')
                ->andWhere(\$qb->expr()->orX('m.page = :page', 'm.page = :pageSlug'))
                ->andWhere('ml.id_lang = :idLang')
                ->andWhere('ml.id_shop IN (:shopIds)')
                ->setParameter('idLang', \$this->idLang)
                ->setParameter('shopIds', implode(',', \$this->shopIds))
                ->setParameter('page', \$pageName)
                ->setParameter('pageSlug', str_replace('-', '', Tools::strtolower(\$pageName)))
            ;
            \$meta = \$qb->execute()->fetchAll();
            if (!empty(\$meta)) {
                \$choices[\$meta[0]['title']] = \$pageName;
            }
        }

        return \$choices;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Form/ChoiceProvider/PageChoiceProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/src/Form/ChoiceProvider/PageChoiceProvider.php", "/var/www/html/modules/ps_linklist/src/Form/ChoiceProvider/PageChoiceProvider.php");
    }
}
