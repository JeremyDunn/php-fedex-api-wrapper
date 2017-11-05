<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the countries supported by this location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\ServiceType|string[] $ServicesSupported
 * @property \FedEx\LocationsService\SimpleType\ConsolidationType|string $ConsolidationType
 * @property \FedEx\LocationsService\SimpleType\DistributionClearanceType|string $ClearanceLocationType
 * @property \FedEx\LocationsService\SimpleType\PackageSpecialServiceType|string[] $SpecialServicesSupported
 * @property ClearanceCountryDetail[] $ClearanceCountries
 * @property string $ClearanceRoutingCode

 */
class ClearanceLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ClearanceLocationDetail';

    /**
     * Services supported for clearance
     *
     * @param \FedEx\LocationsService\SimpleType\ServiceType[]|string[] $servicesSupported
     * @return $this
     */
    public function setServicesSupported(array $servicesSupported)
    {
        $this->values['ServicesSupported'] = $servicesSupported;
        return $this;
    }

    /**
     * Identifies the type of consolidation for which these clearance location attributes were extracted.
     *
     * @param \FedEx\LocationsService\SimpleType\ConsolidationType|string $consolidationType
     * @return $this
     */
    public function setConsolidationType($consolidationType)
    {
        $this->values['ConsolidationType'] = $consolidationType;
        return $this;
    }

    /**
     * Identifies the type of clearance performed at this location.
     *
     * @param \FedEx\LocationsService\SimpleType\DistributionClearanceType|string $clearanceLocationType
     * @return $this
     */
    public function setClearanceLocationType($clearanceLocationType)
    {
        $this->values['ClearanceLocationType'] = $clearanceLocationType;
        return $this;
    }

    /**
     * Identifies the constrained special services supported at this location.
     *
     * @param \FedEx\LocationsService\SimpleType\PackageSpecialServiceType[]|string[] $specialServicesSupported
     * @return $this
     */
    public function setSpecialServicesSupported(array $specialServicesSupported)
    {
        $this->values['SpecialServicesSupported'] = $specialServicesSupported;
        return $this;
    }

    /**
     * Set ClearanceCountries
     *
     * @param ClearanceCountryDetail[] $clearanceCountries
     * @return $this
     */
    public function setClearanceCountries(array $clearanceCountries)
    {
        $this->values['ClearanceCountries'] = $clearanceCountries;
        return $this;
    }

    /**
     * Set ClearanceRoutingCode
     *
     * @param string $clearanceRoutingCode
     * @return $this
     */
    public function setClearanceRoutingCode($clearanceRoutingCode)
    {
        $this->values['ClearanceRoutingCode'] = $clearanceRoutingCode;
        return $this;
    }
}
