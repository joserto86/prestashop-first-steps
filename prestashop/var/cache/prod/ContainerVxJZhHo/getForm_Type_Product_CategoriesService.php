<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.categories' shared service.

@trigger_error('The "form.type.product.categories" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

return $this->services['form.type.product.categories'] = new \PrestaShopBundle\Form\Admin\Product\ProductCategories(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.data_provider.category'] ?? $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id);