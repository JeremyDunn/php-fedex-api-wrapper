<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AssociatedAccount
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class AssociatedAccount
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AssociatedAccount';

    /**
     * Set Type
     *
     * @param \FedEx\Pickup\SimpleType\AssociatedAccountNumberType|string $type
     * @return AssociatedAccount
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\Pickup\SimpleType\AssociatedAccountNumberType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set AccountNumber
     *
     * @param string $accountNumber
     * @return AssociatedAccount
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Returns Set AccountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    

    
}