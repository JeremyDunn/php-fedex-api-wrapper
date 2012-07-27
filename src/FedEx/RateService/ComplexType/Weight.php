<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Weight
    extends AbstractComplexType
{
    protected $_name = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value.
     *
     * @param WeightUnits $Units
     * return Weight
     */
    public function setUnits(\FedEx\RateService\SimpleType\WeightUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Identifies the weight value of a package/shipment.
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