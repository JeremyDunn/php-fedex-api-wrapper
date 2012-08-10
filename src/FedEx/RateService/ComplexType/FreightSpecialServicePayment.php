<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightSpecialServicePayment
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightSpecialServicePayment';

    /**
     * Identifies the special service.
     *
     * @param \FedEx\RateService\SimpleType\ShipmentSpecialServiceType|string $specialService
     * return FreightSpecialServicePayment
     */
    public function setSpecialService($specialService)
    {
        $this->SpecialService = $specialService;
        return $this;
    }
    
    /**
     * Indicates who will pay for the special service.
     *
     * @param \FedEx\RateService\SimpleType\FreightAccountPaymentType|string $paymentType
     * return FreightSpecialServicePayment
     */
    public function setPaymentType($paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    

    
}