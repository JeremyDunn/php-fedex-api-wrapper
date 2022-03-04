<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Three-dimensional volume/cubic measurement.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\VolumeUnits|string $Units
 * @property float $Value

 */
class Volume extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Volume';

    /**
     * Set Units
     *
     * @param \FedEx\OpenShipService\SimpleType\VolumeUnits|string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }

    /**
     * Set Value
     *
     * @param float $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
