<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'webhelpers.whcallback.grid.data.factory.whcallbackrequest_data_factory' shared service.

return $this->services['webhelpers.whcallback.grid.data.factory.whcallbackrequest_data_factory'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(($this->services['webhelpers.whcallback.grid.query.whcallbackrequest_query_builder'] ?? $this->load('getWebhelpers_Whcallback_Grid_Query_WhcallbackrequestQueryBuilderService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.core.grid.query.doctrine_query_parser'] ?? ($this->services['prestashop.core.grid.query.doctrine_query_parser'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser())), 'whcallbackrequest');