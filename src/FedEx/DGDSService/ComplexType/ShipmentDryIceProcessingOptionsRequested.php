<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentDryIceProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\ShipmentDryIceProcessingOptionType|string[] $Options

 */
class ShipmentDryIceProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentDryIceProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\DGDSService\SimpleType\ShipmentDryIceProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
