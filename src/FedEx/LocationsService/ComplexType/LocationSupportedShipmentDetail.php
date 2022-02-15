<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationSupportedShipmentDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property LocationSupportedPackageDetail[] $PackageDetails

 */
class LocationSupportedShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationSupportedShipmentDetail';

    /**
     * Set PackageDetails
     *
     * @param LocationSupportedPackageDetail[] $packageDetails
     * @return $this
     */
    public function setPackageDetails(array $packageDetails)
    {
        $this->values['PackageDetails'] = $packageDetails;
        return $this;
    }
}
