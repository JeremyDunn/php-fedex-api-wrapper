<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the different option types for delivery.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class DeliveryOptionType extends AbstractSimpleType
{
    const _REDIRECT_TO_HOLD_AT_LOCATION = 'REDIRECT_TO_HOLD_AT_LOCATION';
}
