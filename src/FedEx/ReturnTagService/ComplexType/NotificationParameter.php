<?php
namespace FedEx\ReturnTagService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationParameter
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class NotificationParameter
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NotificationParameter';

    /**
     * Name identifiying the type of the data in the element 'Value'
     *
     * @param string $id
     * @return NotificationParameter
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Name identifiying the type of the data in the element 'Value'
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * The value that was used as the replacement parameter.
     *
     * @param string $value
     * @return NotificationParameter
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns The value that was used as the replacement parameter.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}