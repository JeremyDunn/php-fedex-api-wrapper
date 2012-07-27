<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedElement
    extends AbstractComplexType
{
    protected $_name = 'ParsedElement';

    /**
     * 
     *
     * @param string $Name
     * return ParsedElement
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return ParsedElement
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressValidationChangeType] $Changes
     * return ParsedElement
     */
    public function setChanges(array $changes)
    {
        $this->Changes = $changes;
        return $this;
    }
    

    
}