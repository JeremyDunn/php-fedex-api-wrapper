<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the ways to reschedule the delivery of a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class RescheduleDeliveryType extends AbstractSimpleType
{
    const _APPOINTMENT = 'APPOINTMENT';
    const _DATE_CERTAIN = 'DATE_CERTAIN';
    const _EVENING = 'EVENING';
}
