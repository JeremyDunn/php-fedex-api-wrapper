<?php
namespace FedEx\AddressValidationService\ComplexType;

/**
 * The descriptive data for a physical location.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class Address
    extends AbstractComplexType
{
    protected $_name = 'Address';

    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     *
     * @param array[string] $StreetLines
     * return Address
     */
    public function setStreetLines(array $streetLines)
    {
        $this->StreetLines = $streetLines;
        return $this;
    }
    
    /**
     * Name of city, town, etc.
     *
     * @param string $City
     * return Address
     */
    public function setCity($city)
    {
        $this->City = $city;
        return $this;
    }
    
    /**
     * Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country.
     *
     * @param string $StateOrProvinceCode
     * return Address
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country. This element is required if both the City and StateOrProvinceCode are not present.
     *
     * @param string $PostalCode
     * return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Relevant only to addresses in Puerto Rico. In Puerto Rico, multiple addresses within the same ZIP code can have the same house number and street name. When this is the case, the urbanization code is needed to distinguish them.
     *
     * @param string $UrbanizationCode
     * return Address
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->UrbanizationCode = $urbanizationCode;
        return $this;
    }
    
    /**
     * Identification of a country.
     *
     * @param string $CountryCode
     * return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Indicates whether this address is residential (as opposed to commercial).
     *
     * @param boolean $Residential
     * return Address
     */
    public function setResidential($residential)
    {
        $this->Residential = $residential;
        return $this;
    }
    

    
}