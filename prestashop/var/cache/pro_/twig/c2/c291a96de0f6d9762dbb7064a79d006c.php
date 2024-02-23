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

/* @Modules/psgdpr/views/css/back.css */
class __TwigTemplate_8bbcb5e827f20b2e310159c5b07d7c37 extends Template
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

.dt-buttons {
    display: inline-block;
}

.dataTables_filter {
    display: inline-block;
    float: right;
}

.swal-text {
    text-align: center !important;
}

.addresses-table {
    text-align: center;
}
.addresses-table th {
    text-align: center;
    font-weight: bold !important;
    border-bottom: solid 2px #25b9d7 !important;
}
.addresses-table td {
    padding: 10px !important;
}

.customerCards {
    padding: 15px;
    display: flex;
    flex-flow: row wrap;
}
.customerCard {
    margin: 10px;
    width: calc((100% / 3) - 20px);
    transition: all 0.2s ease-in-out;
}

.card-expander {
    transition: all 0.2s ease-in-out;
    border: solid 3px #25b9d7 !important;

    /* width: calc(300% + 60px); */
    width: calc(300% + 40px);

    /* background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiP…B3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyYWQpIiAvPjwvc3ZnPiA=), url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiP…B3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyYWQpIiAvPjwvc3ZnPiA=), url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiP…B3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyYWQpIiAvPjwvc3ZnPiA=), url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiP…B3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyYWQpIiAvPjwvc3ZnPiA=);
    background-size: 100%;
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, rgba(255, 255, 255, 0))), -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #ffffff), color-stop(100%, rgba(255, 255, 255, 0))), -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #95e0c0), color-stop(100%, rgba(255, 255, 255, 0))), -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(0%, #95e0c0), color-stop(100%, rgba(255, 255, 255, 0)));
    background-image: -moz-linear-gradient(top, #ffffff, rgba(255, 255, 255, 0)), -moz-linear-gradient(bottom, #ffffff, rgba(255, 255, 255, 0)), -moz-linear-gradient(top, #95e0c0, rgba(255, 255, 255, 0)), -moz-linear-gradient(bottom, #95e0c0, rgba(255, 255, 255, 0));
    background-image: -webkit-linear-gradient(top, #ffffff, rgba(255, 255, 255, 0)), -webkit-linear-gradient(bottom, #ffffff, rgba(255, 255, 255, 0)), -webkit-linear-gradient(top, #95e0c0, rgba(255, 255, 255, 0)), -webkit-linear-gradient(bottom, #95e0c0, rgba(255, 255, 255, 0));
    background-image: linear-gradient(to bottom, #ffffff, rgba(255, 255, 255, 0)), linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0)), linear-gradient(to bottom, #d4d4d4, rgba(255, 255, 255, 0)), linear-gradient(to top, #b1b1b1, rgba(255, 255, 255, 0));
    background-position: 0 0, 0 100%, 0 0, 0 100%;
    background-repeat: no-repeat;
    background-color: white;
    background-size: 100% 5em, 100% 5em, 100% 1em, 100% 1em;
    background-attachment: local, local, scroll, scroll; */
}
.customerCard.is-expanded .card-expander {
    min-height: 500px;
    max-height: 500px;
    /* overflow: visible; */
    overflow: hidden;
    overflow-y: scroll;
    margin-top: 30px;
    opacity: 1;
}
.customerCard.is-collapsed .card-expander {
    max-height: 0;
    min-height: 0;
    overflow: hidden;
    margin-top: 0;
    opacity: 0;
    padding: 0px !important;
    margin-bottom: 0px !important;
}

.customerCard:nth-of-type(3n+2) .card-expander {
    margin-left: calc(-100% - 20px);
}
.customerCard:nth-of-type(3n+3) .card-expander {
    margin-left: calc(-200% - 40px);
}
.customerCard:nth-of-type(3n+4) {
    clear: left;
}
/* .card_expander {
    width: calc(300% + 40px);
} */

