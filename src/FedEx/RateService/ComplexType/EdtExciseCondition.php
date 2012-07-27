<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EdtExciseCondition
    extends AbstractComplexType
{
    protected $_name = 'EdtExciseCondition';

    /**
     * 
     *
     * @param string $Category
     * return EdtExciseCondition
     */
    public function setCategory($category)
    {
        $this->Category = $category;
        return $this;
    }
    
    /**
     * Customer-declared value, with data type and legal values depending on excise condition, used in defining the taxable value of the item.
     *
     * @param string $Value
     * return EdtExciseCondition
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}