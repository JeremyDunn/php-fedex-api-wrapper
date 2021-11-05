<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\PaymentType|string $PaymentType
 * @property Payor $Payor
 * @property EPaymentDetail $EPaymentDetail

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
     * @param \FedEx\RateService\SimpleType\PaymentType|string $paymentType
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
}
