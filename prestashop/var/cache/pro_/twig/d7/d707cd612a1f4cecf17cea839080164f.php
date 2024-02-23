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

/* @Modules/blockwishlist/views/templates/components/modals/delete.tpl */
class __TwigTemplate_6befa78ba22f6cf607749a9f6f66405d extends Template
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
  class=\"wishlist-delete\"
  {if isset(\$listUrl)}
    data-delete-list-url=\"{\$listUrl}\"
  {/if}
  {if isset(\$deleteProductUrl)}
    data-delete-product-url=\"{\$deleteProductUrl}\"
  {/if}
  data-title=\"{l s='Remove product from wishlist' d='Modules.Blockwishlist.Shop'}\"
  data-title-list=\"{l s='Delete wishlist' d='Modules.Blockwishlist.Shop'}\"
  data-placeholder='{l s='The product will be removed from \"%nameofthewishlist%\".' d='Modules.Blockwishlist.Shop'}'
  data-cancel-text=\"{l s='Cancel' d='Modules.Blockwishlist.Shop'}\"
  data-delete-text=\"{l s='Remove' d='Modules.Blockwishlist.Shop'}\"
  data-delete-text-list=\"{l s='Delete' d='Modules.Blockwishlist.Shop'}\"
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
          <h5 class=\"modal-title\">((modalTitle))</h5>
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
        <div class=\"modal-body\" v-if=\"productId\">
          <p class=\"modal-text\">((confirmMessage))</p> 
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
            @click=\"deleteWishlist\"
          >
            ((modalDeleteText))
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
        return "@Modules/blockwishlist/views/templates/components/modals/delete.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/views/templates/components/modals/delete.tpl", "/var/www/html/modules/blockwishlist/views/templates/components/modals/delete.tpl");
    }
}
