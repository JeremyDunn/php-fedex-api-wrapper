<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Represents a reference identifier printed on Freight bills of lading
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PrintedReference
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PrintedReference';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\PrintedReferenceType|string $type
     * return PrintedReference
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Set Value
     *
     * @param string $value
     * return PrintedReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}