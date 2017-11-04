<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TruckType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TruckType extends AbstractSimpleType
{
    const _DROP_TRAILER_AGREEMENT = 'DROP_TRAILER_AGREEMENT';
    const _LIFTGATE = 'LIFTGATE';
    const _TRACTOR_TRAILER_ACCESS = 'TRACTOR_TRAILER_ACCESS';
}
