<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @param \FedEx\ShipService\SimpleType\ShipmentSpecialServiceType|string $specialService
     * @return FreightSpecialServicePayment
     */
    public function setSpecialService($specialService)
    {
        $this->SpecialService = $specialService;
        return $this;
    }
    
    /**
     * Returns Identifies the special service.
     *
     * @return \FedEx\ShipService\SimpleType\ShipmentSpecialServiceType|string
     */
    public function getSpecialService()
    {
        return $this->SpecialService;
    }
    
    /**
     * Indicates who will pay for the special service.
     *
     * @param \FedEx\ShipService\SimpleType\FreightShipmentRoleType|string $paymentType
     * @return FreightSpecialServicePayment
     */
    public function setPaymentType($paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Returns Indicates who will pay for the special service.
     *
     * @return \FedEx\ShipService\SimpleType\FreightShipmentRoleType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    

    
}