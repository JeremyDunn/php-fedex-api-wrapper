<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Payment
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Payment';

    /**
     * Set PaymentType
     *
     * @param \FedEx\RateService\SimpleType\PaymentType|string $paymentType
     * @return Payment
     */
    public function setPaymentType($paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Returns Set PaymentType
     *
     * @return \FedEx\RateService\SimpleType\PaymentType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    
    /**
     * Set Payor
     *
     * @param Payor $payor
     * @return Payment
     */
    public function setPayor(Payor $payor)
    {
        $this->Payor = $payor;
        return $this;
    }
    
    /**
     * Returns Set Payor
     *
     * @return Payor
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    

    
}