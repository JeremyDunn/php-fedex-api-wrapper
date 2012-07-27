<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a person or company entitiy doing business with FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class ContactAndAddress
    extends AbstractComplexType
{
    protected $_name = 'ContactAndAddress';

    /**
     * Descriptive data identifying the point-of-contact person.
     *
     * @param Contact $Contact
     * return ContactAndAddress
     */
    public function setContact(Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * The descriptive data for a physical location.
     *
     * @param Address $Address
     * return ContactAndAddress
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}