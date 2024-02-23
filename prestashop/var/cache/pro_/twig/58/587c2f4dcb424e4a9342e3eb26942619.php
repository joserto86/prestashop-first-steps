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

/* @Modules/blockreassurance/_dev/back/back.scss */
class __TwigTemplate_589d4d29287d44481e55aaf2db560e16 extends Template
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
        echo "/* Tab */
.first-body {
    padding-bottom: 50px !important;
}
.bootstrap .page-head .page-head-tabs ul {
    border-bottom: 0;
}
.bootstrap .page-head .page-head-tabs li a:hover {
    color: #25b9d7;
}
.bootstrap .page-head .page-head-tabs ul.nav li.active {
    border-bottom: 3px solid #25b9d7;
    border-bottom: .1875rem solid #25b9d7;
    background: #f3f9fb;
    color: #000000;
}

/* Tab : Alert */
.bootstrap .alert {
    clear: both;
}
.bootstrap .alert p {
    margin: 0;
}
.bootstrap .alert.alert-warning {
    background-color: #fff;
    border: 2px solid #cd9321;
    color: #363a41;
    padding: 3.221rem 0 .75rem 2.875rem;
    position: relative;
}
.bootstrap .alert.alert-warning:before {
    color: #d29500;
    background: #fce6bb;
    font-weight: 400;
    font-style: normal;
    font-size: 1.563rem;
    display: inline-block;
    line-height: 1;
    text-transform: none;
    letter-spacing: normal;
    vertical-align: middle;
    word-wrap: normal;
    white-space: nowrap;
    direction: ltr;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-feature-settings: \"liga\";
    font-feature-settings: \"liga\";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 2.875rem;
    height: 100%;
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

/* Tab : Helpers */
.help-block {
    font-style: normal !important;
}
.bootstrap .form-control,
.bootstrap input[type=password],
.bootstrap input[type=search],
.bootstrap input[type=text],
.bootstrap input[type=number],
.bootstrap select,
.bootstrap textarea {
    display: block;
    width: 100%;
    font-size: .875rem;
    line-height: 1.5;
    color: #363a41;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #bbcdd2;
    border-radius: 0;
    box-shadow: none;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    height: 31px;
    padding: 0 8px;
}

.customradiodesign {
    cursor: pointer;
}
.customradiodesign > div {
    display: inline-block;
}
.customradiodesign input[type=checkbox]:not(old),
.customradiodesign input[type=radio]:not(old) {
    width: 20px;
    margin: 0;
    margin-left: -20px;
    padding: 0;
    font-size: 1em;
    opacity: 0;
}
.customradiodesign input[type=checkbox]:not(old) + label,
.customradiodesign input[type=radio]:not(old) + label {
    display: inline-block;
    line-height: 1.5em;
}
.customradiodesign input[type=radio]:not(old) + label > span {
    border: 0.0625em solid #6C868E;
    display: inline-block;
    width: 18px;
    height: 18px;
    margin: 1px 5px 0 1px;
    background: #ffffff;
    vertical-align: bottom;
    border-radius: 50%;
}
.customradiodesign input[type=radio]:not(old):checked + label > span {
    border: 0.0625em solid rgb(37, 185, 215);
}
.customradiodesign input[type=radio]:not(old):checked + label > span > span {
    display: block;
    width: 10px;
    height: 10px;
    margin: 3px 3px;
    border: 0;
    border-radius: 50%;
    background: rgb(90, 199, 215);
}
.customradiodesign input[type=checkbox]:not(old) + label > span {
    display: inline-block;
    width: 18px;
    height: 18px;
    margin: 1px 5px 0px 1px;
    border: 1px solid rgb(37, 185, 215);
    background: #ffffff;
    vertical-align: bottom;
    border-radius: 0;
}
.customradiodesign input[type=checkbox]:not(old):checked + label > span > span {
    display: block;
    width: 10px;
    height: 10px;
    margin: 3px 3px;
    border: 0;
    border-radius: 0;
    background: rgb(90, 199, 215);
}
.customradiodesign label {
    cursor: pointer;
    font-weight: normal;
}

/* Tab Content */
#content.bootstrap {
    padding-top: 160px;
}
#content.bootstrap .page-head.custom-tab {
    height: auto !important;
    top: 8rem !important;
}
@media screen and (max-width: 1039px) {
    #content.bootstrap {
        padding-top: 175px !important;
    }
    #content.bootstrap .page-head.custom-tab {
        top: 9rem !important;
    }
}
#content.bootstrap .panel-heading {
    background-color: #f5f5f5;
    border-bottom: 1px solid #e5e5e5;
    color: #363a41 !important;
    font-family: Open Sans, Helvetica, Arial, sans-serif !important;
    font-size: 16px !important;
    font-weight: 600 !important;
    height: 49px !important;
    line-height: 1.2;
    margin: 0;
    padding: 12px 20px !important;
}
#content.bootstrap .panel-blockreassurance {
    border-radius: 0;
    padding: 0;
}
#content.bootstrap .panel .panel-footer {
    background-color: #f5f5f5;
    border-top: 1px solid #e5e5e5;
    padding: .75rem 1.25rem;
    margin: 0;
}
#content.bootstrap .panel .panel-footer .btn,
#content.bootstrap .panel .btn {
    display: inline-block;
    text-align: center;
    text-transform: initial;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .838rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: 0;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
