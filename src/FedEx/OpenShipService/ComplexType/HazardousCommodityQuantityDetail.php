<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies amount and units for quantity of hazardous commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property float $Amount
 * @property string $Units
 * @property \FedEx\OpenShipService\SimpleType\HazardousCommodityQuantityType|string $QuantityType

 */
class HazardousCommodityQuantityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HazardousCommodityQuantityDetail';

    /**
     * Number of units of the type below.
     *
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['Amount'] = $amount;
        return $this;
    }

    /**
     * Units by which the hazardous commodity is measured. For IATA commodity, the units values are restricted based on regulation type.
     *
     * @param string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }

    /**
     * Specifies which measure of quantity is to be validated.
     *
     * @param \FedEx\OpenShipService\SimpleType\HazardousCommodityQuantityType|string $quantityType
     * @return $this
     */
    public function setQuantityType($quantityType)
    {
        $this->values['QuantityType'] = $quantityType;
        return $this;
    }
}
