<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipmentNotificationAggregationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentNotificationAggregationType extends AbstractSimpleType
{
    const _PER_PACKAGE = 'PER_PACKAGE';
    const _PER_SHIPMENT = 'PER_SHIPMENT';
}
