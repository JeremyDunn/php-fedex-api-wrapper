<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data for a point-of-contact person.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Contact
    extends AbstractComplexType
{
    protected $_name = 'Contact';

    /**
     * Client provided identifier corresponding to this contact information.
     *
     * @param string $ContactId
     * return Contact
     */
    public function setContactId($contactId)
    {
        $this->ContactId = $contactId;
        return $this;
    }
    
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
     * Identifies the company this contact is associated with.
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
     * Identifies the phone number associated with this contact.
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
     * Identifies the phone extension associated with this contact.
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
     * Identifies the pager number associated with this contact.
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
     * Identifies the fax number associated with this contact.
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
     * Identifies the email address associated with this contact.
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