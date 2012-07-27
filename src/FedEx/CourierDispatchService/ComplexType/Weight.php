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
    protected $_name = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value. See WeightUnits for the valid values.
     *
     * @param WeightUnits $Units
     * return Weight
     */
    public function setUnits(\FedEx\CourierDispatchService\SimpleType\WeightUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Identifies the weight value of the package.
     *
     * @param decimal $Value
     * return Weight
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}