<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a physical location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property string[] $StreetLines
 * @property string $City
 * @property string $StateOrProvinceCode
 * @property string $PostalCode
 * @property string $UrbanizationCode
 * @property string $CountryCode
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
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country. This element is required if both the City and StateOrProvinceCode are not present.
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
     * Relevant only to addresses in Puerto Rico. In Puerto Rico, multiple addresses within the same ZIP code can have the same house number and street name. When this is the case, the urbanization code is needed to distinguish them.
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
     * Identification of a country.
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
     * Indicates whether this address is residential (as opposed to commercial).
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
