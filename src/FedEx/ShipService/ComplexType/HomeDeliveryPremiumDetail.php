<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required by FedEx for home delivery services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HomeDeliveryPremiumDetail
    extends AbstractComplexType
{
    protected $_name = 'HomeDeliveryPremiumDetail';

    /**
     * The type of Home Delivery Premium service being requested.
     *
     * @param HomeDeliveryPremiumType $HomeDeliveryPremiumType
     * return HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType(\FedEx\ShipService\SimpleType\HomeDeliveryPremiumType $homeDeliveryPremiumType)
    {
        $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;
        return $this;
    }
    
    /**
     * Required for Date Certain Home Delivery.
     *
     * @param date $Date
     * return HomeDeliveryPremiumDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Required for Date Certain and Appointment Home Delivery.
     *
     * @param string $PhoneNumber
     * return HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    

    
}