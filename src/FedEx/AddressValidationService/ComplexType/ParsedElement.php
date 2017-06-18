<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedElement
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property string $Name
 * @property string $Value
 * @property \FedEx\AddressValidationService\SimpleType\AddressValidationChangeType|string[] $Changes

 */
class ParsedElement extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedElement';

    /**
     * Set Name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['Name'] = $name;
        return $this;
    }

    /**
     * Set Value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }

    /**
     * Set Changes
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationChangeType[]|string[] $changes
     * @return $this
     */
    public function setChanges(array $changes)
    {
        $this->values['Changes'] = $changes;
        return $this;
    }
}
