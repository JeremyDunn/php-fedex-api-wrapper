<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the monetary compensation given to FedEx for services rendered to the customer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\PaymentType|string $PaymentType
 * @property Payor $Payor
 * @property CreditCard $CreditCard
 * @property CreditCardTransactionDetail $CreditCardTransactionDetail
 * @property Money $Amount

 */
class Payment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Payment';

    /**
     * Identifies the method of payment for a service. See PaymentType for list of valid enumerated values.
     *
     * @param \FedEx\PickupService\SimpleType\PaymentType|string $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->values['PaymentType'] = $paymentType;
        return $this;
    }

    /**
     * Descriptive data identifying the party responsible for payment for a service.
     *
     * @param Payor $payor
     * @return $this
     */
    public function setPayor(Payor $payor)
    {
        $this->values['Payor'] = $payor;
        return $this;
    }

    /**
     * Set CreditCard
     *
     * @param CreditCard $creditCard
     * @return $this
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->values['CreditCard'] = $creditCard;
        return $this;
    }

    /**
     * Set CreditCardTransactionDetail
     *
     * @param CreditCardTransactionDetail $creditCardTransactionDetail
     * @return $this
     */
    public function setCreditCardTransactionDetail(CreditCardTransactionDetail $creditCardTransactionDetail)
    {
        $this->values['CreditCardTransactionDetail'] = $creditCardTransactionDetail;
        return $this;
    }

    /**
     * Descriptive data for the payor's cash payment.
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
