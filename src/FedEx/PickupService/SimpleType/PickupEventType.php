<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Status of the pickup
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupEventType
    extends AbstractSimpleType
{
    const _ASSIGNED_TO_DRIVER = 'ASSIGNED_TO_DRIVER';
    const _CANCELED = 'CANCELED';
    const _EXCEPTION = 'EXCEPTION';
    const _PICKED_UP = 'PICKED_UP';
    const _SCHEDULED = 'SCHEDULED';
}