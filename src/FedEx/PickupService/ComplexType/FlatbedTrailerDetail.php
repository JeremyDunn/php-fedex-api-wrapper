<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\Pickup\SimpleType\FlatbedTrailerOption|string[] $Options

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
     * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
     *
     * @param FlatbedTrailerOption[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    
}
