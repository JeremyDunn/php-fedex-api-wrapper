<?php
namespace FedEx\ShipService\ComplexType;

/**
 * The descriptive data for the monetary compensation given to FedEx for services rendered to the customer.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setPaymentType(\FedEx\ShipService\SimpleType\PaymentType $paymentType)
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
    

    
}