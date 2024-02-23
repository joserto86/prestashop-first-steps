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

/* @Modules/blockreassurance/views/dist/front.js */
class __TwigTemplate_8a7deb9fdd1cdfd575155a549261c305 extends Template
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
        echo "/*! For license information please see front.js.LICENSE.txt */
(()=>{var e={267:()=>{},379:e=>{\"use strict\";var t=[];function r(e){for(var r=-1,n=0;n<t.length;n++)if(t[n].identifier===e){r=n;break}return r}function n(e,n){for(var a={},o=[],i=0;i<e.length;i++){var c=e[i],u=n.base?c[0]+n.base:c[0],l=a[u]||0,d=\"\".concat(u,\" \").concat(l);a[u]=l+1;var p=r(d),f={css:c[1],media:c[2],sourceMap:c[3],supports:c[4],layer:c[5]};if(-1!==p)t[p].references++,t[p].updater(f);else{var v=s(f,n);n.byIndex=i,t.splice(i,0,{identifier:d,updater:v,references:1})}o.push(d)}return o}function s(e,t){var r=t.domAPI(t);return r.update(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap&&t.supports===e.supports&&t.layer===e.layer)return;r.update(e=t)}else r.remove()}}e.exports=function(e,s){var a=n(e=e||[],s=s||{});return function(e){e=e||[];for(var o=0;o<a.length;o++){var i=r(a[o]);t[i].references--}for(var c=n(e,s),u=0;u<a.length;u++){var l=r(a[u]);0===t[l].references&&(t[l].updater(),t.splice(l,1))}a=c}}},569:e=>{\"use strict\";var t={};e.exports=function(e,r){var n=function(e){if(void 0===t[e]){var r=document.querySelector(e);if(window.HTMLIFrameElement&&r instanceof window.HTMLIFrameElement)try{r=r.contentDocument.head}catch(e){r=null}t[e]=r}return t[e]}(e);if(!n)throw new Error(\"Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.\");n.appendChild(r)}},216:e=>{\"use strict\";e.exports=function(e){var t=document.createElement(\"style\");return e.setAttributes(t,e.attributes),e.insert(t,e.options),t}},565:(e,t,r)=>{\"use strict\";e.exports=function(e){var t=r.nc;t&&e.setAttribute(\"nonce\",t)}},795:e=>{\"use strict\";e.exports=function(e){if(\"undefined\"==typeof document)return{update:function(){},remove:function(){}};var t=e.insertStyleElement(e);return{update:function(r){!function(e,t,r){var n=\"\";r.supports&&(n+=\"@supports (\".concat(r.supports,\") {\")),r.media&&(n+=\"@media \".concat(r.media,\" {\"));var s=void 0!==r.layer;s&&(n+=\"@layer\".concat(r.layer.length>0?\" \".concat(r.layer):\"\",\" {\")),n+=r.css,s&&(n+=\"}\"),r.media&&(n+=\"}\"),r.supports&&(n+=\"}\");var a=r.sourceMap;a&&\"undefined\"!=typeof btoa&&(n+=\"\\n/*# sourceMappingURL=data:application/json;base64,\".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a)))),\" */\")),t.styleTagTransform(n,e,t.options)}(t,e,r)},remove:function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(t)}}}},589:e=>{\"use strict\";e.exports=function(e,t){if(t.styleSheet)t.styleSheet.cssText=e;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(e))}}}},t={};function r(n){var s=t[n];if(void 0!==s)return s.exports;var a=t[n]={exports:{}};return e[n](a,a.exports,r),a.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.nc=void 0,(()=>{\"use strict\";var e=r(379),t=r.n(e),n=r(795),s=r.n(n),a=r(569),o=r.n(a),i=r(565),c=r.n(i),u=r(216),l=r.n(u),d=r(589),p=r.n(d),f=r(267),v=r.n(f),m={};m.styleTagTransform=p(),m.setAttributes=c(),m.insert=o().bind(null,\"head\"),m.domAPI=s(),m.insertStyleElement=l(),t()(v(),m),v()&&v().locals&&v().locals,\$(window).ready((()=>{const e=\$(\".blockreassurance_product img.svg, .blockreassurance img.svg\").map((function(){return \$(this).attr(\"src\")})).toArray();e.filter(((t,r)=>e.indexOf(t)===r)).forEach((function(e){const t=\$(`.blockreassurance_product img.svg.invisible[src=\"\${e}\"], .blockreassurance img.svg.invisible[src=\"\${e}\"]`);0!==t.length&&\$.ajax({url:e,type:\"GET\",success(r){if(\$.isXMLDoc(r)){let n=\$(r).find(\"svg\");n=n.attr(\"data-img-url\",e),n=n.removeAttr(\"xmlns:a\"),n.find(\"path[fill]\").attr(\"fill\",window.psr_icon_color),n.find(\"path:not([fill])\").css(\"fill\",window.psr_icon_color),t.each((function(){const e=\$(this).attr(\"id\"),t=\$(this).attr(\"class\");let r=n.clone();r=void 0!==e?r.attr(\"id\",e):r,r=void 0!==t?r.attr(\"class\",`\${t} replaced-svg`):r.attr(\"class\",\" replaced-svg\"),r.removeClass(\"invisible\"),\$(this).replaceWith(r)}))}}})}))}))})()})();
//# sourceMappingURL=front.js.map";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/dist/front.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/dist/front.js", "/var/www/html/modules/blockreassurance/views/dist/front.js");
    }
}
