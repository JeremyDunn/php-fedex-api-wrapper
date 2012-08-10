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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreditCardTransactionDetail';

    /**
     * Set AuthorizationId
     *
     * @param string $authorizationId
     * return CreditCardTransactionDetail
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->AuthorizationId = $authorizationId;
        return $this;
    }
    
    /**
     * Set AuthorizationType
     *
     * @param \FedEx\Pickup\SimpleType\CreditCardAuthorizationType|string $authorizationType
     * return CreditCardTransactionDetail
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->AuthorizationType = $authorizationType;
        return $this;
    }
    
    /**
     * Set FraudDetectionDetail
     *
     * @param CreditFraudDetectionDetail $fraudDetectionDetail
     * return CreditCardTransactionDetail
     */
    public function setFraudDetectionDetail(CreditFraudDetectionDetail $fraudDetectionDetail)
    {
        $this->FraudDetectionDetail = $fraudDetectionDetail;
        return $this;
    }
    

    
}