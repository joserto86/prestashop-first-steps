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

/* @Modules/blockwishlist/_dev/front/js/graphql/mutations/addtolist.js */
class __TwigTemplate_745bb4cedf36faca2d4d4f71bcbbf341 extends Template
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
        echo "/**
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

import gql from 'graphql-tag';

export default gql`
  mutation addToList(\$listId: Int!, \$productId: Int!, \$quantity: Int!, \$productAttributeId: Int!, \$url: String!) {
    addToList(
      listId: \$listId
      productId: \$productId
      quantity: \$quantity
      productAttributeId: \$productAttributeId
      url: \$url
    ) {
      success
      message
    }
  }
`;
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/js/graphql/mutations/addtolist.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/_dev/front/js/graphql/mutations/addtolist.js", "/var/www/html/modules/blockwishlist/_dev/front/js/graphql/mutations/addtolist.js");
    }
}
