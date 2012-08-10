<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Represents a one-dimensional measurement in small units (e.g. suitable for measuring a package or document), contrasted with Distance, which represents a large one-dimensional measurement (e.g. distance between cities).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class LinearMeasure
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LinearMeasure';

    /**
     * The numerical quantity of this measurement.
     *
     * @param decimal $value
     * return LinearMeasure
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * The units for this measurement.
     *
     * @param \FedEx\CloseService\SimpleType\LinearUnits|string $units
     * return LinearMeasure
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}