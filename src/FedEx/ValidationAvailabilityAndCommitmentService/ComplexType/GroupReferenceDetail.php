<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification of multiplier grouping data per carrier.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerReferenceType|string $Reference

 */
class GroupReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GroupReferenceDetail';

    /**
     * Identifies which carrier is being described.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Specifies which reference field is to be used for multiplier grouping.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerReferenceType|string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->values['Reference'] = $reference;
        return $this;
    }
}
