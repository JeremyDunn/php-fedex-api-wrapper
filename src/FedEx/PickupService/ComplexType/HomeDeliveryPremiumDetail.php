<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required by FedEx for home delivery services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\HomeDeliveryPremiumType|string $HomeDeliveryPremiumType
 * @property string $Date
 * @property string $PhoneNumber

 */
class HomeDeliveryPremiumDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HomeDeliveryPremiumDetail';

    /**
     * The type of Home Delivery Premium service being requested.
     *
     * @param \FedEx\PickupService\SimpleType\HomeDeliveryPremiumType|string $homeDeliveryPremiumType
     * @return $this
     */
    public function setHomeDeliveryPremiumType($homeDeliveryPremiumType)
    {
        $this->values['HomeDeliveryPremiumType'] = $homeDeliveryPremiumType;
        return $this;
    }

    /**
     * Required for Date Certain Home Delivery.
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['Date'] = $date;
        return $this;
    }

    /**
     * Required for Date Certain and Appointment Home Delivery.
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['PhoneNumber'] = $phoneNumber;
        return $this;
    }
}
