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
class CreditCard
    extends AbstractComplexType
{
    protected $_name = 'CreditCard';

    /**
     * 
     *
     * @param string $Number
     * return CreditCard
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * 
     *
     * @param CreditCardType $CreditCardType
     * return CreditCard
     */
    public function setCreditCardType(\FedEx\PickupService\SimpleType\CreditCardType $creditCardType)
    {
        $this->CreditCardType = $creditCardType;
        return $this;
    }
    
    /**
     * Must be in one of the following formats: YYMM, YYYYMM, or YYYYMMDD.
     *
     * @param string $ExpirationDate
     * return CreditCard
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $VerificationCode
     * return CreditCard
     */
    public function setVerificationCode($verificationCode)
    {
        $this->VerificationCode = $verificationCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedContactAndAddress $CreditCardHolder
     * return CreditCard
     */
    public function setCreditCardHolder(ParsedContactAndAddress $creditCardHolder)
    {
        $this->CreditCardHolder = $creditCardHolder;
        return $this;
    }
    

    
}