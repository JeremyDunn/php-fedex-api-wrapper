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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedContactAndAddress';

    /**
     * Set Contact
     *
     * @param ParsedContact $contact
     * @return ParsedContactAndAddress
     */
    public function setContact(ParsedContact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * Returns Set Contact
     *
     * @return ParsedContact
     */
    public function getContact()
    {
        return $this->Contact;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * @return ParsedContactAndAddress
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Set Address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    

    
}