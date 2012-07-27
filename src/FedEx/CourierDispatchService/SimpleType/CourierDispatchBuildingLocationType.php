<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the valid set of valid building locations for package pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchBuildingLocationType
    extends AbstractSimpleType
{
    const _FRONT = 'FRONT';
    const _NONE = 'NONE';
    const _REAR = 'REAR';
    const _SIDE = 'SIDE';
}