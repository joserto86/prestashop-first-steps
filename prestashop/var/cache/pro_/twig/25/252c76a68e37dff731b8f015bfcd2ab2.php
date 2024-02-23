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

/* @Modules/ps_facetedsearch/src/Hook/Attribute.php */
class __TwigTemplate_66e37ee6e7ed902f505701af2dd8081a extends Template
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

namespace PrestaShop\\Module\\FacetedSearch\\Hook;

use Language;
use Tools;

class Attribute extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'actionAttributeGroupDelete',
        'actionAttributeSave',
        'displayAttributeForm',
        'actionAttributePostProcess',
    ];

    /**
     * After save attribute
     *
     * @param array \$params
     */
    public function actionAttributeSave(array \$params)
    {
        if (empty(\$params['id_attribute'])) {
            return;
        }

        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_attribute_lang_value
            WHERE `id_attribute` = ' . (int) \$params['id_attribute']
        );

        foreach (Language::getLanguages(false) as \$language) {
            \$seoUrl = Tools::getValue('url_name_' . (int) \$language['id_lang']);
            \$metaTitle = Tools::getValue('meta_title_' . (int) \$language['id_lang']);
            if (empty(\$seoUrl) && empty(\$metaTitle)) {
                continue;
            }

            \$this->database->execute(
                'INSERT INTO ' . _DB_PREFIX_ . 'layered_indexable_attribute_lang_value
                (`id_attribute`, `id_lang`, `url_name`, `meta_title`)
                VALUES (
                ' . (int) \$params['id_attribute'] . ', ' . (int) \$language['id_lang'] . ',
                \\'' . pSQL(Tools::str2url(\$seoUrl)) . '\\',
                \\'' . pSQL(\$metaTitle, true) . '\\')'
            );
        }
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * After delete attribute
     *
     * @param array \$params
     */
    public function actionAttributeGroupDelete(array \$params)
    {
        if (empty(\$params['id_attribute'])) {
            return;
        }

        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_attribute_lang_value
            WHERE `id_attribute` = ' . (int) \$params['id_attribute']
        );
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * Post process attribute
     *
     * @param array \$params
     */
    public function actionAttributePostProcess(array \$params)
    {
        \$this->module->checkLinksRewrite(\$params);
    }

    /**
     * Attribute form
     *
     * @param array \$params
     */
    public function displayAttributeForm(array \$params)
    {
        \$values = [];

        if (\$result = \$this->database->executeS(
            'SELECT `url_name`, `meta_title`, `id_lang`
            FROM ' . _DB_PREFIX_ . 'layered_indexable_attribute_lang_value
            WHERE `id_attribute` = ' . (int) \$params['id_attribute']
        )) {
            foreach (\$result as \$data) {
                \$values[\$data['id_lang']] = ['url_name' => \$data['url_name'], 'meta_title' => \$data['meta_title']];
            }
        }

        \$this->context->smarty->assign([
            'languages' => Language::getLanguages(false),
            'default_form_language' => (int) \$this->context->controller->default_form_language,
            'values' => \$values,
        ]);

        return \$this->module->render('attribute_form.tpl');
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Hook/Attribute.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/src/Hook/Attribute.php", "/var/www/html/modules/ps_facetedsearch/src/Hook/Attribute.php");
    }
}
