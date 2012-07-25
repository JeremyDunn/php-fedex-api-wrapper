<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FlatbedTrailerDetail
    extends AbstractComplexType
{
    protected $_name = 'FlatbedTrailerDetail';

    /**
     * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
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