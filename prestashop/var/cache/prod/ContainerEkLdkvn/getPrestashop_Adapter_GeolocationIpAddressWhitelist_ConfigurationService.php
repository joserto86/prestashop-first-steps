<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.geolocation_ip_address_whitelist.configuration' shared service.

return $this->services['prestashop.adapter.geolocation_ip_address_whitelist.configuration'] = new \PrestaShop\PrestaShop\Adapter\Geolocation\GeolocationIpAddressWhitelistConfiguration(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
