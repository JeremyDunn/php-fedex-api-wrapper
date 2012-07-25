<?php
namespace FedEx\PickupService\ComplexType;

/**
 * This class represents data tied to the use of a credit card in a specific transaction.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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
    public function setAuthorizationType(\FedEx\PickupService\SimpleType\CreditCardAuthorizationType $authorizationType)
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