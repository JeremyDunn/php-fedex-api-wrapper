<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data for the monetary compensation given to FedEx for services rendered to the customer.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Payment
    extends AbstractComplexType
{
    protected $_name = 'Payment';

    /**
     * Identifies the method of payment for a service. See PaymentType for list of valid enumerated values.
     *
     * @param PaymentType $PaymentType
     * return Payment
     */
    public function setPaymentType(\FedEx\PickupService\SimpleType\PaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Descriptive data identifying the party responsible for payment for a service.
     *
     * @param Payor $Payor
     * return Payment
     */
    public function setPayor(Payor $payor)
    {
        $this->Payor = $payor;
        return $this;
    }
    
    /**
     * 
     *
     * @param CreditCard $CreditCard
     * return Payment
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    
    /**
     * 
     *
     * @param CreditCardTransactionDetail $CreditCardTransactionDetail
     * return Payment
     */
    public function setCreditCardTransactionDetail(CreditCardTransactionDetail $creditCardTransactionDetail)
    {
        $this->CreditCardTransactionDetail = $creditCardTransactionDetail;
        return $this;
    }
    
    /**
     * Descriptive data for the payor's cash payment.
     *
     * @param Money $Amount
     * return Payment
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}