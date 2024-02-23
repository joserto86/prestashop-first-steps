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

/* @Modules/ps_linklist/src/Adapter/ObjectModelHandler.php */
class __TwigTemplate_a4716c863dc0ca4f55a35d94bb322ffc extends Template
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

namespace PrestaShop\\Module\\LinkList\\Adapter;

use PrestaShop\\Module\\LinkList\\Model\\LinkBlock;
use PrestaShop\\PrestaShop\\Adapter\\Domain\\AbstractObjectModelHandler;

class ObjectModelHandler extends AbstractObjectModelHandler
{
    /**
     * @param int \$linkBlockId
     * @param array \$associatedShops
     * @param bool \$forceAssociate
     */
    public function handleMultiShopAssociation(
        int \$linkBlockId,
        array \$associatedShops,
        bool \$forceAssociate = false
    ): void {
        \$objectModel = new LinkBlock(\$linkBlockId);

        /*
         * Why we want to force association?
         * It's easier to work on multi-store tables even when feature is disabled
         * This way we can force association to store as legacy ObjectModel does
         * We need to remember that multi-store is always there, shop tables are always there
         *
         * @todo: this should be part of AbstractObjectModelHandler
         */
        if (\$forceAssociate) {
            \$objectModel->associateTo(\$associatedShops);

            return;
        }

        \$this->associateWithShops(\$objectModel, \$associatedShops);
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Adapter/ObjectModelHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/src/Adapter/ObjectModelHandler.php", "/var/www/html/modules/ps_linklist/src/Adapter/ObjectModelHandler.php");
    }
}
