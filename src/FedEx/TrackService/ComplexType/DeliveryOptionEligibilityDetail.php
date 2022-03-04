<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Details about the eligibility for a delivery option.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\DeliveryOptionType|string $Option
 * @property \FedEx\TrackService\SimpleType\EligibilityType|string $Eligibility

 */
class DeliveryOptionEligibilityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DeliveryOptionEligibilityDetail';

    /**
     * Type of delivery option.
     *
     * @param \FedEx\TrackService\SimpleType\DeliveryOptionType|string $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->values['Option'] = $option;
        return $this;
    }

    /**
     * Eligibility of the customer for the specific delivery option.
     *
     * @param \FedEx\TrackService\SimpleType\EligibilityType|string $eligibility
     * @return $this
     */
    public function setEligibility($eligibility)
    {
        $this->values['Eligibility'] = $eligibility;
        return $this;
    }
}
