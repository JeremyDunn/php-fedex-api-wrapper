<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ContactAndAddress
    extends AbstractComplexType
{
    protected $_name = 'ContactAndAddress';

    /**
     * 
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
     * 
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