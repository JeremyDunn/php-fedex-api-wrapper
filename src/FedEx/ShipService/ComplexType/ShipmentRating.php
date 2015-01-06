<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class groups together all shipment-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentRating
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentRating';

    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\ReturnedRateType|string $actualRateType
     * @return ShipmentRating
     */
    public function setActualRateType($actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * Returns This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     *
     * @return \FedEx\ShipService\SimpleType\ReturnedRateType|string
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    
    /**
     * The "list" total net charge minus "actual" total net charge.
     *
     * @param Money $effectiveNetDiscount
     * @return ShipmentRating
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Returns The "list" total net charge minus "actual" total net charge.
     *
     * @return Money
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    
    /**
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @param ShipmentRateDetail[] $shipmentRateDetails
     * @return ShipmentRating
     */
    public function setShipmentRateDetails(array $shipmentRateDetails)
    {
        $this->ShipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
    
    /**
     * Returns Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @return ShipmentRateDetail[]
     */
    public function getShipmentRateDetails()
    {
        return $this->ShipmentRateDetails;
    }
    

    
}