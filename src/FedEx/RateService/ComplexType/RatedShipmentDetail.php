<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property Money $EffectiveNetDiscount
 * @property Money $AdjustedCodCollectionAmount
 * @property ShipmentRateDetail $ShipmentRateDetail
 * @property RatedPackageDetail[] $RatedPackages

 */
class RatedShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatedShipmentDetail';

    /**
     * The difference between "list" and "account" total net charge.
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
     * Express COD is shipment level.
     *
     * @param Money $adjustedCodCollectionAmount
     * @return $this
     */
    public function setAdjustedCodCollectionAmount(Money $adjustedCodCollectionAmount)
    {
        $this->values['AdjustedCodCollectionAmount'] = $adjustedCodCollectionAmount;
        return $this;
    }

    /**
     * The shipment-level totals for this rate type.
     *
     * @param ShipmentRateDetail $shipmentRateDetail
     * @return $this
     */
    public function setShipmentRateDetail(ShipmentRateDetail $shipmentRateDetail)
    {
        $this->values['ShipmentRateDetail'] = $shipmentRateDetail;
        return $this;
    }

    /**
     * The package-level data for this rate type.
     *
     * @param RatedPackageDetail[] $ratedPackages
     * @return $this
     */
    public function setRatedPackages(array $ratedPackages)
    {
        $this->values['RatedPackages'] = $ratedPackages;
        return $this;
    }
}
