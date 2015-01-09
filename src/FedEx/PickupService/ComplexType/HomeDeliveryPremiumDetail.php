<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required by FedEx for home delivery services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class HomeDeliveryPremiumDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HomeDeliveryPremiumDetail';

    /**
     * The type of Home Delivery Premium service being requested.
     *
     * @param \FedEx\Pickup\SimpleType\HomeDeliveryPremiumType|string $homeDeliveryPremiumType
     * @return HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType($homeDeliveryPremiumType)
    {
        $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;
        return $this;
    }
    
    /**
     * Returns The type of Home Delivery Premium service being requested.
     *
     * @return \FedEx\Pickup\SimpleType\HomeDeliveryPremiumType|string
     */
    public function getHomeDeliveryPremiumType()
    {
        return $this->HomeDeliveryPremiumType;
    }
    
    /**
     * Required for Date Certain Home Delivery.
     *
     * @param date $date
     * @return HomeDeliveryPremiumDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns Required for Date Certain Home Delivery.
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Required for Date Certain and Appointment Home Delivery.
     *
     * @param string $phoneNumber
     * @return HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Required for Date Certain and Appointment Home Delivery.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    

    
}