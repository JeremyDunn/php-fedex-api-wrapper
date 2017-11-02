<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Surcharge
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property \FedEx\InFlightShipmentService\SimpleType\SurchargeType|string $SurchargeType
 * @property \FedEx\InFlightShipmentService\SimpleType\SurchargeLevelType|string $Level
 * @property string $Description
 * @property Money $Amount

 */
class Surcharge extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Surcharge';

    /**
     * Set SurchargeType
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\SurchargeType|string $surchargeType
     * @return $this
     */
    public function setSurchargeType($surchargeType)
    {
        $this->values['SurchargeType'] = $surchargeType;
        return $this;
    }

    /**
     * Set Level
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\SurchargeLevelType|string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->values['Level'] = $level;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set Amount
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->values['Amount'] = $amount;
        return $this;
    }
}
