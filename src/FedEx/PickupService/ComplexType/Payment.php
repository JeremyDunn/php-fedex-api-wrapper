<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payment
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\PaymentType|string $PaymentType
 * @property Payor $Payor
 * @property EPaymentDetail $EPaymentDetail
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
     * Set PaymentType
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
     * Set Payor
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
     * FOR FEDEX INTERNAL USE ONLY
     *
     * @param EPaymentDetail $ePaymentDetail
     * @return $this
     */
    public function setEPaymentDetail(EPaymentDetail $ePaymentDetail)
    {
        $this->values['EPaymentDetail'] = $ePaymentDetail;
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
