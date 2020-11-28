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
 * @property string[] $ServicesSupported
 * @property string[] $SpecialServicesSupported

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
     * @param string $servicesSupported
     * @return $this
     */
    public function setServicesSupported($servicesSupported)
    {
        $this->values['ServicesSupported'] = $servicesSupported;
        return $this;
    }

    /**
     * Set SpecialServicesSupported
     *
     * @param string $specialServicesSupported
     * @return $this
     */
    public function setSpecialServicesSupported($specialServicesSupported)
    {
        $this->values['SpecialServicesSupported'] = $specialServicesSupported;
        return $this;
    }
}
