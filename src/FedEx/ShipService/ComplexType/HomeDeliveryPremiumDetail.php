<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * HomeDeliveryPremiumDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\HomeDeliveryPremiumType|string $HomeDeliveryPremiumType
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
     * Set HomeDeliveryPremiumType
     *
     * @param \FedEx\ShipService\SimpleType\HomeDeliveryPremiumType|string $homeDeliveryPremiumType
     * @return $this
     */
    public function setHomeDeliveryPremiumType($homeDeliveryPremiumType)
    {
        $this->values['HomeDeliveryPremiumType'] = $homeDeliveryPremiumType;
        return $this;
    }

    /**
     * Set Date
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
     * Set PhoneNumber
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
