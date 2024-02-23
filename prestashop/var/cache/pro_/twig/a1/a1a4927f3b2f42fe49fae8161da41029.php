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

/* @Modules/blockwishlist/_dev/front/js/components/Pagination/Pagination.vue */
class __TwigTemplate_9f31d1c89016cdca30e8e8b576b0b0cd extends Template
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

  /**
   * Dumb component to display the list of Wishlist on a page
   */
  export default {
    name: 'Pagination',
    data() {
      return {
        total: null,
        minShown: null,
        maxShown: null,
        pageNumber: 0,
        pages: [],
        currentPage: null,
        display: false,
      };
    },
    methods: {
      paginate(page) {
        EventBus.\$emit('updatePagination', {
          page,
        });

        this.currentPage = page;
      },
    },
    mounted() {
      EventBus.\$on('paginate', (payload) => {
        this.total = payload.detail.total;
        this.minShown = payload.detail.minShown;
        this.maxShown = payload.detail.maxShown;
        this.pageNumber = payload.detail.pageNumber;
        this.currentPage = payload.detail.currentPage;
        this.pages = payload.detail.pages;
        this.display = payload.detail.display;
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-pagination {
      .previous {
        margin-right: 1.875rem;
      }

      .js-wishlist-search-link {
        cursor: pointer;

        &:not([href]):not([tabindex]):hover {
          color: \$blue;
        }

        &.disabled {
          cursor: inherit;

          &:hover {
            color: \$blue;
          }
        }
      }
    }
  }
</style>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/js/components/Pagination/Pagination.vue";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/_dev/front/js/components/Pagination/Pagination.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/Pagination/Pagination.vue");
    }
}
