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

/* @Modules/productcomments/views/css/productcomments.css */
class __TwigTemplate_0d24f4b858fd091e7b6ea3077de1320f extends Template
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

/**
 *  Product comments CSS
 */

.product-comment-modal .material-icons[data-icon]:before,
.product-comment-list-item .material-icons[data-icon]:before,
.product-comments-additional-info .material-icons[data-icon]:before,
#product-comments-list-header .material-icons[data-icon]:before,
#product-comments-list-footer .material-icons[data-icon]:before {
  content: attr(data-icon);
}

.btn-comment,
.btn-comment-inverse {
  height: 36px;
  border-radius: 2px;
  background-color: #6b868f;
  color: #ffffff;
  font-size: 14px;
  box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.2);
  padding: 8px;
}
.btn-comment .material-icons,
.btn-comment-inverse .material-icons {
  font-size: 20px;
  margin-right: 7px;
}

.btn-comment:hover {
  background-color: #3c4d52;
}

.btn-comment-inverse {
  background-color: #ffffff;
  color: #363a41;
  border: 1px solid #979797;
}
.btn-comment-inverse:hover {
  background-color: #6b868f;
  border: 1px solid #6b868f;
  color: #ffffff;
}

.btn-comment-big {
  padding: 13px 16px;
  height: 45px;
}

.btn-comment-huge {
  padding: 13px 28px;
  height: 45px;
}

.link-comment {
  color: #232323;
}

.link-comment:hover,
.link-comment:active {
  text-decoration: underline;
  color: #232323;
}

/**
 * Additional product infos
 */

.product-comments-additional-info {
  margin: 20px 0;
  font-weight: 300;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
  font-size: 14px;
}

.product-comments-additional-info .link-comment.post-product-comment {
  border-left: 1px solid #979797;
  padding-left: 12px;
  margin-left: 12px;
}

.product-comments-additional-info .comments-note {
  margin-right: 30px;
  margin-bottom: 20px;
}

/**
 *  Post comment modal
 */
.product-comment-modal .modal-header {
  border: none;
  padding: 30px 30px 15px;
}

.product-comment-modal .modal-body {
  padding: 15px 30px 30px;
}

.product-comment-modal .modal-header .h2 {
  float: left;
  font-size: 20px;
}

.product-comment-modal .modal-dialog {
  width: calc(100% - 30px);
  max-width: 774px;
}

.product-comment-modal .modal-dialog .h3 {
  font-size: 14px;
}

.product-comment-modal .modal-dialog .product-flag {
  display: none;
}

.product-comment-modal .modal-dialog .product-cover,
.product-comment-modal .modal-dialog .product-cover img {
  width: 99px;
  height: 99px;
}

.product-comment-modal label.form-label {
  font-size: 16px;
  margin: 10px 0;
}

.product-comment-modal input {
  width: 100%;
  height: 44px;
  border: 1px solid #bfbfbf;
  padding: 0 10px;
}

.product-comment-modal textarea {
  width: 100%;
  min-height: 80px;
  border: 1px solid #bfbfbf;
  margin-bottom: 10px;
  padding: 10px 10px;
}

.product-comment-modal .btn-comment,
.product-comment-modal .btn-comment-inverse {
  font-size: 16px;
  line-height: 16px;
  font-weight: bold;
}

.product-comment-modal .required {
  font-size: 12px;
  margin-left: 5px;
}

.product-comment-modal .post-comment-buttons {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
}

.product-comment-modal .post-comment-buttons .btn-comment {
  margin-left: 15px;
}

#product-comment-posted-modal .post-comment-buttons,
#product-comment-post-error .post-comment-buttons,
#update-comment-usefulness-post-error .post-comment-buttons {
  margin-top: 30px;
}

.modal-header .material-icons {
  color: #40a85f;
  font-size: 30px;
  line-height: 25px;
}

.modal-header .material-icons.error {
  color: #a94442;
}

.modal-header .material-icons.feedback {
  color: #f39d72;
}

/**
 *  Star component
 */

.star-content {
  margin: 0 0 0 5px;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
}

.star-content div.star,
.star-content div.star-on,
.star-content div.star-hover {
  display: block;
  width: 20px;
  height: 20px;
  background: url(../img/stars.png) no-repeat 0 0 transparent;
  flex: auto;
  margin-left: 3px;
}
.star-content div.star-on,
.star-content div.star-hover {
  background-position: -24px 0;
}

.small-stars .star-content div.star,
.small-stars .star-content div.star-on,
.small-stars .star-content div.star-hover {
  background: url(../img/small_stars.png) no-repeat 0 0 transparent;
  width: 16px;
  height: 16px;
  margin-left: 2px;
}

