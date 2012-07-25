<?php
namespace FedEx\PickupService\ComplexType;

/**
 * This type contains equivalent data to Contact, but uses a form of person name with separate first and last names.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ParsedContact
    extends AbstractComplexType
{
    protected $_name = 'ParsedContact';

    /**
     * The name of the person.
     *
     * @param ParsedPersonName $PersonName
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
     * @param string $Title
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
     * @param string $CompanyName
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
     * @param string $PhoneNumber
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
     * @param string $PagerNumber
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
     * @param string $FaxNumber
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
     * @param string $EMailAddress
     * return ParsedContact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}