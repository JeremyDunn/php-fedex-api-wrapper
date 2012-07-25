<?php
namespace FedEx\CourierDispatchService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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