<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.domain.customer_service.command_handler.delete_customer_thread_handler' shared service.

return $this->services['prestashop.core.domain.customer_service.command_handler.delete_customer_thread_handler'] = new \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\DeleteCustomerThreadHandler(($this->services['prestashop.core.domain.customer_service.repository.customer_thread_repository'] ?? ($this->services['prestashop.core.domain.customer_service.repository.customer_thread_repository'] = new \PrestaShop\PrestaShop\Core\Domain\CustomerService\Repository\CustomerThreadRepository())));
