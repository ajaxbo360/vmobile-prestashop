<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

use VMobile\Repository\ValaMobileTypeRepository;
use Doctrine\ORM\EntityManagerInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}
class VMobile extends Module
{


    public function __construct()
    {
        $this->name = 'vmobile';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'PrestaShop';
        $this->need_instance = 0;
        $this->bootstrap = true;

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);


        parent::__construct();

        $this->displayName = $this->trans('VMobile', [], 'Module.VMobile.Admin');
        $this->description = $this->trans('VMobile', [], 'Module.VMobile.Admin');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Module.VMobile.Admin');
        if (!Configuration::get('vmobile')) {
            $this->warning = $this->trans('No name provided.', [], 'Modules.VMobile.Admin');
        }
    }

    public function install()
    {
        // check if the Multistore feature is enabled
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        // Path to your SQL file
        $sqlFilePath = _PS_MODULE_DIR_ . 'vmobile/sql/ex-mobile.sql';

        // Check if the SQL file exists
        if (!file_exists($sqlFilePath)) {
            // Handle error if SQL file doesn't exist
            return false;
        }

        // Read the contents of the SQL file
        $sqlContent = file_get_contents($sqlFilePath);
        $sqlStatements = explode(';', $sqlContent);

        // Execute each SQL statement
        foreach ($sqlStatements as $sqlStatement) {
            $sqlStatement = trim($sqlStatement);
            if (!empty($sqlStatement)) {
                if (!Db::getInstance()->execute($sqlStatement)) {
                    // Handle error if SQL execution fails
                    return false;
                }
            }
        }

        Configuration::updateValue('vmobile', 'VMobile');

        return parent::install() && $this->registerHook('displayHome') && $this->registerHook('displayHeader');
    }

    public function uninstall()

    {

        // Path to your SQL file
        $sqlFilePath = _PS_MODULE_DIR_ . 'vmobile/sql/uninstall-ex-mobile.sql';

        // Check if the SQL file exists
        if (!file_exists($sqlFilePath)) {
            // Handle error if SQL file doesn't exist
            return false;
        }

        // Read the contents of the SQL file
        $sqlContent = file_get_contents($sqlFilePath);
        $sqlStatements = explode(';', $sqlContent);

        // Execute each SQL statement
        foreach ($sqlStatements as $sqlStatement) {
            $sqlStatement = trim($sqlStatement);
            if (!empty($sqlStatement)) {
                if (!Db::getInstance()->execute($sqlStatement)) {
                    // Handle error if SQL execution fails
                    return false;
                }
            }
        }

        Configuration::deleteByName('vmobile');
        return parent::uninstall();
    }
    public function hookDisplayHome($params)
    {

        $container = $this->getContainer();

        // Get the repository service for ValaMobileType
        $valaMobileTypeRepository = $container->get('mac.vmobile.repository.vala_mobile_type_repository');

        // // Use the repository method to fetch data
        $types = $valaMobileTypeRepository->findAllTypes();




        return  $this->display(
            __FILE__,
            'ex-mobile-widget.tpl',
            // [
            //     'types' => $types
            // ]
        );
    }
    public function hookDisplayHeader()
    {
        // Add CSS stylesheet to the header
        $this->context->controller->addCSS($this->_path . 'views/css/vmobile.css', 'all');
    }
}
