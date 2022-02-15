<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the collection of units of measure that can be associated with a weight value.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class WeightUnits extends AbstractSimpleType
{
    const _KG = 'KG';
    const _LB = 'LB';
}
