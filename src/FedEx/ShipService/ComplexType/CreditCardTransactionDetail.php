<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class represents data tied to the use of a credit card in a specific transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $AuthorizationId
 * @property \FedEx\ShipService\SimpleType\CreditCardAuthorizationType|string $AuthorizationType
 * @property CreditFraudDetectionDetail $FraudDetectionDetail
 * @property CreditCardTransactionAttributesDetail $AttributesDetail

 */
class CreditCardTransactionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreditCardTransactionDetail';

    /**
     * Set AuthorizationId
     *
     * @param string $authorizationId
     * @return $this
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->values['AuthorizationId'] = $authorizationId;
        return $this;
    }

    /**
     * Set AuthorizationType
     *
     * @param \FedEx\ShipService\SimpleType\CreditCardAuthorizationType|string $authorizationType
     * @return $this
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->values['AuthorizationType'] = $authorizationType;
        return $this;
    }

    /**
     * Set FraudDetectionDetail
     *
     * @param CreditFraudDetectionDetail $fraudDetectionDetail
     * @return $this
     */
    public function setFraudDetectionDetail(CreditFraudDetectionDetail $fraudDetectionDetail)
    {
        $this->values['FraudDetectionDetail'] = $fraudDetectionDetail;
        return $this;
    }

    /**
     * Specifies details about the credit card transaction that drive decisions about credit card processing.
     *
     * @param CreditCardTransactionAttributesDetail $attributesDetail
     * @return $this
     */
    public function setAttributesDetail(CreditCardTransactionAttributesDetail $attributesDetail)
    {
        $this->values['AttributesDetail'] = $attributesDetail;
        return $this;
    }
}
