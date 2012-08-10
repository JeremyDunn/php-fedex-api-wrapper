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
     * return Dimensions
     */
    public function setLength( $length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * Identifies the width of the package.
     *
     * @param  $width
     * return Dimensions
     */
    public function setWidth( $width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * Identifies the height of the package.
     *
     * @param  $height
     * return Dimensions
     */
    public function setHeight( $height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * Identifies the unit of measure associated with a dimensional values. See LinearUnits for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\LinearUnits|string $units
     * return Dimensions
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}