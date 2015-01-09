<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationParameter
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, etc..).
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
     * Returns Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, etc..).
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..).
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
     * Returns The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..).
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}