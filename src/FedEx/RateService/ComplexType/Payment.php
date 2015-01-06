<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the monetary compensation given to FedEx for services rendered to the customer.
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
     * Identifies the method of payment for a service. See PaymentType for list of valid enumerated values.
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
     * Returns Identifies the method of payment for a service. See PaymentType for list of valid enumerated values.
     *
     * @return \FedEx\RateService\SimpleType\PaymentType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    
    /**
     * Descriptive data identifying the party responsible for payment for a service.
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
     * Returns Descriptive data identifying the party responsible for payment for a service.
     *
     * @return Payor
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    

    
}