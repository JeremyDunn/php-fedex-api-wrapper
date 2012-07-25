<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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
    public function setUnits(\FedEx\PickupService\SimpleType\WeightUnits $units)
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