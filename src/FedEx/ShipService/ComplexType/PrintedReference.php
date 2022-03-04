<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Represents a reference identifier printed on Freight bills of lading
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\PrintedReferenceType|string $Type
 * @property string $Value

 */
class PrintedReference extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PrintedReference';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\PrintedReferenceType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
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
}
