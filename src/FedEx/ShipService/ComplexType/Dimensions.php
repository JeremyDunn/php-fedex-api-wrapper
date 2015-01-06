<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The dimensions of this package and the unit type used for the measurements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @return Dimensions
     */
    public function setLength($length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * Returns Set Length
     *
     * @return nonNegativeInteger
     */
    public function getLength()
    {
        return $this->Length;
    }
    
    /**
     * Set Width
     *
     * @param nonNegativeInteger $width
     * @return Dimensions
     */
    public function setWidth($width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * Returns Set Width
     *
     * @return nonNegativeInteger
     */
    public function getWidth()
    {
        return $this->Width;
    }
    
    /**
     * Set Height
     *
     * @param nonNegativeInteger $height
     * @return Dimensions
     */
    public function setHeight($height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * Returns Set Height
     *
     * @return nonNegativeInteger
     */
    public function getHeight()
    {
        return $this->Height;
    }
    
    /**
     * Set Units
     *
     * @param \FedEx\ShipService\SimpleType\LinearUnits|string $units
     * @return Dimensions
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Set Units
     *
     * @return \FedEx\ShipService\SimpleType\LinearUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}