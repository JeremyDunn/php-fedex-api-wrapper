<?php
namespace FedEx\PickupService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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
    public function setType(\FedEx\PickupService\SimpleType\AssociatedAccountNumberType $type)
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