.small-stars .star-content div.star-on,
.small-stars .star-content div.star-hover {
  background-position: -19px 0;
}

.star-content div.star-hover {
  cursor: pointer;
}

.grade-stars {
  position: relative;
  height: 20px;
  min-width: 120px;
  display: inline-block;
}

.grade-stars.small-stars {
  min-width: 100px;
}

.grade-stars .star-content {
  position: absolute;
  top: 3px;
  left: 0;
}

.criterion-rating .grade-stars .star-content {
  top: 0;
}

#post-product-comment-modal .star-content div.star a {
  display: block;
  position: absolute;
  text-indent: -5000px;
}
#post-product-comment-modal .criterion-rating {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
}

#post-product-comment-modal .criterion-rating label {
  color: #363a41;
  font-size: 14px;
  font-weight: bold;
}

#post-product-comment-form input.error,
#post-product-comment-form textarea.error {
  background-color: #f2dede;
  border: solid 1px #ebcccc;
}

#post-product-comment-form input.valid,
#post-product-comment-form textarea.valid {
  border: solid 1px #d0e9c6;
}

/**
 *  Product comments list
 */

#product-comments-list-header {
  padding: 20px 15px;
  color: #232323;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: space-between;
}

#product-comments-list-header .comments-nb {
  padding-left: 0;
  padding-top: 3px;
}

#product-comments-list-header .comments-nb .material-icons {
  margin-right: 3px;
}

#product-comments-list .btn-comment {
  margin: 0 auto;
  display: block;
}

.product-comment-list-item {
  padding: 26px 0;
  margin: 0 0 20px;
  background-color: #ffffff;
  text-align: left;
}

#empty-product-comment {
  text-align: center;
}

.product-comment-list-item .grade-stars .star-content {
  margin: 0 0 10px;
}

.product-comment-list-item .comment-infos {
  height: 19px;
  color: #6b868f;
  font-size: 14px;
  letter-spacing: -0.28px;
  line-height: 19px;
  min-height: 100px;
}

.product-comment-list-item .comment-infos .grade-stars {
  margin-bottom: 20px;
}

.product-comment-list-item .comment-content .h4 {
  height: 22px;
  color: #363a41;
  font-size: 16px;
  font-weight: 600;
  letter-spacing: -0.32px;
  line-height: 22px;
}

.product-comment-list-item .comment-content p {
  color: #363a42;
  font-size: 14px;
  letter-spacing: -0.28px;
  line-height: 19px;
  word-break: break-word;
  white-space: pre-wrap;
}

.product-comment-list-item .comment-content .comment-buttons a {
  color: #6b868f;
  font-size: 14px;
  letter-spacing: -0.28px;
  line-height: 19px;
  margin-right: 8px;
}

.product-comment-list-item .comment-content .comment-buttons a .material-icons {
  font-size: 18px;
  cursor: pointer;
}

/*
** Quickview style
*/

.product-quickview-review {
  display: flex;
  flex-direction: row;
}

.product-quickview-review .grade-stars .star-content {
  margin: 0 0 0 0;
  top: 0;
}

/*
** Product list override
*/

#products .thumbnail-container.has-reviews:hover .highlighted-informations,
#products .thumbnail-container.has-reviews:focus .highlighted-informations,
.featured-products
  .thumbnail-container.has-reviews:hover
  .highlighted-informations,
.featured-products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations,
.product-accessories
  .thumbnail-container.has-reviews:hover
  .highlighted-informations,
.featured-products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations,
.product-miniature
  .thumbnail-container.has-reviews:hover
  .highlighted-informations,
.product-miniature
  .thumbnail-container.has-reviews:focus
  .highlighted-informations {
  height: 4.5rem;
}

#products
  .thumbnail-container.has-reviews:hover
  .highlighted-informations
  .variant-links,
#products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations
  .variant-links,
.featured-products
  .thumbnail-container.has-reviews:hover
  .highlighted-informations
  .variant-links,
.featured-products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations
  .variant-links,
.product-accessories
  .thumbnail-container.has-reviews:hover
  .highlighted-informations
  .variant-links,
.featured-products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations
  .variant-links,
.product-miniature
  .thumbnail-container.has-reviews:hover
  .highlighted-informations
  .variant-links,
.product-miniature
  .thumbnail-container.has-reviews:focus
  .highlighted-informations
  .variant-links {
  min-height: 3.7rem;
}

#products
  .thumbnail-container.has-reviews:hover
  .highlighted-informations.no-variants,
