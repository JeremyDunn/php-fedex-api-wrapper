<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedElement
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedElement
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedElement';

    /**
     * Set Name
     *
     * @param string $name
     * @return ParsedElement
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Returns Set Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    
    /**
     * Set Value
     *
     * @param string $value
     * @return ParsedElement
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
    
    /**
     * Set Changes
     *
     * @param AddressValidationChangeType[] $changes
     * @return ParsedElement
     */
    public function setChanges(array $changes)
    {
        $this->Changes = $changes;
        return $this;
    }
    
    /**
     * Returns Set Changes
     *
     * @return AddressValidationChangeType[]
     */
    public function getChanges()
    {
        return $this->Changes;
    }
    

    
}