<?php
namespace FedEx\ShipService\ComplexType;

/**
 * This class groups together for a single package all package-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageRating
    extends AbstractComplexType
{
    protected $_name = 'PackageRating';

    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the package.
     *
     * @param ReturnedRateType $ActualRateType
     * return PackageRating
     */
    public function setActualRateType(\FedEx\ShipService\SimpleType\ReturnedRateType $actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * The "list" net charge minus "actual" net charge.
     *
     * @param Money $EffectiveNetDiscount
     * return PackageRating
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Each element of this field provides package-level rate data for a specific rate type.
     *
     * @param array[PackageRateDetail] $PackageRateDetails
     * return PackageRating
     */
    public function setPackageRateDetails(array $packageRateDetails)
    {
        $this->PackageRateDetails = $packageRateDetails;
        return $this;
    }
    

    
}