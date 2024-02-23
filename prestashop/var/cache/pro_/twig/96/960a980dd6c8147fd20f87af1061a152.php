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

/* @Modules/productcomments/controllers/front/CommentGrade.php */
class __TwigTemplate_134c0104333894d1b7dfba8ed32f32a8 extends Template
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
use PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentRepository;

class ProductCommentsCommentGradeModuleFrontController extends ModuleFrontController
{
    public function display()
    {
        \$idProducts = Tools::getValue('id_products');
        /* @var ProductCommentRepository \$productCommentRepository */

        header('Content-Type: application/json');

        if (!is_array(\$idProducts)) {
            return \$this->ajaxRender(null);
        }

        \$idProducts = array_unique(array_map('intval', \$idProducts));

        \$productCommentRepository = \$this->context->controller->getContainer()->get('product_comment_repository');

        \$productsCommentsNb = \$productCommentRepository->getCommentsNumberForProducts(\$idProducts, Configuration::get('PRODUCT_COMMENTS_MODERATE'));
        \$averageGrade = \$productCommentRepository->getAverageGrades(\$idProducts, Configuration::get('PRODUCT_COMMENTS_MODERATE'));

        \$resultFormated = [];

        foreach (\$idProducts as \$i => \$id) {
            \$resultFormated[] = [
                'id_product' => \$id,
                'comments_nb' => \$productsCommentsNb[\$id],
                'average_grade' => \$averageGrade[\$id],
            ];
        }

        \$this->ajaxRender(
            json_encode(
                [
                    'products' => \$resultFormated,
                ]
            )
        );
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/controllers/front/CommentGrade.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/controllers/front/CommentGrade.php", "/var/www/html/modules/productcomments/controllers/front/CommentGrade.php");
    }
}
