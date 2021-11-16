<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details for a ground profile.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $GroundShipperNumber
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\GroundProfileAttributeType|string[] $Attributes
 * @property string $NationalAccountNumber

 */
class GroundProfile extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GroundProfile';

    /**
     * Set GroundShipperNumber
     *
     * @param string $groundShipperNumber
     * @return $this
     */
    public function setGroundShipperNumber($groundShipperNumber)
    {
        $this->values['GroundShipperNumber'] = $groundShipperNumber;
        return $this;
    }

    /**
     * Set Attributes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\GroundProfileAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Set NationalAccountNumber
     *
     * @param string $nationalAccountNumber
     * @return $this
     */
    public function setNationalAccountNumber($nationalAccountNumber)
    {
        $this->values['NationalAccountNumber'] = $nationalAccountNumber;
        return $this;
    }
}
