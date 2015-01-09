<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a person or company entitiy doing business with FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ContactAndAddress
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ContactAndAddress';

    /**
     * Descriptive data identifying the point-of-contact person.
     *
     * @param Contact $contact
     * @return ContactAndAddress
     */
    public function setContact(Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * Returns Descriptive data identifying the point-of-contact person.
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }
    
    /**
     * The descriptive data for a physical location.
     *
     * @param Address $address
     * @return ContactAndAddress
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns The descriptive data for a physical location.
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    

    
}