<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationEventType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class NotificationEventType extends AbstractSimpleType
{
    const _ON_DELIVERY = 'ON_DELIVERY';
    const _ON_ESTIMATED_DELIVERY = 'ON_ESTIMATED_DELIVERY';
    const _ON_EXCEPTION = 'ON_EXCEPTION';
    const _ON_PICKUP_DRIVER_ARRIVED = 'ON_PICKUP_DRIVER_ARRIVED';
    const _ON_PICKUP_DRIVER_ASSIGNED = 'ON_PICKUP_DRIVER_ASSIGNED';
    const _ON_PICKUP_DRIVER_DEPARTED = 'ON_PICKUP_DRIVER_DEPARTED';
    const _ON_PICKUP_DRIVER_EN_ROUTE = 'ON_PICKUP_DRIVER_EN_ROUTE';
    const _ON_SHIPMENT = 'ON_SHIPMENT';
    const _ON_TENDER = 'ON_TENDER';
}
