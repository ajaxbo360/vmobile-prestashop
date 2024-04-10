<?php
if (!defined('_PS_VERSION_'))
    exit;


class vmobiledisplayModuleFrontController extends ModuleFrontController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('account-controller.tpl');
    }
}
