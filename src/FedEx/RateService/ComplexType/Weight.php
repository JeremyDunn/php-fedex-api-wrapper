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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value.
     *
     * @param \FedEx\RateService\SimpleType\WeightUnits|string $units
     * return Weight
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Identifies the weight value of a package/shipment.
     *
     * @param decimal $value
     * return Weight
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}