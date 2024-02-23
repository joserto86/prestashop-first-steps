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

/* @Modules/productcomments/src/Entity/ProductCommentReport.php */
class __TwigTemplate_447fc048e8879b4fbba2e3a149fefd95 extends Template
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

/**
 * @ORM\\Table()
 * @ORM\\Entity()
 */
class ProductCommentReport
{
    /**
     * @ORM\\Id
     * @ORM\\ManyToOne(targetEntity=\"ProductComment\")
     * @ORM\\JoinColumn(name=\"id_product_comment\", referencedColumnName=\"id_product_comment\")
     *
     * @var ProductComment
     */
    private \$comment;

    /**
     * @ORM\\Id
     * @ORM\\Column(name=\"id_customer\", type=\"integer\")
     *
     * @var int
     */
    private \$customerId;

    /**
     * @param ProductComment \$comment
     * @param int \$customerId
     */
    public function __construct(
        ProductComment \$comment,
        \$customerId
    ) {
        \$this->comment = \$comment;
        \$this->customerId = \$customerId;
    }

    /**
     * @return ProductComment
     */
    public function getComment()
    {
        return \$this->comment;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return \$this->customerId;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/src/Entity/ProductCommentReport.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/src/Entity/ProductCommentReport.php", "/var/www/html/modules/productcomments/src/Entity/ProductCommentReport.php");
    }
}
