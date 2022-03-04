<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the different ways to reroute a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class RerouteDeliveryType extends AbstractSimpleType
{
    const _CROSS_COUNTRY_DEFERRED = 'CROSS_COUNTRY_DEFERRED';
    const _CROSS_COUNTRY_EXPEDITED = 'CROSS_COUNTRY_EXPEDITED';
    const _LOCAL = 'LOCAL';
    const _UNDETERMINED = 'UNDETERMINED';
}
