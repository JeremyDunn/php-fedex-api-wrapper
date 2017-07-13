<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class represents data tied to the use of a credit card in a specific transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $AuthorizationId
 * @property \FedEx\PickupService\SimpleType\CreditCardAuthorizationType|string $AuthorizationType
 * @property CreditFraudDetectionDetail $FraudDetectionDetail

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
     * @param \FedEx\PickupService\SimpleType\CreditCardAuthorizationType|string $authorizationType
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
}