#products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations.no-variants,
.featured-products
  .thumbnail-container.has-reviews:hover
  .highlighted-informations.no-variants,
.featured-products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations.no-variants,
.product-accessories
  .thumbnail-container.has-reviews:hover
  .highlighted-informations.no-variants,
.featured-products
  .thumbnail-container.has-reviews:focus
  .highlighted-informations.no-variants,
.product-miniature
  .thumbnail-container.has-reviews:hover
  .highlighted-informations.no-variants,
.product-miniature
  .thumbnail-container.has-reviews:focus
  .highlighted-informations.no-variants {
  height: 4.125rem;
}

#products
  .product-miniature
  .thumbnail-container.has-reviews
  .discount-amount.online-only,
#products
  .product-miniature
  .thumbnail-container.has-reviews
  .discount-percentage.online-only,
#products
  .product-miniature
  .thumbnail-container.has-reviews
  .on-sale.online-only,
#products
  .product-miniature
  .thumbnail-container.has-reviews
  .online-only.online-only,
#products .product-miniature .thumbnail-container.has-reviews .pack.online-only,
#products
  .product-miniature
  .thumbnail-container.has-reviews
  .product-flags
  .new.online-only,
.featured-products
  .product-miniature
  .thumbnail-container.has-reviews
  .discount-amount.online-only,
.featured-products
  .product-miniature
  .thumbnail-container.has-reviews
  .discount-percentage.online-only,
.featured-products
  .product-miniature
  .thumbnail-container.has-reviews
  .on-sale.online-only,
.featured-products
  .product-miniature
  .thumbnail-container.has-reviews
  .online-only.online-only,
.featured-products
  .product-miniature
  .thumbnail-container.has-reviews
  .pack.online-only,
.featured-products
  .product-miniature
  .thumbnail-container.has-reviews
  .product-flags
  .new.online-only,
.product-accessories
  .product-miniature
  .thumbnail-container.has-reviews
  .discount-amount.online-only,
.product-accessories
  .product-miniature
  .thumbnail-container.has-reviews
  .discount-percentage.online-only,
.product-accessories
  .product-miniature
  .thumbnail-container.has-reviews
  .on-sale.online-only,
.product-accessories
  .product-miniature
  .thumbnail-container.has-reviews
  .online-only.online-only,
.product-accessories
  .product-miniature
  .thumbnail-container.has-reviews
  .pack.online-only,
.product-accessories
  .product-miniature
  .thumbnail-container.has-reviews
  .product-flags
  .new.online-only {
  top: 11.5rem;
}

.product-list-reviews {
  position: absolute;
  top: -26px;
  left: 0;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: center;
  width: 100%;
  background: rgba(255, 255, 255, 0.5);
  padding: 4px 0;
  visibility: hidden;
}

.product-list-reviews .grade-stars .star-content {
  top: 1px;
}

.product-list-reviews .comments-nb {
  margin-left: 5px;
  font-size: 13px;
}

@media (min-width: 960px) {
  #product-comments-list-footer {
    position: relative;
    min-height: 45px;
  }

  #product-comments-list-footer .post-product-comment {
    margin: 0 auto;
    display: block;
  }

  #product-comments-list-pagination {
    position: absolute;
    right: 0;
    top: 5px;
  }
}

@media (max-width: 960px) {
  #product-comments-list-footer {
    display: flex;
    flex-direction: row-reverse;
    flex-wrap: nowrap;
    justify-content: space-between;
  }
}

@media (max-width: 768px) {
  #product-comments-list-footer {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
  }

  #product-comments-list-pagination {
    margin-bottom: 10px;
  }
}

#product-comments-list-pagination {
  height: 32px;
}

#product-comments-list-pagination ul {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
}

#product-comments-list-pagination ul li span {
  height: 32px;
  width: 24px;
  margin: 0 5px;
  cursor: pointer;
  display: block;
  text-align: center;
  font-size: 20px;
  line-height: 32px;
  color: #6b868f;
}

#product-comments-list-pagination ul li.active span,
#product-comments-list-pagination ul li span.next i,
#product-comments-list-pagination ul li span.prev i {
  font-weight: bold;
}

#product-comments-list-pagination ul li.disabled span {
  opacity: 0.3;
  cursor: not-allowed;
}

#product-comments-list-pagination ul li.active span {
  cursor: not-allowed;
}

#product-comments-list-pagination ul li.hidden {
  display: none;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/views/css/productcomments.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/views/css/productcomments.css", "/var/www/html/modules/productcomments/views/css/productcomments.css");
    }
}
