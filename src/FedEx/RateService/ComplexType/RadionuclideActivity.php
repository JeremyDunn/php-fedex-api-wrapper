<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadionuclideActivity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * @return RadionuclideActivity
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
    
    /**
     * Set UnitOfMeasure
     *
     * @param \FedEx\RateService\SimpleType\RadioactivityUnitOfMeasure|string $unitOfMeasure
     * @return RadionuclideActivity
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->UnitOfMeasure = $unitOfMeasure;
        return $this;
    }
    
    /**
     * Returns Set UnitOfMeasure
     *
     * @return \FedEx\RateService\SimpleType\RadioactivityUnitOfMeasure|string
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    

    
}