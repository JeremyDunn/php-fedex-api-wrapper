<?php
namespace FedEx\RateService\ComplexType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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