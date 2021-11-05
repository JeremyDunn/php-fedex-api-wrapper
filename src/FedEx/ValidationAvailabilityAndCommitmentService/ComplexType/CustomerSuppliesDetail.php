<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details about the supplies the customer is contracted to receive
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SuppliesTypes|string[] $EligibleSupplies

 */
class CustomerSuppliesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerSuppliesDetail';

    /**
     * Specifies the types of supplies the customer is eligible to receive, per contractual agreement.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SuppliesTypes[]|string[] $eligibleSupplies
     * @return $this
     */
    public function setEligibleSupplies(array $eligibleSupplies)
    {
        $this->values['EligibleSupplies'] = $eligibleSupplies;
        return $this;
    }
}
