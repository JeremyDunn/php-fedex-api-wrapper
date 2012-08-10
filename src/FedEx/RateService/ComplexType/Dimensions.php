<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The dimensions of this package and the unit type used for the measurements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Dimensions
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Dimensions';

    /**
     * Set Length
     *
     * @param nonNegativeInteger $length
     * return Dimensions
     */
    public function setLength($length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * Set Width
     *
     * @param nonNegativeInteger $width
     * return Dimensions
     */
    public function setWidth($width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * Set Height
     *
     * @param nonNegativeInteger $height
     * return Dimensions
     */
    public function setHeight($height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * Set Units
     *
     * @param \FedEx\RateService\SimpleType\LinearUnits|string $units
     * return Dimensions
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}