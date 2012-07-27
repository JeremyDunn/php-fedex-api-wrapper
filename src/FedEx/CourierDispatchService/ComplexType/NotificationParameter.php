<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class NotificationParameter
    extends AbstractComplexType
{
    protected $_name = 'NotificationParameter';

    /**
     * Name identifiying the type of the data in the element 'Value'
     *
     * @param string $Id
     * return NotificationParameter
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * The value that was used as the replacement parameter.
     *
     * @param string $Value
     * return NotificationParameter
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}