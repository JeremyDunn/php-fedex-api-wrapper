<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This definition of variable handling charge detail is intended for use in Jan 2011 corp load.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property Money $FixedValue
 * @property float $PercentValue
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateElementBasisType|string $RateElementBasis
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateTypeBasisType|string $RateTypeBasis
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateLevelBasisType|string $RateLevelBasis

 */
class VariableHandlingChargeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'VariableHandlingChargeDetail';

    /**
     * Set FixedValue
     *
     * @param Money $fixedValue
     * @return $this
     */
    public function setFixedValue(Money $fixedValue)
    {
        $this->values['FixedValue'] = $fixedValue;
        return $this;
    }

    /**
     * Actual percentage (10 means 10%, which is a mutiplier of 0.1)
     *
     * @param float $percentValue
     * @return $this
     */
    public function setPercentValue($percentValue)
    {
        $this->values['PercentValue'] = $percentValue;
        return $this;
    }

    /**
     * Select the value from a set of rate data to which the percentage is applied.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateElementBasisType|string $rateElementBasis
     * @return $this
     */
    public function setRateElementBasis($rateElementBasis)
    {
        $this->values['RateElementBasis'] = $rateElementBasis;
        return $this;
    }

    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * @return $this
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->values['RateTypeBasis'] = $rateTypeBasis;
        return $this;
    }

    /**
     * Select the type of rate used to calculate the percentage value of variable handling.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateLevelBasisType|string $rateLevelBasis
     * @return $this
     */
    public function setRateLevelBasis($rateLevelBasis)
    {
        $this->values['RateLevelBasis'] = $rateLevelBasis;
        return $this;
    }
}
