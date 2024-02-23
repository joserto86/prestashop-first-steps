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

/* @Modules/blockwishlist/public/backoffice.bundle.js */
class __TwigTemplate_7c283ea10a3cec45273cc6b897dfaac1 extends Template
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
        echo "window.backoffice=function(t){function e(e){for(var n,a,c=e[0],u=e[1],s=e[2],l=0,h=[];l<c.length;l++)a=c[l],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&h.push(o[a][0]),o[a]=0;for(n in u)Object.prototype.hasOwnProperty.call(u,n)&&(t[n]=u[n]);for(f&&f(e);h.length;)h.shift()();return i.push.apply(i,s||[]),r()}function r(){for(var t,e=0;e<i.length;e++){for(var r=i[e],n=!0,c=1;c<r.length;c++){var u=r[c];0!==o[u]&&(n=!1)}n&&(i.splice(e--,1),t=a(a.s=r[0]))}return t}var n={},o={3:0},i=[];function a(e){if(n[e])return n[e].exports;var r=n[e]={i:e,l:!1,exports:{}};return t[e].call(r.exports,r,r.exports,a),r.l=!0,r.exports}a.m=t,a.c=n,a.d=function(t,e,r){a.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},a.r=function(t){\"undefined\"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:\"Module\"}),Object.defineProperty(t,\"__esModule\",{value:!0})},a.t=function(t,e){if(1&e&&(t=a(t)),8&e)return t;if(4&e&&\"object\"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,\"default\",{enumerable:!0,value:t}),2&e&&\"string\"!=typeof t)for(var n in t)a.d(r,n,function(e){return t[e]}.bind(null,n));return r},a.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return a.d(e,\"a\",e),e},a.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},a.p=\"\";var c=window.webpackJsonp_name_=window.webpackJsonp_name_||[],u=c.push.bind(c);c.push=e,c=c.slice();for(var s=0;s<c.length;s++)e(c[s]);var f=u;return i.push([438,0]),r()}({14:function(t,e,r){t.exports=r(31)},15:function(t,e,r){\"use strict\";e.__esModule=!0;var n,o=r(33),i=(n=o)&&n.__esModule?n:{default:n};e.default=function(t){return function(){var e=t.apply(this,arguments);return new i.default((function(t,r){return function n(o,a){try{var c=e[o](a),u=c.value}catch(t){return void r(t)}if(!c.done)return i.default.resolve(u).then((function(t){n(\"next\",t)}),(function(t){n(\"throw\",t)}));t(u)}(\"next\")}))}}},227:function(t,e,r){},31:function(t,e,r){var n=function(){return this}()||Function(\"return this\")(),o=n.regeneratorRuntime&&Object.getOwnPropertyNames(n).indexOf(\"regeneratorRuntime\")>=0,i=o&&n.regeneratorRuntime;if(n.regeneratorRuntime=void 0,t.exports=r(32),o)n.regeneratorRuntime=i;else try{delete n.regeneratorRuntime}catch(t){n.regeneratorRuntime=void 0}},32:function(t,e){!function(e){\"use strict\";var r=Object.prototype,n=r.hasOwnProperty,o=\"function\"==typeof Symbol?Symbol:{},i=o.iterator||\"@@iterator\",a=o.asyncIterator||\"@@asyncIterator\",c=o.toStringTag||\"@@toStringTag\",u=\"object\"==typeof t,s=e.regeneratorRuntime;if(s)u&&(t.exports=s);else{(s=e.regeneratorRuntime=u?t.exports:{}).wrap=v;var f={},l={};l[i]=function(){return this};var h=Object.getPrototypeOf,p=h&&h(h(O([])));p&&p!==r&&n.call(p,i)&&(l=p);var d=w.prototype=g.prototype=Object.create(l);m.prototype=d.constructor=w,w.constructor=m,w[c]=m.displayName=\"GeneratorFunction\",s.isGeneratorFunction=function(t){var e=\"function\"==typeof t&&t.constructor;return!!e&&(e===m||\"GeneratorFunction\"===(e.displayName||e.name))},s.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,w):(t.__proto__=w,c in t||(t[c]=\"GeneratorFunction\")),t.prototype=Object.create(d),t},s.awrap=function(t){return{__await:t}},b(x.prototype),x.prototype[a]=function(){return this},s.AsyncIterator=x,s.async=function(t,e,r,n){var o=new x(v(t,e,r,n));return s.isGeneratorFunction(e)?o:o.next().then((function(t){return t.done?t.value:o.next()}))},b(d),d[c]=\"Generator\",d[i]=function(){return this},d.toString=function(){return\"[object Generator]\"},s.keys=function(t){var e=[];for(var r in t)e.push(r);return e.reverse(),function r(){for(;e.length;){var n=e.pop();if(n in t)return r.value=n,r.done=!1,r}return r.done=!0,r}},s.values=O,j.prototype={constructor:j,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method=\"next\",this.arg=void 0,this.tryEntries.forEach(E),!t)for(var e in this)\"t\"===e.charAt(0)&&n.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if(\"throw\"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function r(r,n){return a.type=\"throw\",a.arg=t,e.next=r,n&&(e.method=\"next\",e.arg=void 0),!!n}for(var o=this.tryEntries.length-1;o>=0;--o){var i=this.tryEntries[o],a=i.completion;if(\"root\"===i.tryLoc)return r(\"end\");if(i.tryLoc<=this.prev){var c=n.call(i,\"catchLoc\"),u=n.call(i,\"finallyLoc\");if(c&&u){if(this.prev<i.catchLoc)return r(i.catchLoc,!0);if(this.prev<i.finallyLoc)return r(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return r(i.catchLoc,!0)}else{if(!u)throw new Error(\"try statement without catch or finally\");if(this.prev<i.finallyLoc)return r(i.finallyLoc)}}}},abrupt:function(t,e){for(var r=this.tryEntries.length-1;r>=0;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,\"finallyLoc\")&&this.prev<o.finallyLoc){var i=o;break}}i&&(\"break\"===t||\"continue\"===t)&&i.tryLoc<=e&&e<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=t,a.arg=e,i?(this.method=\"next\",this.next=i.finallyLoc,f):this.complete(a)},complete:function(t,e){if(\"throw\"===t.type)throw t.arg;return\"break\"===t.type||\"continue\"===t.type?this.next=t.arg:\"return\"===t.type?(this.rval=this.arg=t.arg,this.method=\"return\",this.next=\"end\"):\"normal\"===t.type&&e&&(this.next=e),f},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),E(r),f}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if(\"throw\"===n.type){var o=n.arg;E(r)}return o}}throw new Error(\"illegal catch attempt\")},delegateYield:function(t,e,r){return this.delegate={iterator:O(t),resultName:e,nextLoc:r},\"next\"===this.method&&(this.arg=void 0),f}}}function v(t,e,r,n){var o=e&&e.prototype instanceof g?e:g,i=Object.create(o.prototype),a=new j(n||[]);return i._invoke=function(t,e,r){var n=\"suspendedStart\";return function(o,i){if(\"executing\"===n)throw new Error(\"Generator is already running\");if(\"completed\"===n){if(\"throw\"===o)throw i;return k()}for(r.method=o,r.arg=i;;){var a=r.delegate;if(a){var c=L(a,r);if(c){if(c===f)continue;return c}}if(\"next\"===r.method)r.sent=r._sent=r.arg;else if(\"throw\"===r.method){if(\"suspendedStart\"===n)throw n=\"completed\",r.arg;r.dispatchException(r.arg)}else\"return\"===r.method&&r.abrupt(\"return\",r.arg);n=\"executing\";var u=y(t,e,r);if(\"normal\"===u.type){if(n=r.done?\"completed\":\"suspendedYield\",u.arg===f)continue;return{value:u.arg,done:r.done}}\"throw\"===u.type&&(n=\"completed\",r.method=\"throw\",r.arg=u.arg)}}}(t,r,a),i}function y(t,e,r){try{return{type:\"normal\",arg:t.call(e,r)}}catch(t){return{type:\"throw\",arg:t}}}function g(){}function m(){}function w(){}function b(t){[\"next\",\"throw\",\"return\"].forEach((function(e){t[e]=function(t){return this._invoke(e,t)}}))}function x(t){var e;this._invoke=function(r,o){function i(){return new Promise((function(e,i){!function e(r,o,i,a){var c=y(t[r],t,o);if(\"throw\"!==c.type){var u=c.arg,s=u.value;return s&&\"object\"==typeof s&&n.call(s,\"__await\")?Promise.resolve(s.__await).then((function(t){e(\"next\",t,i,a)}),(function(t){e(\"throw\",t,i,a)})):Promise.resolve(s).then((function(t){u.value=t,i(u)}),a)}a(c.arg)}(r,o,e,i)}))}return e=e?e.then(i,i):i()}}function L(t,e){var r=t.iterator[e.method];if(void 0===r){if(e.delegate=null,\"throw\"===e.method){if(t.iterator.return&&(e.method=\"return\",e.arg=void 0,L(t,e),\"throw\"===e.method))return f;e.method=\"throw\",e.arg=new TypeError(\"The iterator does not provide a 'throw' method\")}return f}var n=y(r,t.iterator,e.arg);if(\"throw\"===n.type)return e.method=\"throw\",e.arg=n.arg,e.delegate=null,f;var o=n.arg;return o?o.done?(e[t.resultName]=o.value,e.next=t.nextLoc,\"return\"!==e.method&&(e.method=\"next\",e.arg=void 0),e.delegate=null,f):o:(e.method=\"throw\",e.arg=new TypeError(\"iterator result is not an object\"),e.delegate=null,f)}function _(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function E(t){var e=t.completion||{};e.type=\"normal\",delete e.arg,t.completion=e}function j(t){this.tryEntries=[{tryLoc:\"root\"}],t.forEach(_,this),this.reset(!0)}function O(t){if(t){var e=t[i];if(e)return e.call(t);if(\"function\"==typeof t.next)return t;if(!isNaN(t.length)){var r=-1,o=function e(){for(;++r<t.length;)if(n.call(t,r))return e.value=t[r],e.done=!1,e;return e.value=void 0,e.done=!0,e};return o.next=o}}return{next:k}}function k(){return{value:void 0,done:!0}}}(function(){return this}()||Function(\"return this\")())},33:function(t,e,r){t.exports={default:r(82),__esModule:!0}},438:function(t,e,r){r(439),t.exports=r(227)},439:function(t,e,r){\"use strict\";var n=a(r(14)),o=a(r(15)),i=a(r(440));function a(t){return t&&t.__esModule?t:{default:t}}var c=document.querySelectorAll(\".btn-group button\"),u=document.querySelector(\".js-refresh\"),s=!1;
