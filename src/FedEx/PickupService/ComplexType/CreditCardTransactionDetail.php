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
     * @return CreditCardTransactionDetail
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->AuthorizationId = $authorizationId;
        return $this;
    }
    
    /**
     * Returns Set AuthorizationId
     *
     * @return string
     */
    public function getAuthorizationId()
    {
        return $this->AuthorizationId;
    }
    
    /**
     * Set AuthorizationType
     *
     * @param \FedEx\Pickup\SimpleType\CreditCardAuthorizationType|string $authorizationType
     * @return CreditCardTransactionDetail
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->AuthorizationType = $authorizationType;
        return $this;
    }
    
    /**
     * Returns Set AuthorizationType
     *
     * @return \FedEx\Pickup\SimpleType\CreditCardAuthorizationType|string
     */
    public function getAuthorizationType()
    {
        return $this->AuthorizationType;
    }
    
    /**
     * Set FraudDetectionDetail
     *
     * @param CreditFraudDetectionDetail $fraudDetectionDetail
     * @return CreditCardTransactionDetail
     */
    public function setFraudDetectionDetail(CreditFraudDetectionDetail $fraudDetectionDetail)
    {
        $this->FraudDetectionDetail = $fraudDetectionDetail;
        return $this;
    }
    
    /**
     * Returns Set FraudDetectionDetail
     *
     * @return CreditFraudDetectionDetail
     */
    public function getFraudDetectionDetail()
    {
        return $this->FraudDetectionDetail;
    }
    

    
}