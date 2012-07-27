<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FlatbedTrailerDetail
    extends AbstractComplexType
{
    protected $_name = 'FlatbedTrailerDetail';

    /**
     * 
     *
     * @param array[FlatbedTrailerOption] $Options
     * return FlatbedTrailerDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}