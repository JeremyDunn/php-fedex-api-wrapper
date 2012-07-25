<?php
namespace FedEx\CourierDispatchService\SimpleType;

/**
 * Identifies the valid set of building part types when requesting a package pickup.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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