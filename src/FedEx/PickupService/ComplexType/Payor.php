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
    protected $_name = 'Payor';

    /**
     * Identifies the FedEx account number assigned to the payor.
     *
     * @param string $AccountNumber
     * return Payor
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Identifies the country of the payor.
     *
     * @param string $CountryCode
     * return Payor
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AssociatedAccount] $AssociatedAccounts
     * return Payor
     */
    public function setAssociatedAccounts(array $associatedAccounts)
    {
        $this->AssociatedAccounts = $associatedAccounts;
        return $this;
    }
    

    
}