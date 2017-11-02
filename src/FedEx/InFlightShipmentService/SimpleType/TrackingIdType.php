<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingIdType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class TrackingIdType extends AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _FEDEX = 'FEDEX';
    const _FREIGHT = 'FREIGHT';
    const _GROUND = 'GROUND';
    const _INTERNAL = 'INTERNAL';
    const _UNKNOWN = 'UNKNOWN';
    const _USPS = 'USPS';
}
