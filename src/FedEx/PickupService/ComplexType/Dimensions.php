<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data detailing the length, width, and height of a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Dimensions
    extends AbstractComplexType
{
    protected $_name = 'Dimensions';

    /**
     * Identifies the length of the package.
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
     * Identifies the width of the package.
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
     * Identifies the height of the package.
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
     * Identifies the unit of measure associated with a dimensional values. See LinearUnits for valid values.
     *
     * @param LinearUnits $Units
     * return Dimensions
     */
    public function setUnits(\FedEx\Pickup\SimpleType\LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}