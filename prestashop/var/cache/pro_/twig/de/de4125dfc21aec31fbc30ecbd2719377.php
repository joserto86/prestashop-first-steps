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

/* @Modules/blockwishlist/_dev/back/scss/_stats.scss */
class __TwigTemplate_b99c264df2358da50fb8abb04b4e678c extends Template
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
.wishlist-stats {
  .card {
    &-text {
      width: 100%;
      padding: 10px 30px;
    }
  }

  & &-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 20px;

    .btn-group {
      border: 1px solid #b7ced3;
      border-radius: 3px;

      button {
        color: #363a41;
        font-size: 14px;
        letter-spacing: 0;
        line-height: 19px;
        background: none;
        font-weight: 500;
        transition: 0.25s ease-out;

        &:not(:last-child) {
          border-right: 1px solid #b7ced3;
        }

        &:hover,
        &.active {
          background-color: #25b9d7;
          color: #fff;
        }
      }
    }

    .refresh {
      color: #6c868e;
      font-size: 14px;
      font-weight: bold;
      letter-spacing: 0;
      line-height: 19px;
      border: 1px solid #6c868e;
      border-radius: 4px;
      transition: 0.25s ease-out;
      background: none;

      &:hover {
        background: #6c868e;
        color: white;
      }
    }
  }

  .wishlist-tab {
    display: none;

    &.active {
      display: block;
    }

    .column-image {
      img {
        max-width: 50px;
      }
    }

    .column-conversionRate {
      font-weight: bold;
    }
  }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/back/scss/_stats.scss";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/_dev/back/scss/_stats.scss", "/var/www/html/modules/blockwishlist/_dev/back/scss/_stats.scss");
    }
}
