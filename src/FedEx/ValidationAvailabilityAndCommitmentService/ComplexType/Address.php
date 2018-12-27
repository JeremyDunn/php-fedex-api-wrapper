<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $PostalCode
 * @property string $CountryCode
 * @property string $GeographicCoordinates

 */
class Address extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Address';

    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     *
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->values['PostalCode'] = $postalCode;
        return $this;
    }

    /**
     * The two-letter code used to identify a country.
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['CountryCode'] = $countryCode;
        return $this;
    }

    /**
     * The geographic coordinates cooresponding to this address.
     *
     * @param string $geographicCoordinates
     * @return $this
     */
    public function setGeographicCoordinates($geographicCoordinates)
    {
        $this->values['GeographicCoordinates'] = $geographicCoordinates;
        return $this;
    }
}
