<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data identifying the party responsible for payment for a service.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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