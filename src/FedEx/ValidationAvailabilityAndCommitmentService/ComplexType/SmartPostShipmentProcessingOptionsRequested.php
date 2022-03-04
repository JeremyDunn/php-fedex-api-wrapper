<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmartPostShipmentProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostShipmentProcessingOptionType|string[] $Options

 */
class SmartPostShipmentProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SmartPostShipmentProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostShipmentProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
