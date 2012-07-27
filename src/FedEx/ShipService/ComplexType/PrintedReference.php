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
    protected $_name = 'PrintedReference';

    /**
     * 
     *
     * @param PrintedReferenceType $Type
     * return PrintedReference
     */
    public function setType(\FedEx\ShipService\SimpleType\PrintedReferenceType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return PrintedReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}