<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'webhelpers.whcallback.grid.whcallbackrequest_grid_factory' shared service.

return $this->services['webhelpers.whcallback.grid.whcallbackrequest_grid_factory'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['webhelpers.whcallback.grid.definition.factory.whcallbackrequest_grid_definition_factory'] ?? $this->load('getWebhelpers_Whcallback_Grid_Definition_Factory_WhcallbackrequestGridDefinitionFactoryService.php')), ($this->services['webhelpers.whcallback.grid.data.factory.whcallbackrequest_data_factory'] ?? $this->load('getWebhelpers_Whcallback_Grid_Data_Factory_WhcallbackrequestDataFactoryService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));
