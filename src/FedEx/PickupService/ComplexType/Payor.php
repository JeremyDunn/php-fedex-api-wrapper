<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data identifying the party responsible for payment for a service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Payor
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Payor';

    /**
     * Identifies the FedEx account number assigned to the payor.
     *
     * @param string $accountNumber
     * @return Payor
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx account number assigned to the payor.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    
    /**
     * Identifies the country of the payor.
     *
     * @param string $countryCode
     * @return Payor
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Returns Identifies the country of the payor.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    
    /**
     * Set AssociatedAccounts
     *
     * @param AssociatedAccount[] $associatedAccounts
     * @return Payor
     */
    public function setAssociatedAccounts(array $associatedAccounts)
    {
        $this->AssociatedAccounts = $associatedAccounts;
        return $this;
    }
    
    /**
     * Returns Set AssociatedAccounts
     *
     * @return AssociatedAccount[]
     */
    public function getAssociatedAccounts()
    {
        return $this->AssociatedAccounts;
    }
    

    
}