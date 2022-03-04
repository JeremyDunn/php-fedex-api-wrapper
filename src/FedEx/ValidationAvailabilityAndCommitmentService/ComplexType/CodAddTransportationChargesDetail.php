<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CodAddTransportationChargesDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateTypeBasisType|string $RateTypeBasis
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CodAddTransportationChargeBasisType|string $ChargeBasis
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ChargeBasisLevelType|string $ChargeBasisLevel
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\RateLevelBasisType|string $RateLevelBasis

 */
class CodAddTransportationChargesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CodAddTransportationChargesDetail';

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
     * Set ChargeBasis
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CodAddTransportationChargeBasisType|string $chargeBasis
     * @return $this
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->values['ChargeBasis'] = $chargeBasis;
        return $this;
    }

    /**
     * Set ChargeBasisLevel
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ChargeBasisLevelType|string $chargeBasisLevel
     * @return $this
     */
    public function setChargeBasisLevel($chargeBasisLevel)
    {
        $this->values['ChargeBasisLevel'] = $chargeBasisLevel;
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
