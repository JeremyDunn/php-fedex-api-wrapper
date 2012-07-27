<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class represents data tied to the use of a credit card in a specific transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreditCardTransactionDetail
    extends AbstractComplexType
{
    protected $_name = 'CreditCardTransactionDetail';

    /**
     * 
     *
     * @param string $AuthorizationId
     * return CreditCardTransactionDetail
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->AuthorizationId = $authorizationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param CreditCardAuthorizationType $AuthorizationType
     * return CreditCardTransactionDetail
     */
    public function setAuthorizationType(\FedEx\Pickup\SimpleType\CreditCardAuthorizationType $authorizationType)
    {
        $this->AuthorizationType = $authorizationType;
        return $this;
    }
    
    /**
     * 
     *
     * @param CreditFraudDetectionDetail $FraudDetectionDetail
     * return CreditCardTransactionDetail
     */
    public function setFraudDetectionDetail(CreditFraudDetectionDetail $fraudDetectionDetail)
    {
        $this->FraudDetectionDetail = $fraudDetectionDetail;
        return $this;
    }
    

    
}