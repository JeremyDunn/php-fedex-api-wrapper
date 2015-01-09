<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RatedShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RatedShipmentDetail';

    /**
     * The difference between "list" and "account" total net charge.
     *
     * @param Money $effectiveNetDiscount
     * @return RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Returns The difference between "list" and "account" total net charge.
     *
     * @return Money
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    
    /**
     * Express COD is shipment level.
     *
     * @param Money $adjustedCodCollectionAmount
     * @return RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(Money $adjustedCodCollectionAmount)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    
    /**
     * Returns Express COD is shipment level.
     *
     * @return Money
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }
    
    /**
     * The shipment-level totals for this rate type.
     *
     * @param ShipmentRateDetail $shipmentRateDetail
     * @return RatedShipmentDetail
     */
    public function setShipmentRateDetail(ShipmentRateDetail $shipmentRateDetail)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    
    /**
     * Returns The shipment-level totals for this rate type.
     *
     * @return ShipmentRateDetail
     */
    public function getShipmentRateDetail()
    {
        return $this->ShipmentRateDetail;
    }
    
    /**
     * The package-level data for this rate type.
     *
     * @param RatedPackageDetail[] $ratedPackages
     * @return RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages)
    {
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    
    /**
     * Returns The package-level data for this rate type.
     *
     * @return RatedPackageDetail[]
     */
    public function getRatedPackages()
    {
        return $this->RatedPackages;
    }
    

    
}