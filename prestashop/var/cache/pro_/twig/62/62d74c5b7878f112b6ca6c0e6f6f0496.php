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

/* @Modules/ps_googleanalytics/controllers/front/ajax.php */
class __TwigTemplate_38ab83c1b6f058841c070e58d055544e extends Template
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
 * International Registered Trademark & Property of PrestaShop SA
 */

use PrestaShop\\Module\\Ps_Googleanalytics\\Repository\\GanalyticsRepository;

class ps_GoogleanalyticsAjaxModuleFrontController extends ModuleFrontController
{
    public \$ssl = true;

    /*
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        \$orderId = (int) Tools::getValue('orderid');
        \$order = new Order(\$orderId);

        if (!Validate::isLoadedObject(\$order) || \$order->id_customer != (int) Tools::getValue('customer')) {
            \$this->ajaxDie('KO');
        }

        (new GanalyticsRepository())->updateData(
            [
                'sent' => 1,
                'date_add' => ['value' => 'NOW()', 'type' => 'sql'],
            ],
            'id_order = ' . \$orderId,
            1
        );

        \$this->ajaxDie('OK');
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/controllers/front/ajax.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/controllers/front/ajax.php", "/var/www/html/modules/ps_googleanalytics/controllers/front/ajax.php");
    }
}
