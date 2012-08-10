<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreditCard
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreditCard
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreditCard';

    /**
     * Set Number
     *
     * @param string $number
     * return CreditCard
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Set CreditCardType
     *
     * @param \FedEx\Pickup\SimpleType\CreditCardType|string $creditCardType
     * return CreditCard
     */
    public function setCreditCardType($creditCardType)
    {
        $this->CreditCardType = $creditCardType;
        return $this;
    }
    
    /**
     * Must be in one of the following formats: YYMM, YYYYMM, or YYYYMMDD.
     *
     * @param string $expirationDate
     * return CreditCard
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Set VerificationCode
     *
     * @param string $verificationCode
     * return CreditCard
     */
    public function setVerificationCode($verificationCode)
    {
        $this->VerificationCode = $verificationCode;
        return $this;
    }
    
    /**
     * Set CreditCardHolder
     *
     * @param ParsedContactAndAddress $creditCardHolder
     * return CreditCard
     */
    public function setCreditCardHolder(ParsedContactAndAddress $creditCardHolder)
    {
        $this->CreditCardHolder = $creditCardHolder;
        return $this;
    }
    

    
}