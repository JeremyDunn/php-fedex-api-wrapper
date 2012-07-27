<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Represents a one-dimensional measurement in small units (e.g. suitable for measuring a package or document), contrasted with Distance, which represents a large one-dimensional measurement (e.g. distance between cities).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class LinearMeasure
    extends AbstractComplexType
{
    protected $_name = 'LinearMeasure';

    /**
     * The numerical quantity of this measurement.
     *
     * @param decimal $Value
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
     * @param LinearUnits $Units
     * return LinearMeasure
     */
    public function setUnits(\FedEx\RateService\SimpleType\LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}