<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerImageUsage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerImageUsageType|string $Type
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ImageId|string $Id
 * @property string $InternalId
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\InternalImageType|string $InternalImageType

 */
class CustomerImageUsage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerImageUsage';

    /**
     * Set Type
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerImageUsageType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Id
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ImageId|string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Internal Id used by INET to identify customer provided images during documents generation. Ex COO etc ...
     *
     * @param string $internalId
     * @return $this
     */
    public function setInternalId($internalId)
    {
        $this->values['InternalId'] = $internalId;
        return $this;
    }

    /**
     * Internal image type used by INET to identify customer provided images during documents generation. Ex COO etc ..
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\InternalImageType|string $internalImageType
     * @return $this
     */
    public function setInternalImageType($internalImageType)
    {
        $this->values['InternalImageType'] = $internalImageType;
        return $this;
    }
}
