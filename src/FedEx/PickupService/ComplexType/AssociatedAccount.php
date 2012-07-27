<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class AssociatedAccount
    extends AbstractComplexType
{
    protected $_name = 'AssociatedAccount';

    /**
     * 
     *
     * @param AssociatedAccountNumberType $Type
     * return AssociatedAccount
     */
    public function setType(\FedEx\Pickup\SimpleType\AssociatedAccountNumberType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $AccountNumber
     * return AssociatedAccount
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    

    
}