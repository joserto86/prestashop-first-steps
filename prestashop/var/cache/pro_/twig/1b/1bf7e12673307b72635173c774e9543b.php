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

/* @Modules/productcomments/controllers/front/ReportComment.php */
class __TwigTemplate_e162cc0ae8a77e8186604983bd542d11 extends Template
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
use Doctrine\\ORM\\EntityManagerInterface;
use PrestaShop\\Module\\ProductComment\\Entity\\ProductComment;
use PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentReport;

class ProductCommentsReportCommentModuleFrontController extends ModuleFrontController
{
    public function display()
    {
        header('Content-Type: application/json');

        \$customerId = (int) \$this->context->cookie->id_customer;
        if (!\$customerId) {
            \$this->ajaxRender(
                json_encode(
                    [
                        'success' => false,
                        'error' => \$this->trans('You need to be logged in to report a review.', [], 'Modules.Productcomments.Shop'),
                    ]
                )
            );

            return false;
        }

        \$id_product_comment = (int) Tools::getValue('id_product_comment');

        /** @var EntityManagerInterface \$entityManager */
        \$entityManager = \$this->container->get('doctrine.orm.entity_manager');

        \$productCommentEntityRepository = \$entityManager->getRepository(ProductComment::class);
        /** @var ProductComment|null \$productComment */
        \$productComment = \$productCommentEntityRepository->findOneBy(['id' => \$id_product_comment]);
        if (!\$productComment) {
            \$this->ajaxRender(
                json_encode(
                    [
                        'success' => false,
                        'error' => \$this->trans('Cannot find the requested product review.', [], 'Modules.Productcomments.Shop'),
                    ]
                )
            );

            return false;
        }

        \$productCommentAbuseRepository = \$entityManager->getRepository(ProductCommentReport::class);
        /** @var ProductCommentReport|null \$productCommentAbuse */
        \$productCommentAbuse = \$productCommentAbuseRepository->findOneBy([
            'comment' => \$id_product_comment,
            'customerId' => \$customerId,
        ]);

        if (\$productCommentAbuse) {
            \$this->ajaxRender(
                json_encode(
                    [
                        'success' => false,
                        'error' => \$this->trans('You already reported this review as abusive.', [], 'Modules.Productcomments.Shop'),
                    ]
                )
            );

            return false;
        }

        \$productCommentAbuse = new ProductCommentReport(
            \$productComment,
            \$customerId
        );
        \$entityManager->persist(\$productCommentAbuse);
        \$entityManager->flush();

        \$this->ajaxRender(
            json_encode(
                [
                    'success' => true,
                    'id_product_comment' => \$id_product_comment,
                ]
            )
        );
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/controllers/front/ReportComment.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/controllers/front/ReportComment.php", "/var/www/html/modules/productcomments/controllers/front/ReportComment.php");
    }
}
