<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for distance.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
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
     * Identifies the value of distance from the point indicated by the search location (e.g. "12.5").
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
     * Identifies the unit of distance from the point indicated by the search location (e.g. "MI"). See DistanceUnits for list of returned values.
     *
     * @param \FedEx\LocatorService\SimpleType\DistanceUnits|string $units
     * return Distance
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}