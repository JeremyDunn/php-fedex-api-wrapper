<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AsynchronousProcessingOptionsRequested
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\AsynchronousProcessingOptionType|string[] $Options

 */
class AsynchronousProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AsynchronousProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\OpenShipService\SimpleType\AsynchronousProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
