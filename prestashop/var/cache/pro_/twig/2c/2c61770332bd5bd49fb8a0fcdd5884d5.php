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

/* @Modules/blockwishlist/_dev/back/js/backoffice.js */
class __TwigTemplate_ba00b10cd98ecf65b6ad0bac2739c120 extends Template
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
 */

import blockwishlistModule from 'blockwishlistModule';

const tabButtons = document.querySelectorAll('.btn-group button');
const refreshButton = document.querySelector('.js-refresh');
let isLoading = false;

tabButtons.forEach((button) => {
  button.addEventListener('click', () => {
    if (!button.classList.contains('active')) {
      tabButtons.forEach((elem) => {
        elem.classList.remove('active');
      });

      button.classList.add('active');

      const tabs = document.querySelectorAll('.wishlist-tab');

      tabs.forEach((tab) => {
        if (
          tab.classList.contains('active')
          && tab.dataset.tab !== button.dataset.tab
        ) {
          tab.classList.remove('active');
        }

        if (tab.dataset.tab === button.dataset.tab) {
          tab.classList.add('active');
        }
      });
    }
  });
});

refreshButton.addEventListener('click', async () => {
  if (!isLoading) {
    isLoading = true;

    const cacheButton = refreshButton.innerHTML;

    refreshButton.innerHTML = '<i class=\"material-icons\">hourglass_empty</i>';

    const response = await fetch(`\${blockwishlistModule.resetCacheUrl}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        Accept: 'application/json, text/javascript, */*; q=0.01',
      },
    });

    const {success} = await response.json();

    if (success) {
      location.reload();
    } else {
      isLoading = false;
      refreshButton.innerHTML = cacheButton;
    }
  }
});
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/back/js/backoffice.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/_dev/back/js/backoffice.js", "/var/www/html/modules/blockwishlist/_dev/back/js/backoffice.js");
    }
}
