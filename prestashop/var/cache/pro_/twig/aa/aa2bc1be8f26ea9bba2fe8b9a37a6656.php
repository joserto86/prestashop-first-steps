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

/* @Modules/productcomments/src/Entity/ProductCommentCriterion.php */
class __TwigTemplate_01d3724ea73df044316ae90e2e0b391b extends Template
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\ProductComment\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Language;
use Validate;

/**
 * @ORM\\Table()
 * @ORM\\Entity()
 */
class ProductCommentCriterion
{
    const NAME_MAX_LENGTH = 64;
    const ENTIRE_CATALOG_TYPE = 1;
    const CATEGORIES_TYPE = 2;
    const PRODUCTS_TYPE = 3;

    /**
     * @var int
     *
     * @ORM\\Id
     * @ORM\\Column(name=\"id_product_comment_criterion\", type=\"integer\")
     * @ORM\\GeneratedValue(strategy=\"AUTO\")
     */
    private \$id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id_product_comment_criterion_type\", type=\"integer\")
     */
    private \$type;

    /**
     * @var bool
     *
     * @ORM\\Column(name=\"active\", type=\"boolean\")
     */
    private \$active = false;

    /**
     * @var array
     *
     * Need to be implemented as ORM\\OneToMany in the future
     */
    private \$names;

    /**
     * @var array
     *
     * Need to be implemented as ORM\\OneToMany in the future
     */
    private \$categories;

    /**
     * @var array
     *
     * Need to be implemented as ORM\\OneToMany in the future
     */
    private \$products;

    public function __construct()
    {
        \$langIsoIds = Language::getIsoIds();
        foreach (\$langIsoIds as \$langIsoId) {
            \$this->names[\$langIsoId['id_lang']] = \$langIsoId['iso_code'];
        }
    }

    /**
     * @return array
     */
    public function getNames()
    {
        return \$this->names;
    }

    /**
     * @param array \$langNames
     *
     * @return ProductCommentCriterion
     */
    public function setNames(\$langNames)
    {
        \$this->names = \$langNames;

        return \$this;
    }

    /**
     * @return array
     */
    public function getCategories()
    {
        return \$this->categories;
    }

    /**
     * @param array \$selectedCategories
     *
     * @return ProductCommentCriterion
     */
    public function setCategories(\$selectedCategories)
    {
        \$this->categories = \$selectedCategories;

        return \$this;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return \$this->products;
    }

    /**
     * @param array \$selectedProducts
     *
     * @return ProductCommentCriterion
     */
    public function setProducts(\$selectedProducts)
    {
        \$this->products = \$selectedProducts;

        return \$this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @param int \$type
     *
     * @return ProductCommentCriterion
     */
    public function setType(\$type)
    {
        \$this->type = \$type;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return \$this->active;
    }

    /**
     * @param bool \$active
     *
     * @return ProductCommentCriterion
     */
    public function setActive(\$active)
    {
        \$this->active = \$active;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        foreach (\$this->names as \$value) {
            if (!Validate::isGenericName(\$value)) {
                return false;
            }
        }

        return true;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/src/Entity/ProductCommentCriterion.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/src/Entity/ProductCommentCriterion.php", "/var/www/html/modules/productcomments/src/Entity/ProductCommentCriterion.php");
    }
}
