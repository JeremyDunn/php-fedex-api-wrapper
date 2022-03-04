<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data identifying the point-of-contact person.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property string $PersonName
 * @property string $Title
 * @property string $CompanyName
 * @property string $PhoneNumber
 * @property string $PhoneExtension
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
     * Identifies the contact person's company name.
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
     * Identifies the contact person's phone number.
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
     * Identifies the contact person's phone number extension.
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
     * Identifies the contact person's pager number.
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
     * Identifies the contact person's fax machine phone number.
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
     * Identifies the contact person's email address.
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
