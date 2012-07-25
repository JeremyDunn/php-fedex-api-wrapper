<?php
namespace FedEx\RateService\ComplexType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class FreightSpecialServicePayment
    extends AbstractComplexType
{
    protected $_name = 'FreightSpecialServicePayment';

    /**
     * Identifies the special service.
     *
     * @param ShipmentSpecialServiceType $SpecialService
     * return FreightSpecialServicePayment
     */
    public function setSpecialService(\FedEx\RateService\SimpleType\ShipmentSpecialServiceType $specialService)
    {
        $this->SpecialService = $specialService;
        return $this;
    }
    
    /**
     * Indicates who will pay for the special service.
     *
     * @param FreightAccountPaymentType $PaymentType
     * return FreightSpecialServicePayment
     */
    public function setPaymentType(\FedEx\RateService\SimpleType\FreightAccountPaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    

    
}