<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 5/22/15
 * Time: 10:34 AM
 */

class Mdg_Giftregistry_Model_Type extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        $this->_init('mdg_giftregistry/type');
        parent::_construct();
    }
}