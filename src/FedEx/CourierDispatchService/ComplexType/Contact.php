<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data identifying the point-of-contact person.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class Contact
    extends AbstractComplexType
{
    protected $_name = 'Contact';

    /**
     * Identifies the contact person's name.
     *
     * @param string $PersonName
     * return Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * Identifies the contact person's title.
     *
     * @param string $Title
     * return Contact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Identifies the contact person's company name.
     *
     * @param string $CompanyName
     * return Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Identifies the contact person's phone number.
     *
     * @param string $PhoneNumber
     * return Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Identifies the contact person's phone number extension.
     *
     * @param string $PhoneExtension
     * return Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Identifies the contact person's pager number.
     *
     * @param string $PagerNumber
     * return Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Identifies the contact person's fax machine phone number.
     *
     * @param string $FaxNumber
     * return Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Identifies the contact person's email address.
     *
     * @param string $EMailAddress
     * return Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}