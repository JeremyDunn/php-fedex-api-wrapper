<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string[] $StreetLines
 * @property string $City
 * @property string $StateOrProvinceCode
 * @property string $PostalCode
 * @property string $UrbanizationCode
 * @property string $CountryCode
 * @property string $CountryName
 * @property boolean $Residential

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
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     *
     * @param string $streetLines
     * @return $this
     */
    public function setStreetLines($streetLines)
    {
        $this->values['StreetLines'] = $streetLines;
        return $this;
    }

    /**
     * Name of city, town, etc.
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->values['City'] = $city;
        return $this;
    }

    /**
     * Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country.
     *
     * @param string $stateOrProvinceCode
     * @return $this
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->values['StateOrProvinceCode'] = $stateOrProvinceCode;
        return $this;
    }

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
     * Relevant only to addresses in Puerto Rico.
     *
     * @param string $urbanizationCode
     * @return $this
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->values['UrbanizationCode'] = $urbanizationCode;
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
     * The fully spelt out name of a country.
     *
     * @param string $countryName
     * @return $this
     */
    public function setCountryName($countryName)
    {
        $this->values['CountryName'] = $countryName;
        return $this;
    }

    /**
     * Indicates whether this address residential (as opposed to commercial).
     *
     * @param boolean $residential
     * @return $this
     */
    public function setResidential($residential)
    {
        $this->values['Residential'] = $residential;
        return $this;
    }
}
