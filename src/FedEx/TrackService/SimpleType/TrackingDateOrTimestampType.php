<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingDateOrTimestampType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackingDateOrTimestampType extends AbstractSimpleType
{
    const _ACTUAL_DELIVERY = 'ACTUAL_DELIVERY';
    const _ACTUAL_PICKUP = 'ACTUAL_PICKUP';
    const _ACTUAL_TENDER = 'ACTUAL_TENDER';
    const _ANTICIPATED_TENDER = 'ANTICIPATED_TENDER';
    const _APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    const _ESTIMATED_DELIVERY = 'ESTIMATED_DELIVERY';
    const _ESTIMATED_PICKUP = 'ESTIMATED_PICKUP';
    const _ESTIMATED_RETURN_TO_STATION = 'ESTIMATED_RETURN_TO_STATION';
    const _SHIP = 'SHIP';
}
