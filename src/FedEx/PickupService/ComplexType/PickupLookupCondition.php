<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies a condition to be used as part of a Pickup History Summary lookup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\PickupLookupConditionType|string $ConditionType
 * @property string $Value

 */
class PickupLookupCondition extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupLookupCondition';

    /**
     * Type of value to match.
     *
     * @param \FedEx\PickupService\SimpleType\PickupLookupConditionType|string $conditionType
     * @return $this
     */
    public function setConditionType($conditionType)
    {
        $this->values['ConditionType'] = $conditionType;
        return $this;
    }

    /**
     * Value to be matched.
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
