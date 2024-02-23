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

/* @Modules/blockwishlist/_dev/front/js/components/ChooseList/ChooseList.vue */
class __TwigTemplate_eabc42bfdc59380a74af74294b5774ba extends Template
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
<template>
  <div class=\"wishlist-chooselist\">
    <ul class=\"wishlist-list\">
      <li
        class=\"wishlist-list-item\"
        v-for=\"list of lists\"
        :key=\"list.id_wishlist\"
        @click=\"select(list.id_wishlist)\"
      >
        <p>
          ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "
        </p>
      </li>
    </ul>

    <ContentLoader
      v-if=\"\$apollo.queries.lists.loading\"
      class=\"wishlist-list-loader\"
      height=\"105\"
    >
      <rect
        x=\"0\"
        y=\"12\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"36\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"60\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"84\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
    </ContentLoader>

    <p
      class=\"wishlist-list-empty\"
      v-if=\"lists && lists.length <= 0 && !\$apollo.queries.lists.loading\"
    >
      ";
        // line 77
        echo twig_escape_filter($this->env, ($context["emptyText"] ?? null), "html", null, true);
        echo "
    </p>
  </div>
</template>

<script>
  import getLists from '@graphqlFiles/queries/getlists';
  import addtolist from '@graphqlFiles/mutations/addtolist';
  import EventBus from '@components/EventBus';
  import {ContentLoader} from 'vue-content-loader';

  /**
   * The role of this component is to render a list
   * and make the possibility to choose one for the selected product
   */
  export default {
    name: 'ChooseList',
    components: {
      ContentLoader,
    },
    apollo: {
      lists: {
        query: getLists,
        variables() {
          return {
            url: this.url,
          };
        },
      },
    },
    props: {
      productId: {
        type: Number,
        required: true,
        default: 0,
      },
      quantity: {
        type: Number,
        required: true,
        default: 0,
      },
      productAttributeId: {
        type: Number,
        required: true,
        default: 0,
      },
      url: {
        type: String,
        required: true,
        default: '',
      },
      emptyText: {
        type: String,
        required: true,
        default: 'No list found',
      },
      addUrl: {
        type: String,
        required: true,
        default: '',
      },
    },
    methods: {
      /**
       * Select a list and add the product to it
       *
       * @param {Int} listId The id of the list selected
       * @param {Int} userId The id of the user
       * @param {Int} productId The id of the product
       */
      async select(listId) {
        const {data} = await this.\$apollo.mutate({
          mutation: addtolist,
          variables: {
            listId,
            url: this.addUrl,
            productId: this.productId,
            quantity: this.quantity,
            productAttributeId: this.productAttributeId,
          },
        });

        const {addToList: response} = data;

        /**
         * Hide the modal inside the parent
         */
        this.\$emit('hide');

        EventBus.\$emit('showToast', {
          detail: {
            type: response.success ? 'success' : 'error',
            message: response.message,
          },
        });

        /**
         * Send an event to the Heart the user previously clicked on
         */
        EventBus.\$emit('addedToWishlist', {
          detail: {
            productId: this.productId,
            listId,
            productAttributeId: this.productAttributeId,
          },
        });
      },
    },
    mounted() {
      /**
       * Register to the event refetchList so if an other component update it, this one can update his list
       *
       * @param {String} 'refetchList' The event I decided to create to communicate between VueJS Apps
       */
      EventBus.\$on('refetchList', () => {
        this.\$apollo.queries.lists.refetch();
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-list {
      max-height: 55vh;
      overflow-y: auto;
      border-top: 1px solid #e5e5e5;
      border-bottom: 1px solid #e5e5e5;
      margin: 0;

      &-empty {
        font-size: 30;
        text-align: center;
        padding: 30px;
        padding-bottom: 1.25rem;
        font-weight: bold;
        color: #000;
      }

      & .wishlist-list-item {
        padding: 0.875rem 0;
        transition: 0.25s ease-out;
        cursor: pointer;
        margin-bottom: 0;

        &:hover {
          background: lighten(\$blue, 45%);
        }

        p {
          font-size: 0.875rem;
          letter-spacing: 0;
          color: #232323;
          margin-bottom: 0;
          line-height: 1rem;
          padding: 0 2.5rem;
        }
      }
    }
  }
</style>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/js/components/ChooseList/ChooseList.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 77,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/_dev/front/js/components/ChooseList/ChooseList.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/ChooseList/ChooseList.vue");
    }
}
