<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the collection of units of measure that can be associated with a weight value.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class WeightUnits
    extends AbstractSimpleType
{
    const _KG = 'KG';
    const _LB = 'LB';
}