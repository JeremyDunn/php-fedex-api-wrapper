<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional information about the address processed by the SHARE systems as a key-value pair.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property string $Name
 * @property string $Value

 */
class AddressAttribute extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressAttribute';

    /**
     * Specifies the key for the address attribute.
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
     * The value for the key for the address attribute.
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
