<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the packing arrangement of a battery or cell with respect to other items within the same package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class BatteryPackingType extends AbstractSimpleType
{
    const _CONTAINED_IN_EQUIPMENT = 'CONTAINED_IN_EQUIPMENT';
    const _PACKED_WITH_EQUIPMENT = 'PACKED_WITH_EQUIPMENT';
}
