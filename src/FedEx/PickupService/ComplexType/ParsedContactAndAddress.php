<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This type contains equivalent data to ContactAndAddress, but uses a form of person name with separate first, middle and last names.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ParsedContactAndAddress
    extends AbstractComplexType
{
    protected $_name = 'ParsedContactAndAddress';

    /**
     * 
     *
     * @param ParsedContact $Contact
     * return ParsedContactAndAddress
     */
    public function setContact(ParsedContact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Address
     * return ParsedContactAndAddress
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}