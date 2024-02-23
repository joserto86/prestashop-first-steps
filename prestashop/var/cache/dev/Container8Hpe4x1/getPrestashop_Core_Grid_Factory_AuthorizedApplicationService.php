<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.authorized_application' shared service.

$a = ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService());

$b = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AuthorizedApplicationGridDefinitionFactory($a);
$b->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $this->services['prestashop.core.grid.factory.authorized_application'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory($b, new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(new \PrestaShop\PrestaShop\Core\Grid\Query\AuthorizedApplicationQueryBuilder(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] ?? ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator()))), $a, ($this->services['prestashop.core.grid.query.doctrine_query_parser'] ?? ($this->services['prestashop.core.grid.query.doctrine_query_parser'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser())), 'authorized_application'), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), $a);
