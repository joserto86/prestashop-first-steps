<?php

if (!defined('_PS_VERSION_')) { //checks if the constant exist to prevent ouside prestashop load
    exit;
}

class WHHelloWorld extends Module
{
    private $html = '';

    public function __construct()
    {
        $this->name = 'whhelloworld';
        $this->version = '1.0.0';
        $this->tab = 'front_office_features';
        $this->author = 'Jose Alberto Hernán';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->confirmUninstall = $this->l('Do you still you want to uninstall the Hello World module?');
        $this->description = $this->l('This is a simple hello world module.');
        $this->displayName = $this->l('Hello World');

        $this->ps_versions_compliancy = ['min' => '8.1.3', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHome($params)
    {
        return $this->l("Hello World! I know now how to code a simple module!");
    }
}