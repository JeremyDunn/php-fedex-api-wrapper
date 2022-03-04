<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GetAllServicesAndPackagingProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\GetAllServicesAndPackagingProcessingOptionType|string[] $Options

 */
class GetAllServicesAndPackagingProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GetAllServicesAndPackagingProcessingOptionsRequested';

    /**
     * FOR FEDEX INTERNAL USE ONLY: Processing options controlling availability and validation rules.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\GetAllServicesAndPackagingProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
