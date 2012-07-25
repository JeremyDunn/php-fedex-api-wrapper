<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data for a person or company entitiy doing business with FedEx.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Party
    extends AbstractComplexType
{
    protected $_name = 'Party';

    /**
     * Identifies the FedEx account number assigned to the customer.
     *
     * @param string $AccountNumber
     * return Party
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[TaxpayerIdentification] $Tins
     * return Party
     */
    public function setTins(array $tins)
    {
        $this->Tins = $tins;
        return $this;
    }
    
    /**
     * Descriptive data identifying the point-of-contact person.
     *
     * @param Contact $Contact
     * return Party
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
     * return Party
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}