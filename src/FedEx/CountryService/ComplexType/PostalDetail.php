<?php
namespace FedEx\CountryService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PostalDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 *
 * @property string $CountryCode
 * @property string $StateOrProvinceCode
 * @property string $CityFirstInitials
 * @property string $CleanedPostalCode
 * @property LocationDescription[] $LocationDescriptions

 */
class PostalDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PostalDetail';

    /**
     * Set CountryCode
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
     * Set StateOrProvinceCode
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
     * Set CityFirstInitials
     *
     * @param string $cityFirstInitials
     * @return $this
     */
    public function setCityFirstInitials($cityFirstInitials)
    {
        $this->values['CityFirstInitials'] = $cityFirstInitials;
        return $this;
    }

    /**
     * Set CleanedPostalCode
     *
     * @param string $cleanedPostalCode
     * @return $this
     */
    public function setCleanedPostalCode($cleanedPostalCode)
    {
        $this->values['CleanedPostalCode'] = $cleanedPostalCode;
        return $this;
    }

    /**
     * Set LocationDescriptions
     *
     * @param LocationDescription[] $locationDescriptions
     * @return $this
     */
    public function setLocationDescriptions(array $locationDescriptions)
    {
        $this->values['LocationDescriptions'] = $locationDescriptions;
        return $this;
    }
}
