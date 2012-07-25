<?php
namespace FedEx\RateService\ComplexType;

/**
 * The descriptive data required by FedEx for home delivery services.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class HomeDeliveryPremiumDetail
    extends AbstractComplexType
{
    protected $_name = 'HomeDeliveryPremiumDetail';

    /**
     * 
     *
     * @param HomeDeliveryPremiumType $HomeDeliveryPremiumType
     * return HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType(\FedEx\RateService\SimpleType\HomeDeliveryPremiumType $homeDeliveryPremiumType)
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