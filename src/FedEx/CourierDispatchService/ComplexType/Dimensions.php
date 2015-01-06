<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data detailing the length, width, and height of a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
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
     * Identifies the length of the package.
     *
     * @param  $length
     * @return Dimensions
     */
    public function setLength( $length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * Returns Identifies the length of the package.
     *
     * @return 
     */
    public function getLength()
    {
        return $this->Length;
    }
    
    /**
     * Identifies the width of the package.
     *
     * @param  $width
     * @return Dimensions
     */
    public function setWidth( $width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * Returns Identifies the width of the package.
     *
     * @return 
     */
    public function getWidth()
    {
        return $this->Width;
    }
    
    /**
     * Identifies the height of the package.
     *
     * @param  $height
     * @return Dimensions
     */
    public function setHeight( $height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * Returns Identifies the height of the package.
     *
     * @return 
     */
    public function getHeight()
    {
        return $this->Height;
    }
    
    /**
     * Identifies the unit of measure associated with a dimensional values. See LinearUnits for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\LinearUnits|string $units
     * @return Dimensions
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Identifies the unit of measure associated with a dimensional values. See LinearUnits for valid values.
     *
     * @return \FedEx\CourierDispatchService\SimpleType\LinearUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}