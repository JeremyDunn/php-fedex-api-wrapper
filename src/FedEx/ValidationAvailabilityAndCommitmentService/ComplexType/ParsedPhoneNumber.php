<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedPhoneNumber
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $CountryCode
 * @property string $AreaCode
 * @property string $PhoneNumber
 * @property string $Extension

 */
class ParsedPhoneNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedPhoneNumber';

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
     * Set AreaCode
     *
     * @param string $areaCode
     * @return $this
     */
    public function setAreaCode($areaCode)
    {
        $this->values['AreaCode'] = $areaCode;
        return $this;
    }

    /**
     * Set PhoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['PhoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Set Extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->values['Extension'] = $extension;
        return $this;
    }
}
