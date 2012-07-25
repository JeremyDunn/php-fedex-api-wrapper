<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Three-dimensional volume/cubic measurement.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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