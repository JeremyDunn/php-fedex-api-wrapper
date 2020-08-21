<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the condition of a package when it was received at a FedEx location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PackagePackedByType|string $PackedBy
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DamageStatusType|string $DamageKnown
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\InspectionStatusType|string $InspectionStatus

 */
class PackageSpecialHandlingDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageSpecialHandlingDetail';

    /**
     * Indicates the party who packed the package.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PackagePackedByType|string $packedBy
     * @return $this
     */
    public function setPackedBy($packedBy)
    {
        $this->values['PackedBy'] = $packedBy;
        return $this;
    }

    /**
     * Specifies whether any damange to the contents of the package was known.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DamageStatusType|string $damageKnown
     * @return $this
     */
    public function setDamageKnown($damageKnown)
    {
        $this->values['DamageKnown'] = $damageKnown;
        return $this;
    }

    /**
     * Specifies whether the package contents were inspected by the agent.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\InspectionStatusType|string $inspectionStatus
     * @return $this
     */
    public function setInspectionStatus($inspectionStatus)
    {
        $this->values['InspectionStatus'] = $inspectionStatus;
        return $this;
    }
}
