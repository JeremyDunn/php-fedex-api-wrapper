<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * If requesting rates using the PackageDetails element (one package at a time) in the request, the rates for each package will be returned in this element. Currently total piece total weight rates are also retuned in this element.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RatedPackageDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RatedPackageDetail';

    /**
     * Echoed from the corresponding package in the rate request (if provided).
     *
     * @param TrackingId[] $trackingIds
     * return RatedPackageDetail
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    
    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param nonNegativeInteger $groupNumber
     * return RatedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * The difference between "list" and "account" net charge.
     *
     * @param Money $effectiveNetDiscount
     * return RatedPackageDetail
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Ground COD is shipment level.
     *
     * @param Money $adjustedCodCollectionAmount
     * return RatedPackageDetail
     */
    public function setAdjustedCodCollectionAmount(Money $adjustedCodCollectionAmount)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    
    /**
     * Set OversizeClass
     *
     * @param \FedEx\RateService\SimpleType\OversizeClassType|string $oversizeClass
     * return RatedPackageDetail
     */
    public function setOversizeClass($oversizeClass)
    {
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * Rate data that are tied to a specific package and rate type combination.
     *
     * @param PackageRateDetail $packageRateDetail
     * return RatedPackageDetail
     */
    public function setPackageRateDetail(PackageRateDetail $packageRateDetail)
    {
        $this->PackageRateDetail = $packageRateDetail;
        return $this;
    }
    

    
}