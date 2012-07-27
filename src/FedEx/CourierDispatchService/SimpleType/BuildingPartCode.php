<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the valid set of building part types when requesting a package pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class BuildingPartCode
    extends AbstractSimpleType
{
    const _APARTMENT = 'APARTMENT';
    const _BUILDING = 'BUILDING';
    const _DEPARTMENT = 'DEPARTMENT';
    const _FLOOR = 'FLOOR';
    const _ROOM = 'ROOM';
    const _SUITE = 'SUITE';
}