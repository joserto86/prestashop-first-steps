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

/* @Modules/ps_imageslider/ajax_ps_imageslider.php */
class __TwigTemplate_937dfc50d7311a117c2a338d6ade283d extends Template
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
include_once '../../config/config.inc.php';
include_once '../../init.php';
include_once 'ps_imageslider.php';

\$home_slider = new Ps_ImageSlider();
\$slides = [];

if (!Tools::isSubmit('secure_key') || Tools::getValue('secure_key') != \$home_slider->secure_key || !Tools::getValue('action')) {
    exit(1);
}

if (Tools::getValue('action') == 'updateSlidesPosition' && Tools::getValue('slides')) {
    \$slides = Tools::getValue('slides');

    foreach (\$slides as \$position => \$id_slide) {
        \$res = Db::getInstance()->execute('
\t\t\tUPDATE `' . _DB_PREFIX_ . 'homeslider_slides` SET `position` = ' . (int) \$position . '
\t\t\tWHERE `id_homeslider_slides` = ' . (int) \$id_slide
        );
    }

    \$home_slider->clearCache();
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_imageslider/ajax_ps_imageslider.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_imageslider/ajax_ps_imageslider.php", "/var/www/html/modules/ps_imageslider/ajax_ps_imageslider.php");
    }
}
