<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class groups together for a single package all package-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ReturnedRateType|string $ActualRateType
 * @property Money $EffectiveNetDiscount
 * @property PackageRateDetail[] $PackageRateDetails

 */
class PackageRating extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageRating';

    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the package.
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
     * The "list" net charge minus "actual" net charge.
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
     * Each element of this field provides package-level rate data for a specific rate type.
     *
     * @param PackageRateDetail[] $packageRateDetails
     * @return $this
     */
    public function setPackageRateDetails(array $packageRateDetails)
    {
        $this->values['PackageRateDetails'] = $packageRateDetails;
        return $this;
    }
}
