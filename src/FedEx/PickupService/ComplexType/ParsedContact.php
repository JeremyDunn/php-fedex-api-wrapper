<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This type contains equivalent data to Contact, but uses a form of person name with separate first and last names.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ParsedContact
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedContact';

    /**
     * The name of the person.
     *
     * @param ParsedPersonName $personName
     * return ParsedContact
     */
    public function setPersonName(ParsedPersonName $personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * The title of the person.
     *
     * @param string $title
     * return ParsedContact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * The name of the company, this person is working for.
     *
     * @param string $companyName
     * return ParsedContact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Phone number of the person.
     *
     * @param string $phoneNumber
     * return ParsedContact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Pager number of the person.
     *
     * @param string $pagerNumber
     * return ParsedContact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Fax number of the person.
     *
     * @param string $faxNumber
     * return ParsedContact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Email address information.
     *
     * @param string $eMailAddress
     * return ParsedContact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}