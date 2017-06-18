<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedAddress
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property ParsedAddressPart $ParsedUrbanizationCode
 * @property ParsedAddressPart[] $ParsedStreetLine
 * @property ParsedAddressPart $ParsedCity
 * @property ParsedAddressPart $ParsedStateOrProvinceCode
 * @property ParsedAddressPart $ParsedPostalCode
 * @property ParsedAddressPart $ParsedCountryCode

 */
class ParsedAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedAddress';

    /**
     * Set ParsedUrbanizationCode
     *
     * @param ParsedAddressPart $parsedUrbanizationCode
     * @return $this
     */
    public function setParsedUrbanizationCode(ParsedAddressPart $parsedUrbanizationCode)
    {
        $this->values['ParsedUrbanizationCode'] = $parsedUrbanizationCode;
        return $this;
    }

    /**
     * Set ParsedStreetLine
     *
     * @param ParsedAddressPart[] $parsedStreetLine
     * @return $this
     */
    public function setParsedStreetLine(array $parsedStreetLine)
    {
        $this->values['ParsedStreetLine'] = $parsedStreetLine;
        return $this;
    }

    /**
     * Set ParsedCity
     *
     * @param ParsedAddressPart $parsedCity
     * @return $this
     */
    public function setParsedCity(ParsedAddressPart $parsedCity)
    {
        $this->values['ParsedCity'] = $parsedCity;
        return $this;
    }

    /**
     * Set ParsedStateOrProvinceCode
     *
     * @param ParsedAddressPart $parsedStateOrProvinceCode
     * @return $this
     */
    public function setParsedStateOrProvinceCode(ParsedAddressPart $parsedStateOrProvinceCode)
    {
        $this->values['ParsedStateOrProvinceCode'] = $parsedStateOrProvinceCode;
        return $this;
    }

    /**
     * Set ParsedPostalCode
     *
     * @param ParsedAddressPart $parsedPostalCode
     * @return $this
     */
    public function setParsedPostalCode(ParsedAddressPart $parsedPostalCode)
    {
        $this->values['ParsedPostalCode'] = $parsedPostalCode;
        return $this;
    }

    /**
     * Set ParsedCountryCode
     *
     * @param ParsedAddressPart $parsedCountryCode
     * @return $this
     */
    public function setParsedCountryCode(ParsedAddressPart $parsedCountryCode)
    {
        $this->values['ParsedCountryCode'] = $parsedCountryCode;
        return $this;
    }
}
