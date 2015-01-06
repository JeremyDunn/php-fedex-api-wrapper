<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class Weight
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value. See WeightUnits for the valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\WeightUnits|string $units
     * @return Weight
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Identifies the unit of measure associated with a weight value. See WeightUnits for the valid values.
     *
     * @return \FedEx\CourierDispatchService\SimpleType\WeightUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    
    /**
     * Identifies the weight value of the package.
     *
     * @param decimal $value
     * @return Weight
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Identifies the weight value of the package.
     *
     * @return decimal
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}