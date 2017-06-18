<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\ShipmentSpecialServiceType|string $SpecialService
 * @property \FedEx\ShipService\SimpleType\FreightShipmentRoleType|string $PaymentType

 */
class FreightSpecialServicePayment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightSpecialServicePayment';

    /**
     * Identifies the special service.
     *
     * @param \FedEx\ShipService\SimpleType\ShipmentSpecialServiceType|string $specialService
     * @return $this
     */
    public function setSpecialService($specialService)
    {
        $this->values['SpecialService'] = $specialService;
        return $this;
    }

    /**
     * Indicates who will pay for the special service.
     *
     * @param \FedEx\ShipService\SimpleType\FreightShipmentRoleType|string $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->values['PaymentType'] = $paymentType;
        return $this;
    }
}
