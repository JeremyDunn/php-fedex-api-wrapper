<?php
namespace FedEx\AddressValidationService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedAddress
    extends AbstractComplexType
{
    protected $_name = 'ParsedAddress';

    /**
     * 
     *
     * @param ParsedAddressPart $ParsedUrbanizationCode
     * return ParsedAddress
     */
    public function setParsedUrbanizationCode(ParsedAddressPart $parsedUrbanizationCode)
    {
        $this->ParsedUrbanizationCode = $parsedUrbanizationCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[ParsedAddressPart] $ParsedStreetLine
     * return ParsedAddress
     */
    public function setParsedStreetLine(array $parsedStreetLine)
    {
        $this->ParsedStreetLine = $parsedStreetLine;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedCity
     * return ParsedAddress
     */
    public function setParsedCity(ParsedAddressPart $parsedCity)
    {
        $this->ParsedCity = $parsedCity;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedStateOrProvinceCode
     * return ParsedAddress
     */
    public function setParsedStateOrProvinceCode(ParsedAddressPart $parsedStateOrProvinceCode)
    {
        $this->ParsedStateOrProvinceCode = $parsedStateOrProvinceCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedPostalCode
     * return ParsedAddress
     */
    public function setParsedPostalCode(ParsedAddressPart $parsedPostalCode)
    {
        $this->ParsedPostalCode = $parsedPostalCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedCountryCode
     * return ParsedAddress
     */
    public function setParsedCountryCode(ParsedAddressPart $parsedCountryCode)
    {
        $this->ParsedCountryCode = $parsedCountryCode;
        return $this;
    }
    

    
}