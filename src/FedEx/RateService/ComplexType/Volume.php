<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Three-dimensional volume/cubic measurement.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Volume
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Volume';

    /**
     * Set Units
     *
     * @param \FedEx\RateService\SimpleType\VolumeUnits|string $units
     * @return Volume
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Set Units
     *
     * @return \FedEx\RateService\SimpleType\VolumeUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    
    /**
     * Set Value
     *
     * @param decimal $value
     * @return Volume
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Set Value
     *
     * @return decimal
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}