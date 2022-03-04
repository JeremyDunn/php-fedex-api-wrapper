<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmartPostShipmentProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\SmartPostShipmentProcessingOptionType|string[] $Options

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
     * @param \FedEx\OpenShipService\SimpleType\SmartPostShipmentProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
