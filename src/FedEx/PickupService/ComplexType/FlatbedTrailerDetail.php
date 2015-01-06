<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FlatbedTrailerDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FlatbedTrailerDetail';

    /**
     * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
     *
     * @param FlatbedTrailerOption[] $options
     * @return FlatbedTrailerDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
     *
     * @return FlatbedTrailerOption[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}