#content.bootstrap .btn.btn-primary {
    background-color: #00b9d9;
    color: #fff;
}
#content.bootstrap .btn.btn-primary.refreshPage {
  background-color: transparent;
  border-color: #6C868E;
  color: #6C868E;
}

/* Tab Content : Listing */
.listing-table .block-title {
    width: 198px !important;
}
.listing-head {
    border-bottom: 2px #00b9d9 solid;
    font-weight: bold;
    padding-bottom: 9px;
    padding-top: 15px;
}
.listing-general-rol:hover, .listing-general-rol.active {
    background-color: #FAFBFC;
    transition: background .3s;
}
.listing-body {
  &.ui-sortable {
    padding: 0;
  }
  .sortable-ghost {
    color: #ffa500;
  }
  .btn-group {
    padding: 0;
    .dropdown-toggle {
      &:hover, &:focus {
        text-decoration: none;
        &:after {
          color: #00aff0;
        }
      }
      &:after {
        color: #6c868e;
        content: \"more_vert\";
        font-family: \"Material Icons\";
        font-weight: 400;
        font-style: normal;
        font-size: 1.5rem;
        text-transform: none;
      }
    }
    .dropdown-item {
      color: #6c868e;
      display: block;
      padding: .375rem 1.5rem .375rem .938rem;
      font-size: .875rem;
      &:hover {
        color: #fff !important;
        background: #25b9d7 !important;
        text-decoration: none !important;
      }
      .material-icons {
        font-size: 1.125rem;
        vertical-align: text-bottom;
        padding-right: .5rem;
      }
    }
  }
  .status-toggle {
    padding: .6rem 0;
  }
}
.listing-row.row {
    border-bottom: #BBCDD2 solid 1px;
    margin: 0;
    padding-bottom: 9px;
    padding-top: 15px;
}
.listing-row div {
    padding: 18px 0;
    line-height: 30px;
}
.listing-row div:nth-child(2) {
    cursor: grab;
}
.listing-row div:nth-child(2) i {
    color: #778899;
}
.listing-row div:nth-child(2) i:hover {
    color: #00b9d9;
}
.listing-row div img {
    width: 35px;
}

@media (max-width:768px) {
    .listing-body {
      .btn-group {
        .dropdown-menu {
          padding: 0.25rem 0;
          min-width: 5.55rem;
        }
        .dropdown-item {
          padding: .225rem .275rem;
          .material-icons {
            padding-right: .250rem;
          }
        }
      }
    }
    .listing-row.row {
        padding-top: 0.5625rem;
    }
    .listing-row div {
        padding: 0.5625rem 0;
    }
}

.inline-flex {
    display: inline-flex;
}
.psrea-flex {
    display: flex !important;
}
.psre-add {
    color: #B1C0C4;
    cursor: pointer;
    float: right;
}
.psre-add i {
    font-size: 1.5em !important;
}
/* Tab Content : Listing : Switch */
.switch-input {
    background: #DA6E6E;
    height: 20px;
    width: 50px;
    padding: 10px 0;
    position: relative;
    cursor: pointer;
    display: inline-block;
    vertical-align: middle;
    margin: -2px 5px 0 0;
}
.switch-input, .switch-input:after {
    background: #D96D6E;
    border: 2px solid #BBCDD2;
    border-radius: 30px;
    box-sizing: border-box;
    color: #6C868E;
    transition: all 0.5s;
}
.switch-input:after {
    background: #FFFFFF;
    color: #D96D6E;
    display: block;
    content: 'close';
    height: 30px;
    width: 30px;
    position: absolute;
    top: -5px;
    left: -3px;
    transform: rotate(-180deg);
    vertical-align: middle;
    text-align: center;
    font-family: 'Material Icons';
    font-size: 18px;
    line-height: 26px;
}
.switch-input > input {
    display: none;
}
.switch-input.-checked {
    background: #25B9D7;
}
.switch-input.-checked:after {
    content: 'done';
    left: 20px;
    color: #25B9D7;
    line-height: 28px;
    transform: rotate(0deg);
}
.switch_text {
    font-weight: normal;
}

