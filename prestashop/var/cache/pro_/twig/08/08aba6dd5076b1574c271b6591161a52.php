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

/* @Modules/ps_facetedsearch/views/dist/back.js */
class __TwigTemplate_4664df863f3316bc10a09e017f99dedf extends Template
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
        echo "/*! For license information please see back.js.LICENSE.txt */
(()=>{var e={208:()=>{},379:(e,t,n)=>{\"use strict\";var i,r=function(){var e={};return function(t){if(void 0===e[t]){var n=document.querySelector(t);if(window.HTMLIFrameElement&&n instanceof window.HTMLIFrameElement)try{n=n.contentDocument.head}catch(e){n=null}e[t]=n}return e[t]}}(),s=[];function a(e){for(var t=-1,n=0;n<s.length;n++)if(s[n].identifier===e){t=n;break}return t}function o(e,t){for(var n={},i=[],r=0;r<e.length;r++){var o=e[r],l=t.base?o[0]+t.base:o[0],c=n[l]||0,d=\"\".concat(l,\" \").concat(c);n[l]=c+1;var h=a(d),u={css:o[1],media:o[2],sourceMap:o[3]};-1!==h?(s[h].references++,s[h].updater(u)):s.push({identifier:d,updater:g(u,t),references:1}),i.push(d)}return i}function l(e){var t=document.createElement(\"style\"),i=e.attributes||{};if(void 0===i.nonce){var s=n.nc;s&&(i.nonce=s)}if(Object.keys(i).forEach((function(e){t.setAttribute(e,i[e])})),\"function\"==typeof e.insert)e.insert(t);else{var a=r(e.insert||\"head\");if(!a)throw new Error(\"Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.\");a.appendChild(t)}return t}var c,d=(c=[],function(e,t){return c[e]=t,c.filter(Boolean).join(\"\\n\")});function h(e,t,n,i){var r=n?\"\":i.media?\"@media \".concat(i.media,\" {\").concat(i.css,\"}\"):i.css;if(e.styleSheet)e.styleSheet.cssText=d(t,r);else{var s=document.createTextNode(r),a=e.childNodes;a[t]&&e.removeChild(a[t]),a.length?e.insertBefore(s,a[t]):e.appendChild(s)}}function u(e,t,n){var i=n.css,r=n.media,s=n.sourceMap;if(r?e.setAttribute(\"media\",r):e.removeAttribute(\"media\"),s&&\"undefined\"!=typeof btoa&&(i+=\"\\n/*# sourceMappingURL=data:application/json;base64,\".concat(btoa(unescape(encodeURIComponent(JSON.stringify(s)))),\" */\")),e.styleSheet)e.styleSheet.cssText=i;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(i))}}var f=null,p=0;function g(e,t){var n,i,r;if(t.singleton){var s=p++;n=f||(f=l(t)),i=h.bind(null,n,s,!1),r=h.bind(null,n,s,!0)}else n=l(t),i=u.bind(null,n,t),r=function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(n)};return i(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap)return;i(e=t)}else r()}}e.exports=function(e,t){(t=t||{}).singleton||\"boolean\"==typeof t.singleton||(t.singleton=(void 0===i&&(i=Boolean(window&&document&&document.all&&!window.atob)),i));var n=o(e=e||[],t);return function(e){if(e=e||[],\"[object Array]\"===Object.prototype.toString.call(e)){for(var i=0;i<n.length;i++){var r=a(n[i]);s[r].references--}for(var l=o(e,t),c=0;c<n.length;c++){var d=a(n[c]);0===s[d].references&&(s[d].updater(),s.splice(d,1))}n=l}}}}},t={};function n(i){var r=t[i];if(void 0!==r)return r.exports;var s=t[i]={exports:{}};return e[i](s,s.exports,n),s.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var i in t)n.o(t,i)&&!n.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:t[i]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),n.nc=void 0,(()=>{\"use strict\";var e=n(379),t=n.n(e),i=n(208),r=n.n(i);t()(r(),{insert:\"head\",singleton:!1}),r().locals,window.checkForm=function(){var e=!1,t=!1,n=!1,i=!1;return \$(\"#categories-treeview input[type=checkbox]\").each((function(){return!\$(this).prop(\"checked\")||(e=!0,!1)})),\$('input[name=\"controllers[]\"]').each((function(){\$(this).prop(\"checked\")&&(n=!0,\"category\"===\$(this).val()&&(t=!0))})),\$(\".filter_list_item input[type=checkbox]\").each((function(){return!\$(this).prop(\"checked\")||(i=!0,!1)})),n?t&&!e?(alert(translations.no_selected_categories),\$(\"#categories-treeview input[type=checkbox]\").first().focus(),!1):!!i||(alert(translations.no_selected_filters),\$(\"#filter_list_item input[type=checkbox]\").first().focus(),!1):(alert(translations.no_selected_controllers),!1)},\$(document).ready((function(){\$(\".ajaxcall\").click((function(){if(void 0===this.legend&&(this.legend=\$(this).html()),void 0===this.running&&(this.running=!1),!0===this.running)return!1;\$(\".ajax-message\").hide(),this.running=!0,(void 0===this.restartAllowed||this.restartAllowed)&&(\$(this).html(this.legend+translations.in_progress),\$(\"#indexing-warning\").show()),this.restartAllowed=!1;var e=\$(this).attr(\"rel\");return \$.ajax({url:\"\".concat(this.href,\"&ajax=1\"),context:this,dataType:\"json\",cache:\"false\",success:function(){this.running=!1,this.restartAllowed=!0,\$(\"#indexing-warning\").hide(),\$(this).html(this.legend),\$(\"#ajax-message-ok span\").html(\"price\"===e?translations.url_indexation_finished:translations.attribute_indexation_finished),\$(\"#ajax-message-ok\").show()},error:function(){this.restartAllowed=!0,\$(\"#indexing-warning\").hide(),\$(\"#ajax-message-ko span\").html(\"price\"===e?translations.url_indexation_failed:translations.attribute_indexation_failed),\$(\"#ajax-message-ko\").show(),\$(this).html(this.legend),this.running=!1}}),!1}));var e=0;if(\$(\".ajaxcall-recurcive\").each((function(t,n){\$(n).click((function(t){return t.preventDefault(),void 0===this.cursor&&(this.cursor=0),void 0===this.legend&&(this.legend=\$(this).html()),void 0===this.running&&(this.running=!1),!0===this.running||(\$(\".ajax-message\").hide(),this.running=!0,(void 0===this.restartAllowed||this.restartAllowed)&&(\$(this).html(this.legend+translations.in_progress),\$(\"#indexing-warning\").show()),this.restartAllowed=!1,\$.ajax({url:\"\".concat(this.href,\"&ajax=1&cursor=\").concat(this.cursor),context:this,dataType:\"json\",cache:\"false\",success:function(t){if(this.running=!1,t.result)return this.cursor=0,e=0,\$(\"#indexing-warning\").hide(),\$(this).html(this.legend),\$(\"#ajax-message-ok span\").html(translations.price_indexation_finished),void \$(\"#ajax-message-ok\").show();e+=parseInt(t.count,10),this.cursor=parseInt(t.cursor,10),\$(this).html(this.legend+translations.price_indexation_in_progress.replace(\"%s\",\"\".concat(e,\"/\").concat(t.total))),\$(this).click()},error:function(e){this.restartAllowed=!0,\$(\"#indexing-warning\").hide(),\$(\"#ajax-message-ko span\").html(translations.price_indexation_failed),\$(\"#ajax-message-ko\").show(),\$(this).html(this.legend),this.cursor=0,this.running=!1}})),!1}))})),\"undefined\"!=typeof PS_LAYERED_INDEXED&&PS_LAYERED_INDEXED&&(\$(\"#url-indexe\").click(),\$(\"#full-index\").click()),\"undefined\"!=typeof Sortable){var t=document.getElementById(\"list-filters\");null!==t&&new Sortable(t,{animation:150,ghostClass:\"sortable-ghost\"})}else \$(\".sortable\").sortable({forcePlaceholderSize:!0});if(\$(\".filter_list_item input[type=checkbox]\").click((function(){var e=parseInt(\$(\"#selected_filters\").html(),10);\$(\"#selected_filters\").html(\$(this).prop(\"checked\")?e+1:e-1)})),void 0!==window.filters){var n,i=JSON.parse(window.filters),r=null;Object.keys(i).forEach((function(e){(n=\$(\"#\".concat(e))).prop(\"checked\",!0),\$(\"#selected_filters\").html(parseInt(\$(\"#selected_filters\").html(),10)+1),\$('select[name=\"'.concat(e,'_filter_type\"]')).val(i[e].filter_type),\$('select[name=\"'.concat(e,'_filter_show_limit\"]')).val(i[e].filter_show_limit),null===r?(r=\$(\"#\".concat(e)).closest(\"ul\"),n.closest(\"li\").detach().prependTo(r)):n.closest(\"li\").detach().insertAfter(r),r=n.closest(\"li\")}))}})),\$(document).on(\"ready\",(function(){var e=\$('input[name=\"ps_layered_filter_by_default_category\"]');e.on(\"change\",(function(e){var t=\$(this);t.prop(\"checked\")&&(\"1\"===t.val()?(\$('input[name=\"ps_layered_full_tree\"][value=\"0\"]').prop(\"checked\",!0),\$('input[name=\"ps_layered_full_tree\"]').prop(\"disabled\",!0)):\$('input[name=\"ps_layered_full_tree\"]').prop(\"disabled\",!1))})),e.filter('[value=\"1\"]').trigger(\"change\")}))})()})();
//# sourceMappingURL=back.js.map";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/dist/back.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/views/dist/back.js", "/var/www/html/modules/ps_facetedsearch/views/dist/back.js");
    }
}
