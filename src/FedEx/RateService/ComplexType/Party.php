<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a person or company entitiy doing business with FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Party
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Party';

    /**
     * Identifies the FedEx account number assigned to the customer.
     *
     * @param string $accountNumber
     * @return Party
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx account number assigned to the customer.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    
    /**
     * Descriptive data for taxpayer identification information.
     *
     * @param TaxpayerIdentification[] $tins
     * @return Party
     */
    public function setTins(array $tins)
    {
        $this->Tins = $tins;
        return $this;
    }
    
    /**
     * Returns Descriptive data for taxpayer identification information.
     *
     * @return TaxpayerIdentification[]
     */
    public function getTins()
    {
        return $this->Tins;
    }
    
    /**
     * Descriptive data identifying the point-of-contact person.
     *
     * @param Contact $contact
     * @return Party
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
     * @return Party
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