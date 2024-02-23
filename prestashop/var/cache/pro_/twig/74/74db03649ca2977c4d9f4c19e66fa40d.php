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

/* @Modules/ps_googleanalytics/classes/Repository/CarrierRepository.php */
class __TwigTemplate_0b7edbd541e7c950222e6bc7d2fb6198 extends Template
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

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Repository;

use Db;

class CarrierRepository
{
    const TABLE_NAME = 'carrier';

    /**
     * findByCarrierId
     *
     * @param int \$carrierId
     *
     * @return string
     */
    public function findByCarrierId(\$carrierId)
    {
        return Db::getInstance()->getValue(
            'SELECT name
            FROM `' . _DB_PREFIX_ . self::TABLE_NAME . '`
            WHERE id_carrier = ' . (int) \$carrierId
        );
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Repository/CarrierRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/classes/Repository/CarrierRepository.php", "/var/www/html/modules/ps_googleanalytics/classes/Repository/CarrierRepository.php");
    }
}
