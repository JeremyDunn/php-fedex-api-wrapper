<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RatedPackageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property TrackingId[] $TrackingIds
 * @property int $GroupNumber
 * @property Money $EffectiveNetDiscount
 * @property Money $AdjustedCodCollectionAmount
 * @property \FedEx\RateService\SimpleType\OversizeClassType|string $OversizeClass
 * @property PackageRateDetail $PackageRateDetail

 */
class RatedPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatedPackageDetail';

    /**
     * Echoed from the corresponding package in the rate request (if provided).
     *
     * @param TrackingId[] $trackingIds
     * @return $this
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->values['TrackingIds'] = $trackingIds;
        return $this;
    }

    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param int $groupNumber
     * @return $this
     */
    public function setGroupNumber($groupNumber)
    {
        $this->values['GroupNumber'] = $groupNumber;
        return $this;
    }

    /**
     * The difference between "list" and "account" net charge.
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
     * Ground COD is shipment level.
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
     * Set OversizeClass
     *
     * @param \FedEx\RateService\SimpleType\OversizeClassType|string $oversizeClass
     * @return $this
     */
    public function setOversizeClass($oversizeClass)
    {
        $this->values['OversizeClass'] = $oversizeClass;
        return $this;
    }

    /**
     * Rate data that are tied to a specific package and rate type combination.
     *
     * @param PackageRateDetail $packageRateDetail
     * @return $this
     */
    public function setPackageRateDetail(PackageRateDetail $packageRateDetail)
    {
        $this->values['PackageRateDetail'] = $packageRateDetail;
        return $this;
    }
}