.card-inner {
    margin-bottom: 0px !important;
    cursor: pointer;
}
.card-inner:hover {
    border: 1px solid #25b9d7 !important;
    background-color: #3ed2f01a !important;
}
.card-inner:hover .panel-footer {
    background-color: #ffffff1a !important;
}
.card-inner.active {
    border: 3px solid #25b9d7 !important;
}
.card-inner:after {
    display: block;
    height: 0;
    width: 0;
    position: absolute;
    bottom: -33px;
    left: calc(50% - 15px);
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-bottom: 15px solid #25B9D7;
}
.customerCard.is-collapsed .card-inner:after {
    transition: all 0.1s ease-in-out;
    content: \"\";
    opacity: 0;
}
.customerCard.is-expanded .card-inner:after {
    transition: all 0.5s ease-in-out;
    content: \"\";
    opacity: 1;
}

.notransition {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
}

.table-header {
    color: #00aff0;
}

.psgdpr-card-useful-link {
    cursor: pointer;
    text-align: center;
    width: 100%;
    height: 170px;
    padding: 15px;
    background-color: white;
    margin: 5px;
}
.psgdpr-card-useful-link img {
    width: 100px;
    height: 100px;
}
.psgdpr-card-useful-link:hover {
    background-color: #f3f3f3;
}
.psgdpr-card-useful-link:hover .card-link {
    color: #25b9d7;
}

.psgdpr-card {
    cursor: pointer;
    height: 200px;
    width: 100%;
    padding: 20px;
    border: 2px solid #bbcdd2;
    background-color: white;
    margin: 5px;
}

.psgdpr-card:hover {
    border: 4px solid #25b9d7;
    border-radius: 3px;
}
.psgdpr-card:hover .card-title {
    color: #25b9d7;
}

.panel-box {
    border-radius: 0px !important;
    background-color: #F5F5F5 !important;
}

.panel-box h3 {
    background-color: white !important;
    margin: -20px -20px 15px -20px !important;
}

.text-center {
    text-align: center;
}

.right-panel {
    float: right !important;
}

.addons-title {
    margin: 1em 0;
    padding-left: 20px;
    /* background-color: #e8faff; */
    border-left: 4px solid #2eacce;
    font-size: 18px !important;
    text-decoration: underline;
}

.addons-number-fields {
    display: block;
    width: 22%;
    height: 31px;
    padding: 6px 8px;
    font-size: 12px;
    line-height: 1.42857;
    color: #555;
    background-color: #F5F8F9;
    background-image: none;
    border: 1px solid #C7D6DB;
    border-radius: 3px;
    -webkit-transition: border-color ease-in-out 0.15s,box-shadow ease-in-out 0.15s;
    -o-transition: border-color ease-in-out 0.15s,box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s,box-shadow ease-in-out 0.15s
}

.addons-inline-block {
    display: inline-block;
}

.addons-text {
    padding: 14px;
    font-size: 13px;
}

.addons-hide {
    display: none;
}

.titleinfos{
    text-align: center;
    padding-top: 10%;
}
.logos
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    vertical-align: middle;
    line-height: 50px;
}
.infos{
    margin: auto;
}
.card-title-size{
    text-align: center;
    font-weight: bold !important;
}
.card-text{
    text-align: center;
}
.card-header{
    margin-top: 10%;
}
.card-body{
    display: inline-block;
}
.data-card{
    height: auto;
    width: 200px;
}

.registered-modules {
    display: inline-flex;
    flex-direction: row;
    /* padding: 15px; */
    width: 100%;
    overflow: hidden;
    flex-wrap: wrap;
    margin-bottom: 10px;
}
.module-card {
    width: 150px;
    height: 100px;
    background-color: white;
    margin: 5px;
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.module-card:hover {
    /* border: 2px solid #bbcdd2; */
}
.module-card-content {
    height: 100%;
    width: 100%;
    padding: 10px;
}
.module-card-img {
    text-align: center;
}
.module-card-title {
    margin: 0 auto;
    padding: 10px;
    text-align: center;
}
.module-card-img {
    text-align: center;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/css/back.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/css/back.css", "/var/www/html/modules/psgdpr/views/css/back.css");
    }
}
