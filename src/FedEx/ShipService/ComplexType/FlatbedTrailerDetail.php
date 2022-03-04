<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\FlatbedTrailerOption|string[] $Options

 */
class FlatbedTrailerDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FlatbedTrailerDetail';

    /**
     * Set Options
     *
     * @param \FedEx\ShipService\SimpleType\FlatbedTrailerOption[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
