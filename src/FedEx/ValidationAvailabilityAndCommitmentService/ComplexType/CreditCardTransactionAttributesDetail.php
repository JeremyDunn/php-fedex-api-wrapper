<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details about the credit card transaction that drive decisions about credit card processing.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CreditCardTransactionAttributeType|string[] $Types

 */
class CreditCardTransactionAttributesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreditCardTransactionAttributesDetail';

    /**
     * Set Types
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CreditCardTransactionAttributeType[]|string[] $types
     * @return $this
     */
    public function setTypes(array $types)
    {
        $this->values['Types'] = $types;
        return $this;
    }
}
