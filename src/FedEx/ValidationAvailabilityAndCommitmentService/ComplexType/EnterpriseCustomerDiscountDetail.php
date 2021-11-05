<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EnterpriseCustomerDiscountDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property DateOrTimeRange[] $ApplicableDateTimeRanges

 */
class EnterpriseCustomerDiscountDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EnterpriseCustomerDiscountDetail';

    /**
     * This provides the date/time ranges for which discounts apply. Date/time ranges for which discounts do not apply are not returned.
     *
     * @param DateOrTimeRange[] $applicableDateTimeRanges
     * @return $this
     */
    public function setApplicableDateTimeRanges(array $applicableDateTimeRanges)
    {
        $this->values['ApplicableDateTimeRanges'] = $applicableDateTimeRanges;
        return $this;
    }
}
