<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupStatusType extends AbstractSimpleType
{
    const _CANCELLED = 'CANCELLED';
    const _COMPLETED = 'COMPLETED';
    const _OPEN = 'OPEN';
}
