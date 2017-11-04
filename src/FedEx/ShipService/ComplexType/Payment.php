<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\PaymentType|string $PaymentType
 * @property Payor $Payor

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
     * @param \FedEx\ShipService\SimpleType\PaymentType|string $paymentType
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
}
