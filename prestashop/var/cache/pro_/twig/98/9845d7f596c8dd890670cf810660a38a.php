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

/* @Modules/blockwishlist/_dev/front/scss/_modal.scss */
class __TwigTemplate_8d3d31733554f568cc76e4417bd83b38 extends Template
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
.wishlist-modal {
  display: none;
  opacity: 0;
  pointer-events: none;
  z-index: 0;

  &.show {
    display: block;
    opacity: 1;
    pointer-events: all;
    z-index: 1051;

    + .modal-backdrop {
      pointer-events: all;
    }
  }

  &.fade .modal-dialog {
    max-width: 34.375rem;
    transform: translateY(0);
  }

  .close {
    font-weight: 400;
    color: #7a7a7a;
    opacity: 1;
    font-size: 2.25rem;

    &:hover {
      opacity: 0.6;
    }
  }

  .modal {
    &-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border: none;

      h5 {
        color: #232323;
        font-size: 1.375rem;
        font-weight: bold;
        letter-spacing: 0;
        line-height: 1.875rem;
      }

      &::after {
        content: none;
      }
    }

    &-text {
      color: #232323;
      font-size: 0.875rem;
      letter-spacing: 0;
      line-height: 1.875rem;
    }

    &-body {
      padding: 0.9375 1.875rem;

      .form-group {
        margin-bottom: 0;

        .form-control {
          border-radius: 0;
          background: none;
          color: black;
        }
      }
    }

    &-content {
      width: 100%;
    }

    &-cancel {
      &:hover {
        opacity: 0.7;
      }
    }

    &-footer {
      border: none;

      .btn {
        text-transform: none;
        margin-bottom: 0.5rem;
      }
    }

    &-backdrop {
      pointer-events: none;

      &.in {
        pointer-events: all;
      }
    }
  }

  + .modal-backdrop {
    pointer-events: none;

    &.in {
      pointer-events: all;
    }
  }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/scss/_modal.scss";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/_dev/front/scss/_modal.scss", "/var/www/html/modules/blockwishlist/_dev/front/scss/_modal.scss");
    }
}
