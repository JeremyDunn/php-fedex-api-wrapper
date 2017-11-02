<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The description that FedEx uses for a given appointment window.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class AppointmentWindowType extends AbstractSimpleType
{
    const _AFTERNOON = 'AFTERNOON';
    const _LATE_AFTERNOON = 'LATE_AFTERNOON';
    const _MID_DAY = 'MID_DAY';
    const _MORNING = 'MORNING';
}
