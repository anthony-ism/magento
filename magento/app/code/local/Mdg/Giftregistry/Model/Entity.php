<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 5/22/15
 * Time: 10:34 AM
 */

class Mdg_Giftregistry_Model_Entity extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        $this->_init('mdg_giftregistry/entity');
        parent::_construct();
    }

    public function updateRegistryData(Mage_Customer_Model_Customer $customer, $data)
    {
        try {
            if (!empty($data)) {
                $this->setCustomerId($customer->getId());
                $this->setWebSiteId($customer->getWebsiteId());
                $this->setTypeId($data['type_id']);
                $this->setEventName($data['event_name']);
                $this->setEventDate($data['event_date']);
                $this->setEventCountry($data['event_country']);
                $this->setEventLocation($data['event_location']);
            } else {
                throw new Exception("Error processing request, insufficient data provided");
            }
        }catch (Exception $e)
        {
            Mage::logException($e);
        }
        return $this;
    }
}