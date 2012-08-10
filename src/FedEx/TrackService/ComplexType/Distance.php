<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Driving or other transportation distances, distinct from dimension measurements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
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
     * return Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Identifies the unit of measure for the distance value.
     *
     * @param \FedEx\TrackService\SimpleType\DistanceUnits|string $units
     * return Distance
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}