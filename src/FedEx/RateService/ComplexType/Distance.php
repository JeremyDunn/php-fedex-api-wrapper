<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Driving or other transportation distances, distinct from dimension measurements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Distance
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Distance';

    /**
     * Identifies the distance quantity.
     *
     * @param decimal $value
     * @return Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Identifies the distance quantity.
     *
     * @return decimal
     */
    public function getValue()
    {
        return $this->Value;
    }
    
    /**
     * Identifies the unit of measure for the distance value.
     *
     * @param \FedEx\RateService\SimpleType\DistanceUnits|string $units
     * @return Distance
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Identifies the unit of measure for the distance value.
     *
     * @return \FedEx\RateService\SimpleType\DistanceUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}