<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the special services supported at the clearance location for an individual destination country.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property string $ClearanceCountry
 * @property \FedEx\LocationsService\SimpleType\ServiceType|string[] $ServicesSupported
 * @property \FedEx\LocationsService\SimpleType\PackageSpecialServiceType|string[] $SpecialServicesSupported

 */
class ClearanceCountryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ClearanceCountryDetail';

    /**
     * Identifies the country whose special services are specified below.
     *
     * @param string $clearanceCountry
     * @return $this
     */
    public function setClearanceCountry($clearanceCountry)
    {
        $this->values['ClearanceCountry'] = $clearanceCountry;
        return $this;
    }

    /**
     * Set ServicesSupported
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
     * Identifies the constrained special services supported for the country above.
     *
     * @param \FedEx\LocationsService\SimpleType\PackageSpecialServiceType[]|string[] $specialServicesSupported
     * @return $this
     */
    public function setSpecialServicesSupported(array $specialServicesSupported)
    {
        $this->values['SpecialServicesSupported'] = $specialServicesSupported;
        return $this;
    }
}
