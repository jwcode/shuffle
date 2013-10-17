<?php
$mageFilename = '../app/Mage.php';
require_once $mageFilename;
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app('admin');
Mage::register('isSecureArea', 1);
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
 
set_time_limit(0);
ini_set('memory_limit','6584M');

function _getTableName($tableName){
    return Mage::getSingleton('core/resource')->getTableName($tableName);
}

$model = Mage::getModel('catalog/product'); 

$read = Mage::getSingleton('core/resource')->getConnection('core_read');

/**

Kurta/ Kurti - 251
Suit Set - 253
Sarees - 243
Bags - 373
Tunics - 247
Dresses - 241
Kaftan - 1100
**/
$cat_id = 1139;

$products = Mage::getModel('catalog/category')->load($cat_id); //put your category id here
$productslist = $products->getProductCollection()->addAttributeToSelect('*')->addAttributeToFilter('status', array('eq' => 1))->addAttributeToFilter('visibility',4); //enabled and visible on site





?>
