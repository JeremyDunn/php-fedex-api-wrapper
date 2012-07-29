<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedAddress
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedAddress
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedAddress';

    /**
     * Set ParsedUrbanizationCode
     *
     * @param ParsedAddressPart $parsedUrbanizationCode
     * return ParsedAddress
     */
    public function setParsedUrbanizationCode(ParsedAddressPart $parsedUrbanizationCode)
    {
        $this->ParsedUrbanizationCode = $parsedUrbanizationCode;
        return $this;
    }
    
    /**
     * Set ParsedStreetLine
     *
     * @param ParsedAddressPart[] $parsedStreetLine
     * return ParsedAddress
     */
    public function setParsedStreetLine(array $parsedStreetLine)
    {
        $this->ParsedStreetLine = $parsedStreetLine;
        return $this;
    }
    
    /**
     * Set ParsedCity
     *
     * @param ParsedAddressPart $parsedCity
     * return ParsedAddress
     */
    public function setParsedCity(ParsedAddressPart $parsedCity)
    {
        $this->ParsedCity = $parsedCity;
        return $this;
    }
    
    /**
     * Set ParsedStateOrProvinceCode
     *
     * @param ParsedAddressPart $parsedStateOrProvinceCode
     * return ParsedAddress
     */
    public function setParsedStateOrProvinceCode(ParsedAddressPart $parsedStateOrProvinceCode)
    {
        $this->ParsedStateOrProvinceCode = $parsedStateOrProvinceCode;
        return $this;
    }
    
    /**
     * Set ParsedPostalCode
     *
     * @param ParsedAddressPart $parsedPostalCode
     * return ParsedAddress
     */
    public function setParsedPostalCode(ParsedAddressPart $parsedPostalCode)
    {
        $this->ParsedPostalCode = $parsedPostalCode;
        return $this;
    }
    
    /**
     * Set ParsedCountryCode
     *
     * @param ParsedAddressPart $parsedCountryCode
     * return ParsedAddress
     */
    public function setParsedCountryCode(ParsedAddressPart $parsedCountryCode)
    {
        $this->ParsedCountryCode = $parsedCountryCode;
        return $this;
    }
    

    
}