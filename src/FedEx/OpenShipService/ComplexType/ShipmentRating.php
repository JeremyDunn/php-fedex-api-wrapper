<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class groups together all shipment-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ReturnedRateType|string $ActualRateType
 * @property Money $EffectiveNetDiscount
 * @property ShipmentRateDetail[] $ShipmentRateDetails

 */
class ShipmentRating extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentRating';

    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     *
     * @param \FedEx\OpenShipService\SimpleType\ReturnedRateType|string $actualRateType
     * @return $this
     */
    public function setActualRateType($actualRateType)
    {
        $this->values['ActualRateType'] = $actualRateType;
        return $this;
    }

    /**
     * The "list" total net charge minus "actual" total net charge.
     *
     * @param Money $effectiveNetDiscount
     * @return $this
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->values['EffectiveNetDiscount'] = $effectiveNetDiscount;
        return $this;
    }

    /**
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @param ShipmentRateDetail[] $shipmentRateDetails
     * @return $this
     */
    public function setShipmentRateDetails(array $shipmentRateDetails)
    {
        $this->values['ShipmentRateDetails'] = $shipmentRateDetails;
        return $this;
    }
}