/**
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
 */c.forEach((function(t){t.addEventListener(\"click\",(function(){t.classList.contains(\"active\")||(c.forEach((function(t){t.classList.remove(\"active\")})),t.classList.add(\"active\"),document.querySelectorAll(\".wishlist-tab\").forEach((function(e){e.classList.contains(\"active\")&&e.dataset.tab!==t.dataset.tab&&e.classList.remove(\"active\"),e.dataset.tab===t.dataset.tab&&e.classList.add(\"active\")})))}))})),u.addEventListener(\"click\",(0,o.default)(n.default.mark((function t(){var e,r,o;return n.default.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(s){t.next=12;break}return s=!0,e=u.innerHTML,u.innerHTML='<i class=\"material-icons\">hourglass_empty</i>',t.next=6,fetch(\"\"+i.default.resetCacheUrl,{method:\"POST\",headers:{\"Content-Type\":\"application/json\",Accept:\"application/json, text/javascript, */*; q=0.01\"}});case 6:return r=t.sent,t.next=9,r.json();case 9:o=t.sent,o.success?location.reload():(s=!1,u.innerHTML=e);case 12:case\"end\":return t.stop()}}),t,void 0)}))))},440:function(t,e){t.exports=window.blockwishlistModule}});";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/public/backoffice.bundle.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/public/backoffice.bundle.js", "/var/www/html/modules/blockwishlist/public/backoffice.bundle.js");
    }
}
