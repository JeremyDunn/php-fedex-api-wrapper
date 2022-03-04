<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomDiscountExclusionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateDiscountType|string[] $ExcludedTypes

 */
class CustomDiscountExclusionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomDiscountExclusionDetail';

    /**
     * Types of discounts that are excluded.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateDiscountType[]|string[] $excludedTypes
     * @return $this
     */
    public function setExcludedTypes(array $excludedTypes)
    {
        $this->values['ExcludedTypes'] = $excludedTypes;
        return $this;
    }
}
