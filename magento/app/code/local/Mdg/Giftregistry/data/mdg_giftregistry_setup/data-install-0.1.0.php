<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 5/22/15
 * Time: 11:41 AM
 */

$registryTypes = array(
    array(
        'code' => 'baby_shower',
        'name' => 'Baby Shower',
        'description' => 'Baby Shower',
        'store_id' => Mage_Core_Model_App::ADMIN_STORE_ID,
        'is_active' => 1,
    ),
    array(
        'code' => 'wedding',
        'name' => 'Wedding',
        'description' => 'Wedding',
        'store_id' => Mage_Core_Model_App::ADMIN_STORE_ID,
        'is_active' => 1,
    ),
    array(
        'code' => 'birthday',
        'name' => 'Birthday',
        'description' => 'Birthday',
        'store_id' => Mage_Core_Model_App::ADMIN_STORE_ID,
        'is_active' => 1,
    ),
);

foreach ($registryTypes as $data) {
    Mage::getModel('mdg_giftregistry/type')
        ->addData($data)
        ->setStoreId($data['store_id'])
        ->save();
}
