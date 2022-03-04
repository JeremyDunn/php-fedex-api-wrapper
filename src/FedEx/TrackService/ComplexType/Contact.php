<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a point-of-contact person.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $PersonName
 * @property string $Title
 * @property string $CompanyName
 * @property string $PhoneNumber
 * @property string $PhoneExtension
 * @property string $TollFreePhoneNumber
 * @property string $PagerNumber
 * @property string $FaxNumber
 * @property string $EMailAddress

 */
class Contact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Contact';

    /**
     * Identifies the contact person's name.
     *
     * @param string $personName
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->values['PersonName'] = $personName;
        return $this;
    }

    /**
     * Identifies the contact person's title.
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
     * Identifies the company this contact is associated with.
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
     * Identifies the phone number associated with this contact.
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
     * Identifies the phone extension associated with this contact.
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
     * Identifies a toll free number, if any, associated with this contact.
     *
     * @param string $tollFreePhoneNumber
     * @return $this
     */
    public function setTollFreePhoneNumber($tollFreePhoneNumber)
    {
        $this->values['TollFreePhoneNumber'] = $tollFreePhoneNumber;
        return $this;
    }

    /**
     * Identifies the pager number associated with this contact.
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
     * Identifies the fax number associated with this contact.
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
     * Identifies the email address associated with this contact.
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
