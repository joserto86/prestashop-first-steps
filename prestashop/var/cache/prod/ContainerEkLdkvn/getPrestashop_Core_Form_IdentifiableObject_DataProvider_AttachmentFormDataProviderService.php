<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.data_provider.attachment_form_data_provider' shared service.

return $this->services['prestashop.core.form.identifiable_object.data_provider.attachment_form_data_provider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\AttachmentFormDataProvider(($this->services['prestashop.core.query_bus'] ?? $this->load('getPrestashop_Core_QueryBusService.php')));
