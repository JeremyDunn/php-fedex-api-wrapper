<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Address
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Address';

    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     *
     * @param string[] $streetLines
     * @return Address
     */
    public function setStreetLines(array $streetLines)
    {
        $this->StreetLines = $streetLines;
        return $this;
    }
    
    /**
     * Returns Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     *
     * @return string[]
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }
    
    /**
     * Name of city, town, etc.
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->City = $city;
        return $this;
    }
    
    /**
     * Returns Name of city, town, etc.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }
    
    /**
     * Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country.
     *
     * @param string $stateOrProvinceCode
     * @return Address
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country.
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    
    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     *
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Returns Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    
    /**
     * Relevant only to addresses in Puerto Rico.
     *
     * @param string $urbanizationCode
     * @return Address
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->UrbanizationCode = $urbanizationCode;
        return $this;
    }
    
    /**
     * Returns Relevant only to addresses in Puerto Rico.
     *
     * @return string
     */
    public function getUrbanizationCode()
    {
        return $this->UrbanizationCode;
    }
    
    /**
     * The two-letter code used to identify a country.
     *
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Returns The two-letter code used to identify a country.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    
    /**
     * Indicates whether this address residential (as opposed to commercial).
     *
     * @param boolean $residential
     * @return Address
     */
    public function setResidential($residential)
    {
        $this->Residential = $residential;
        return $this;
    }
    
    /**
     * Returns Indicates whether this address residential (as opposed to commercial).
     *
     * @return boolean
     */
    public function getResidential()
    {
        return $this->Residential;
    }
    

    
}