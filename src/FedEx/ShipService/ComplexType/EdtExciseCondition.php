<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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