.msgRecommendation {
    color: #6C868E;
    margin-top: 20px;
}

/* Tab Content : Edit */
.inactive {
    display: none;
}
.active {
    display: block;
}
#reassurance_block {
    position: absolute;
    width: 300px;
    border: 1px solid #abcbd2;
    background: #ffffff;
    z-index: 3;
    text-align: center;
    display: none;
}
#reassurance_block .row {
    margin-left: 0;
    margin-right: 0;
}
#reassurance_block .category_select {
    margin-bottom: 10px;
    border-bottom: 1px solid #a3cbd2;
}
#reassurance_block .category_select div.active {
    border-bottom: 2px solid #00b8df;
    background: #f2f9fb;
}
#reassurance_block .category_select div img {
    cursor: pointer;
    height: 38px;
    padding: 7px;
    width: 38px;
}
#reassurance_block .category_select div img:hover {
    opacity: .5;
}
#reassurance_block .category_reassurance {
    display: none;
}
#reassurance_block .category_reassurance.active {
    display: block;
}
#reassurance_block .category_reassurance .row {
    padding: 12px;
}
#reassurance_block .category_reassurance i {
    font-size: 48px;
    cursor: pointer;
    border: 2px solid #fff;
}
#reassurance_block .category_reassurance img {
    max-width: 100%;
    border: 2px solid #fff;
    cursor: pointer;
}
#reassurance_block .category_reassurance i.selected,
#reassurance_block .category_reassurance img.selected {
    border: 2px solid #00b9d9;
}
#reassurance_block .category_reassurance i:hover,
#reassurance_block .category_reassurance img:hover {
    opacity: .5;
}


#blockDisplay label {
    font-weight: bold;
}
#blockDisplay .form-group {
    margin-bottom: 25px;
}
#blockDisplay textarea {
    height: 70px;
}
#blockDisplay .text-right {
    color: #4b4b4b;
    padding-right: 25px;
    padding-top: 6px;
}
#blockDisplay .panel-footer .text-left,
#blockDisplay .panel-footer .text-right {
    color: inherit;
    padding-right: inherit;
    padding-top: 6px;
}
#blockDisplay .customradiodesign label {
    font-weight: normal;
}
#blockDisplay .picto-url {
    padding-right: 5px !important;
}
#blockDisplay .first-block {
    padding-top: 20px;
}
#blockDisplay .input-redirection {
    padding-right: 40px;
}

/* Tab Content : Edit : Select Icon */
.select_none {
    cursor: pointer;
    color: #59858f;
    font-size: 12px;
    font-weight: bold;
    padding: 20px;
    background: whitesmoke;
    border-top: 1px solid #e4e4e4;
}
.select_none:hover {
    color: #000;
    transition: .2s color ease;
}

.psr_picto_showing {
    margin-bottom: 20px;
}
.psr_picto_showing .landscape {
    border: dotted;
    font-size:70px;
}
.modify_icon {
    cursor: pointer;
}
.modify_icon:hover {
    color: #25b9d7
}
.image-preview-lang, .picto_by_module {
    width: 100%;
    max-width: 75px;
    height: auto;
}
.upload_file_button {
    border: 1px solid #b6ccd2;
    padding-right: 11px;
}
.upload_file_button .slide_image {
    display: none !important;
}
.upload_file_button .file_label {
    font-weight: normal !important;
    line-height: 10px;
    width: 100%;
    padding: 11px 11px 6px 11px;
    font-size: 14px;
    color: #9a9a9a;
}

/* Tab Display */
#display img {
    max-width: 200px;
    width: 100%;
    height: auto;
}
.position-hook {
    margin-top: 20px;
    margin-bottom: 20px;
}
.addons-hide {
    display: none;
}
.psr-footer-color,
.psr-footer-grey,
.psr-header-color,
.psr-header-grey,
.psr-product-color,
.psr-product-grey,
.psr-checkout-color,
.psr-checkout-grey {
    display: none;
}
.psr-footer-color.active,
.psr-footer-grey.active,
.psr-header-color.active,
.psr-header-grey.active,
.psr-product-color.active,
.psr-product-grey.active,
.psr-checkout-color.active,
.psr-checkout-grey.active {
    display: block;
}
#display label > div > .input_img:not(:checked) ~ img {
    border: 1px solid #d3d8db;
}
#display label > div > .input_img:checked ~ img {
    border: 2px solid #00b9d9;
}

/* Tab Appearance */
#appearance .panel-body {
    margin-top: 20px;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/_dev/back/back.scss";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/_dev/back/back.scss", "/var/www/html/modules/blockreassurance/_dev/back/back.scss");
    }
}
