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

/* @Modules/ps_searchbar/ps_searchbar.js */
class __TwigTemplate_003125186e996689e87ac1fe57628b69 extends Template
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
        echo "/* global \$ */
\$(document).ready(function () {
    var \$searchWidget = \$('#search_widget');
    var \$searchBox    = \$searchWidget.find('input[type=text]');
    var searchURL     = \$searchWidget.attr('data-search-controller-url');
    var \$clearButton  = \$searchWidget.find('i.clear');

    \$.widget('prestashop.psBlockSearchAutocomplete', \$.ui.autocomplete, {
        _renderItem: function (ul, product) {
            var image = (product.cover) ? product.cover : prestashop.urls.no_picture_image;
            var \$img = \$('<img class=\"autocomplete-thumbnail\" src=\"'+image.bySize.small_default.url+'\">');
            return \$(\"<li>\")
                .append(\$(\"<a>\")
                    .append(\$img)
                    .append(\$(\"<span>\").html(product.name).addClass(\"product\"))
                ).appendTo(ul)
            ;
        }
    });

    var isMobile = function() {
        return \$(window).width() < 768;
    };
    var autocompletePosition = function() {
      return {
        my: 'right top',
        at: 'right bottom',
        of: isMobile() ? '.header-top' : '#search_widget',
      };
    };

    \$searchBox.psBlockSearchAutocomplete({
        position: autocompletePosition(),
        source: function (query, response) {
            \$.post(searchURL, {
                s: query.term,
                resultsPerPage: 10
            }, null, 'json')
            .then(function (resp) {
                response(resp.products);
            })
            .fail(response);
        },
        select: function (event, ui) {
            var url = ui.item.url;
            window.location.href = url;
        },
    }).psBlockSearchAutocomplete(\"widget\").addClass('searchbar-autocomplete');

    \$(window).resize(function() {
      \$searchBox.psBlockSearchAutocomplete({
        position: autocompletePosition(),
      });
      \$searchBox.keyup();
    });

    \$clearButton.click(function() {
        \$searchBox.val(\"\");
        \$clearButton.hide();
    });

    \$searchBox.keyup(function() {
        \$clearButton.toggle(\$searchBox.val() !== \"\" && isMobile());
    });
});
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_searchbar/ps_searchbar.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_searchbar/ps_searchbar.js", "/var/www/html/modules/ps_searchbar/ps_searchbar.js");
    }
}
