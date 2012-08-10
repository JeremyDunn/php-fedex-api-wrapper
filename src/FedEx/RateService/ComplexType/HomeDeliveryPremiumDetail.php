<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required by FedEx for home delivery services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * Set HomeDeliveryPremiumType
     *
     * @param \FedEx\RateService\SimpleType\HomeDeliveryPremiumType|string $homeDeliveryPremiumType
     * return HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType($homeDeliveryPremiumType)
    {
        $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;
        return $this;
    }
    
    /**
     * Required for Date Certain Home Delivery.
     *
     * @param date $date
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
     * @param string $phoneNumber
     * return HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    

    
}