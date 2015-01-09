<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a point-of-contact person.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class Contact
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Contact';

    /**
     * Identifies the contact person's name.
     *
     * @param string $personName
     * @return Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * Returns Identifies the contact person's name.
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    
    /**
     * Identifies the contact person's title.
     *
     * @param string $title
     * @return Contact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Returns Identifies the contact person's title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }
    
    /**
     * Identifies the company this contact is associated with.
     *
     * @param string $companyName
     * @return Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Returns Identifies the company this contact is associated with.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    
    /**
     * Identifies the phone number associated with this contact.
     *
     * @param string $phoneNumber
     * @return Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the phone number associated with this contact.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    
    /**
     * Identifies the phone extension associated with this contact.
     *
     * @param string $phoneExtension
     * @return Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Returns Identifies the phone extension associated with this contact.
     *
     * @return string
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }
    
    /**
     * Identifies the pager number associated with this contact.
     *
     * @param string $pagerNumber
     * @return Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the pager number associated with this contact.
     *
     * @return string
     */
    public function getPagerNumber()
    {
        return $this->PagerNumber;
    }
    
    /**
     * Identifies the fax number associated with this contact.
     *
     * @param string $faxNumber
     * @return Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the fax number associated with this contact.
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }
    
    /**
     * Identifies the email address associated with this contact.
     *
     * @param string $eMailAddress
     * @return Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * Returns Identifies the email address associated with this contact.
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }
    

    
}