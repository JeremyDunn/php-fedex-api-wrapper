<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreditCard
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Number
 * @property \FedEx\PickupService\SimpleType\CreditCardType|string $CreditCardType
 * @property string $ExpirationDate
 * @property string $VerificationCode
 * @property ParsedContactAndAddress $CreditCardHolder

 */
class CreditCard extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreditCard';

    /**
     * Set Number
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
        return $this;
    }

    /**
     * Set CreditCardType
     *
     * @param \FedEx\PickupService\SimpleType\CreditCardType|string $creditCardType
     * @return $this
     */
    public function setCreditCardType($creditCardType)
    {
        $this->values['CreditCardType'] = $creditCardType;
        return $this;
    }

    /**
     * Must be in one of the following formats: YYMM, YYYYMM, or YYYYMMDD.
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Set VerificationCode
     *
     * @param string $verificationCode
     * @return $this
     */
    public function setVerificationCode($verificationCode)
    {
        $this->values['VerificationCode'] = $verificationCode;
        return $this;
    }

    /**
     * Set CreditCardHolder
     *
     * @param ParsedContactAndAddress $creditCardHolder
     * @return $this
     */
    public function setCreditCardHolder(ParsedContactAndAddress $creditCardHolder)
    {
        $this->values['CreditCardHolder'] = $creditCardHolder;
        return $this;
    }
}
