<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationParameter
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
     * Set Id
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
     * Returns Set Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Set Value
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
     * Returns Set Value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}