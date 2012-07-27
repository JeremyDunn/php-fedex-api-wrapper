<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Three-dimensional volume/cubic measurement.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Volume
    extends AbstractComplexType
{
    protected $_name = 'Volume';

    /**
     * 
     *
     * @param VolumeUnits $Units
     * return Volume
     */
    public function setUnits(\FedEx\ShipService\SimpleType\VolumeUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * 
     *
     * @param decimal $Value
     * return Volume
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}