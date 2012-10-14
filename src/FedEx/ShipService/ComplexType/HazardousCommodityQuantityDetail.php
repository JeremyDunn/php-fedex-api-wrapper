<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies amount and units for quantity of hazardous commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityQuantityDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityQuantityDetail';

    /**
     * Number of units of the type below.
     *
     * @param decimal $amount
     * return HazardousCommodityQuantityDetail
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Units by which the hazardous commodity is measured. For IATA commodity, the units values are restricted based on regulation type.
     *
     * @param string $units
     * return HazardousCommodityQuantityDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Specifies which measure of quantity is to be validated.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityQuantityType|string $quantityType
     * return HazardousCommodityQuantityDetail
     */
    public function setQuantityType($quantityType)
    {
        $this->QuantityType = $quantityType;
        return $this;
    }
    

    
}