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

/* @Modules/blockwishlist/views/templates/components/modals/share.tpl */
class __TwigTemplate_d65e4e6212a6d3dce472dba17f18dde0 extends Template
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
        echo "{**
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
 *}

<div
  class=\"wishlist-share\"
  data-url=\"{\$url}\"
  data-title=\"{l s='Share wishlist' d='Modules.Blockwishlist.Shop'}\"
  data-copied-text=\"{l s='Copied!' d='Modules.Blockwishlist.Shop'}\"
  data-label=\"{l s='Share link' d='Modules.Blockwishlist.Shop'}\"
  data-cancel-text=\"{l s='Cancel' d='Modules.Blockwishlist.Shop'}\"
  data-copy-text=\"{l s='Copy text' d='Modules.Blockwishlist.Shop'}\"
>
  <div
    class=\"wishlist-modal modal fade\"
    {literal}
      :class=\"{show: !isHidden}\"
    {/literal}
    tabindex=\"-1\"
    role=\"dialog\"
    aria-modal=\"true\"
  >
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">((title))</h5>
          <button
            type=\"button\"
            class=\"close\"
            @click=\"toggleModal\"
            data-dismiss=\"modal\"
            aria-label=\"Close\"
          >
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group form-group-lg\">
            <label class=\"form-control-label\" for=\"input2\">((label))</label>
            <input
              type=\"text\"
              class=\"form-control form-control-lg\"
              v-model=\"value\"
              id=\"input2\"
              placeholder=\"Share link\"
            />
          </div>
        </div>
        <div class=\"modal-footer\">
          <button
            type=\"button\"
            class=\"modal-cancel btn btn-secondary\"
            data-dismiss=\"modal\"
            @click=\"toggleModal\"
          >
            ((cancelText))
          </button>

          <button
            type=\"button\"
            class=\"btn btn-primary\"
            @click=\"copyLink\"
          >
            (( actionText ))
          </button>
        </div>
      </div>
    </div>
  </div>

  <div 
    class=\"modal-backdrop fade\"
    {literal}
      :class=\"{in: !isHidden}\"
    {/literal}
  >
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/components/modals/share.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/views/templates/components/modals/share.tpl", "/var/www/html/modules/blockwishlist/views/templates/components/modals/share.tpl");
    }
}
