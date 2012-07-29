<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtExciseCondition
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EdtExciseCondition
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EdtExciseCondition';

    /**
     * Set Category
     *
     * @param string $category
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
     * @param string $value
     * return EdtExciseCondition
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}