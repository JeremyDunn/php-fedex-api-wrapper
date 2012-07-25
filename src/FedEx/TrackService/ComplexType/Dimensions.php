<?php
namespace FedEx\TrackService\ComplexType;

/**
 * The dimensions of this package and the unit type used for the measurements.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class Dimensions
    extends AbstractComplexType
{
    protected $_name = 'Dimensions';

    /**
     * 
     *
     * @param nonNegativeInteger $Length
     * return Dimensions
     */
    public function setLength($length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $Width
     * return Dimensions
     */
    public function setWidth($width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $Height
     * return Dimensions
     */
    public function setHeight($height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * 
     *
     * @param LinearUnits $Units
     * return Dimensions
     */
    public function setUnits(\FedEx\TrackService\SimpleType\LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}