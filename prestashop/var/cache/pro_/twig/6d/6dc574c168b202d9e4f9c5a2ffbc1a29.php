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

/* @Modules/ps_facetedsearch/src/Form/Feature/FormDataProvider.php */
class __TwigTemplate_28c43599d9571f6e6d3cc764418e40fd extends Template
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

namespace PrestaShop\\Module\\FacetedSearch\\Form\\Feature;

use Db;
use PrestaShopDatabaseException;

/**
 * Provides form data
 */
class FormDataProvider
{
    /**
     * @var Db
     */
    private \$database;

    public function __construct(Db \$database)
    {
        \$this->database = \$database;
    }

    /**
     * Fills form data
     *
     * @param array \$params
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public function getData(array \$params)
    {
        \$defaultUrl = [];
        \$defaultMetaTitle = [];
        \$isIndexable = false;

        // if params contains id, gets data for edit form
        if (!empty(\$params['id'])) {
            \$featureId = (int) \$params['id'];

            // returns false if request failed.
            \$queryIndexable = \$this->database->getValue(
                'SELECT `indexable` ' .
                'FROM ' . _DB_PREFIX_ . 'layered_indexable_feature ' .
                'WHERE `id_feature` = ' . \$featureId
            );

            \$isIndexable = (bool) \$queryIndexable;
            \$result = \$this->database->executeS(
                'SELECT `url_name`, `meta_title`, `id_lang` ' .
                'FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_lang_value ' .
                'WHERE `id_feature` = ' . \$featureId
            );

            if (!empty(\$result) && is_array(\$result)) {
                foreach (\$result as \$data) {
                    \$defaultUrl[\$data['id_lang']] = \$data['url_name'];
                    \$defaultMetaTitle[\$data['id_lang']] = \$data['meta_title'];
                }
            }
        }

        return [
            'url' => \$defaultUrl,
            'meta_title' => \$defaultMetaTitle,
            'is_indexable' => \$isIndexable,
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Form/Feature/FormDataProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/src/Form/Feature/FormDataProvider.php", "/var/www/html/modules/ps_facetedsearch/src/Form/Feature/FormDataProvider.php");
    }
}
