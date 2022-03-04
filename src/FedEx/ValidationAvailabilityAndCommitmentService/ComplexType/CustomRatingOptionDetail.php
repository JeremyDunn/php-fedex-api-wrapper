<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomRatingOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomRatingOptionType|string[] $Options
 * @property CustomDiscountExclusionDetail $CustomDiscountExclusionDetail

 */
class CustomRatingOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomRatingOptionDetail';

    /**
     * Set Options
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomRatingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Set CustomDiscountExclusionDetail
     *
     * @param CustomDiscountExclusionDetail $customDiscountExclusionDetail
     * @return $this
     */
    public function setCustomDiscountExclusionDetail(CustomDiscountExclusionDetail $customDiscountExclusionDetail)
    {
        $this->values['CustomDiscountExclusionDetail'] = $customDiscountExclusionDetail;
        return $this;
    }
}
