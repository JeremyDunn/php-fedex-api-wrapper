<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This type contains equivalent data to Contact, but uses a form of person name with separate first and last names.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property ParsedPersonName $PersonName
 * @property string $Title
 * @property string $CompanyName
 * @property string $PhoneNumberCountryCode
 * @property string $PhoneNumberAreaCode
 * @property string $PhoneNumber
 * @property string $PhoneExtension
 * @property string $PagerNumber
 * @property string $FaxNumber
 * @property string $EMailAddress

 */
class ParsedContact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedContact';

    /**
     * Set PersonName
     *
     * @param ParsedPersonName $personName
     * @return $this
     */
    public function setPersonName(ParsedPersonName $personName)
    {
        $this->values['PersonName'] = $personName;
        return $this;
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->values['Title'] = $title;
        return $this;
    }

    /**
     * Set CompanyName
     *
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->values['CompanyName'] = $companyName;
        return $this;
    }

    /**
     * Specifies the country code to be dialled when calling the phone number listed as a part of the contact.
     *
     * @param string $phoneNumberCountryCode
     * @return $this
     */
    public function setPhoneNumberCountryCode($phoneNumberCountryCode)
    {
        $this->values['PhoneNumberCountryCode'] = $phoneNumberCountryCode;
        return $this;
    }

    /**
     * Specifies the area code of the phone number listed as a part of the contact.
     *
     * @param string $phoneNumberAreaCode
     * @return $this
     */
    public function setPhoneNumberAreaCode($phoneNumberAreaCode)
    {
        $this->values['PhoneNumberAreaCode'] = $phoneNumberAreaCode;
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
     * Set PhoneExtension
     *
     * @param string $phoneExtension
     * @return $this
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->values['PhoneExtension'] = $phoneExtension;
        return $this;
    }

    /**
     * Set PagerNumber
     *
     * @param string $pagerNumber
     * @return $this
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->values['PagerNumber'] = $pagerNumber;
        return $this;
    }

    /**
     * Set FaxNumber
     *
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->values['FaxNumber'] = $faxNumber;
        return $this;
    }

    /**
     * Set EMailAddress
     *
     * @param string $eMailAddress
     * @return $this
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->values['EMailAddress'] = $eMailAddress;
        return $this;
    }
}
