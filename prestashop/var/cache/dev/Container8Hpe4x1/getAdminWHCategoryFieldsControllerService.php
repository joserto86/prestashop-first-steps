<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'WebHelpers\WHCategoryFields\Controller\AdminWHCategoryFieldsController' shared service.

return $this->services['WebHelpers\\WHCategoryFields\\Controller\\AdminWHCategoryFieldsController'] = new \WebHelpers\WHCategoryFields\Controller\AdminWHCategoryFieldsController(($this->services['doctrine.cache.provider'] ?? $this->getDoctrine_Cache_ProviderService()), ($this->services['prestashop.core.command_bus'] ?? $this->load('getPrestashop_Core_CommandBusService.php')));