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
     * @return ParsedAddress
     */
    public function setParsedUrbanizationCode(ParsedAddressPart $parsedUrbanizationCode)
    {
        $this->ParsedUrbanizationCode = $parsedUrbanizationCode;
        return $this;
    }
    
    /**
     * Returns Set ParsedUrbanizationCode
     *
     * @return ParsedAddressPart
     */
    public function getParsedUrbanizationCode()
    {
        return $this->ParsedUrbanizationCode;
    }
    
    /**
     * Set ParsedStreetLine
     *
     * @param ParsedAddressPart[] $parsedStreetLine
     * @return ParsedAddress
     */
    public function setParsedStreetLine(array $parsedStreetLine)
    {
        $this->ParsedStreetLine = $parsedStreetLine;
        return $this;
    }
    
    /**
     * Returns Set ParsedStreetLine
     *
     * @return ParsedAddressPart[]
     */
    public function getParsedStreetLine()
    {
        return $this->ParsedStreetLine;
    }
    
    /**
     * Set ParsedCity
     *
     * @param ParsedAddressPart $parsedCity
     * @return ParsedAddress
     */
    public function setParsedCity(ParsedAddressPart $parsedCity)
    {
        $this->ParsedCity = $parsedCity;
        return $this;
    }
    
    /**
     * Returns Set ParsedCity
     *
     * @return ParsedAddressPart
     */
    public function getParsedCity()
    {
        return $this->ParsedCity;
    }
    
    /**
     * Set ParsedStateOrProvinceCode
     *
     * @param ParsedAddressPart $parsedStateOrProvinceCode
     * @return ParsedAddress
     */
    public function setParsedStateOrProvinceCode(ParsedAddressPart $parsedStateOrProvinceCode)
    {
        $this->ParsedStateOrProvinceCode = $parsedStateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns Set ParsedStateOrProvinceCode
     *
     * @return ParsedAddressPart
     */
    public function getParsedStateOrProvinceCode()
    {
        return $this->ParsedStateOrProvinceCode;
    }
    
    /**
     * Set ParsedPostalCode
     *
     * @param ParsedAddressPart $parsedPostalCode
     * @return ParsedAddress
     */
    public function setParsedPostalCode(ParsedAddressPart $parsedPostalCode)
    {
        $this->ParsedPostalCode = $parsedPostalCode;
        return $this;
    }
    
    /**
     * Returns Set ParsedPostalCode
     *
     * @return ParsedAddressPart
     */
    public function getParsedPostalCode()
    {
        return $this->ParsedPostalCode;
    }
    
    /**
     * Set ParsedCountryCode
     *
     * @param ParsedAddressPart $parsedCountryCode
     * @return ParsedAddress
     */
    public function setParsedCountryCode(ParsedAddressPart $parsedCountryCode)
    {
        $this->ParsedCountryCode = $parsedCountryCode;
        return $this;
    }
    
    /**
     * Returns Set ParsedCountryCode
     *
     * @return ParsedAddressPart
     */
    public function getParsedCountryCode()
    {
        return $this->ParsedCountryCode;
    }
    

    
}