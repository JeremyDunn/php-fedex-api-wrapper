<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class represents data tied to the use of a credit card in a specific transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $AuthorizationId
 * @property \FedEx\InFlightShipmentService\SimpleType\CreditCardAuthorizationType|string $AuthorizationType
 * @property \FedEx\InFlightShipmentService\SimpleType\CreditCardSettlementScheduleType|string $SettlementScheduleType
 * @property CreditFraudDetectionDetail $FraudDetectionDetail
 * @property string $PayorAuthenticationCode
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
     * @param \FedEx\InFlightShipmentService\SimpleType\CreditCardAuthorizationType|string $authorizationType
     * @return $this
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->values['AuthorizationType'] = $authorizationType;
        return $this;
    }

    /**
     * Set SettlementScheduleType
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\CreditCardSettlementScheduleType|string $settlementScheduleType
     * @return $this
     */
    public function setSettlementScheduleType($settlementScheduleType)
    {
        $this->values['SettlementScheduleType'] = $settlementScheduleType;
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
     * Specifies a secure code used for payor authentication in the credit card transaction.
     *
     * @param string $payorAuthenticationCode
     * @return $this
     */
    public function setPayorAuthenticationCode($payorAuthenticationCode)
    {
        $this->values['PayorAuthenticationCode'] = $payorAuthenticationCode;
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
