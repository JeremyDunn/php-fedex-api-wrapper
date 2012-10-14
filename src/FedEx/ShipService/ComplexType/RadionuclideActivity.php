<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadionuclideActivity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RadionuclideActivity
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RadionuclideActivity';

    /**
     * Set Value
     *
     * @param decimal $value
     * return RadionuclideActivity
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Set UnitOfMeasure
     *
     * @param \FedEx\ShipService\SimpleType\RadioactivityUnitOfMeasure|string $unitOfMeasure
     * return RadionuclideActivity
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->UnitOfMeasure = $unitOfMeasure;
        return $this;
    }
    

    
}