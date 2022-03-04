<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EPaymentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Id
 * @property \FedEx\RateService\SimpleType\EPaymentProcessorType|string $EPaymentProcessor
 * @property \FedEx\RateService\SimpleType\EPaymentModeType|string $EPaymentMode
 * @property string $MaskedCreditCard
 * @property string $CreditCardExpirationDate
 * @property Money $Amount

 */
class EPaymentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EPaymentDetail';

    /**
     * Set Id
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Set EPaymentProcessor
     *
     * @param \FedEx\RateService\SimpleType\EPaymentProcessorType|string $ePaymentProcessor
     * @return $this
     */
    public function setEPaymentProcessor($ePaymentProcessor)
    {
        $this->values['EPaymentProcessor'] = $ePaymentProcessor;
        return $this;
    }

    /**
     * Set EPaymentMode
     *
     * @param \FedEx\RateService\SimpleType\EPaymentModeType|string $ePaymentMode
     * @return $this
     */
    public function setEPaymentMode($ePaymentMode)
    {
        $this->values['EPaymentMode'] = $ePaymentMode;
        return $this;
    }

    /**
     * Set MaskedCreditCard
     *
     * @param string $maskedCreditCard
     * @return $this
     */
    public function setMaskedCreditCard($maskedCreditCard)
    {
        $this->values['MaskedCreditCard'] = $maskedCreditCard;
        return $this;
    }

    /**
     * Set CreditCardExpirationDate
     *
     * @param string $creditCardExpirationDate
     * @return $this
     */
    public function setCreditCardExpirationDate($creditCardExpirationDate)
    {
        $this->values['CreditCardExpirationDate'] = $creditCardExpirationDate;
        return $this;
    }

    /**
     * Set Amount
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->values['Amount'] = $amount;
        return $this;
    }
}
