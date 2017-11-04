<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $PhoneNumber
 * @property string $PhoneNumberCountryCode

 */
class SmsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SmsDetail';

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
     * Set PhoneNumberCountryCode
     *
     * @param string $phoneNumberCountryCode
     * @return $this
     */
    public function setPhoneNumberCountryCode($phoneNumberCountryCode)
    {
        $this->values['PhoneNumberCountryCode'] = $phoneNumberCountryCode;
        return $this;
    }
}
