<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data detailing the length, width, and height of a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property  $Length
 * @property  $Width
 * @property  $Height
 * @property \FedEx\CourierDispatchService\SimpleType\LinearUnits|string $Units

 */
class Dimensions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Dimensions';

    /**
     * Identifies the length of the package.
     *
     * @param  $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->values['Length'] = $length;
        return $this;
    }

    /**
     * Identifies the width of the package.
     *
     * @param  $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->values['Width'] = $width;
        return $this;
    }

    /**
     * Identifies the height of the package.
     *
     * @param  $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->values['Height'] = $height;
        return $this;
    }

    /**
     * Identifies the unit of measure associated with a dimensional values. See LinearUnits for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\LinearUnits|string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }
}
