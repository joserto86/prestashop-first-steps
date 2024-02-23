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

/* @Modules/blockwishlist/_dev/front/js/components/Login/Login.vue */
class __TwigTemplate_794685fbf64ddbeedfef7195b24d7270 extends Template
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
        echo "<!--**
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
 *-->
<script>
  import EventBus from '@components/EventBus';
  import prestashop from 'prestashop';

  /**
   * This component display a modal where you can redirect to login page
   */
  export default {
    name: 'Login',
    props: {
      cancelText: {
        type: String,
        required: true,
        default: 'Cancel',
      },
      loginText: {
        type: String,
        required: true,
        default: 'Login',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
        listId: null,
        prestashop,
      };
    },
    methods: {
      /**
       * Toggle the modal
       */
      toggleModal() {
        this.isHidden = !this.isHidden;
      },
    },
    mounted() {
      /**
       * Register to the event showCreateWishlist so others components can toggle this modal
       *
       * @param {String} 'showDeleteWishlist'
       */
      EventBus.\$on('showLogin', () => {
        this.toggleModal();
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  .wishlist {
    &-login {
      .wishlist-modal {
        z-index: 0;

        &.show {
          z-index: 1053;
        }
      }
    }
  }
</style>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/js/components/Login/Login.vue";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/_dev/front/js/components/Login/Login.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/Login/Login.vue");
    }
}
