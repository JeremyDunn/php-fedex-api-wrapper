<?php
namespace FedEx\RateService\ComplexType;

/**
 * This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RatedShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'RatedShipmentDetail';

    /**
     * The difference between "list" and "account" total net charge.
     *
     * @param Money $EffectiveNetDiscount
     * return RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Express COD is shipment level.
     *
     * @param Money $AdjustedCodCollectionAmount
     * return RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(Money $adjustedCodCollectionAmount)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    
    /**
     * The shipment-level totals for this rate type.
     *
     * @param ShipmentRateDetail $ShipmentRateDetail
     * return RatedShipmentDetail
     */
    public function setShipmentRateDetail(ShipmentRateDetail $shipmentRateDetail)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    
    /**
     * The package-level data for this rate type.
     *
     * @param array[RatedPackageDetail] $RatedPackages
     * return RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages)
    {
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    

    
}