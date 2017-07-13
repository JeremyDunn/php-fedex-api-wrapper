<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for distance.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 *
 * @property float $Value
 * @property \FedEx\LocatorService\SimpleType\DistanceUnits|string $Units

 */
class Distance extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Distance';

    /**
     * Identifies the value of distance from the point indicated by the search location (e.g. "12.5").
     *
     * @param float $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }

    /**
     * Identifies the unit of distance from the point indicated by the search location (e.g. "MI"). See DistanceUnits for list of returned values.
     *
     * @param \FedEx\LocatorService\SimpleType\DistanceUnits|string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }
}
