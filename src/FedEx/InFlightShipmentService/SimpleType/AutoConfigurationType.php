<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AutoConfigurationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class AutoConfigurationType extends AbstractSimpleType
{
    const _ENTERPRISE = 'ENTERPRISE';
    const _SHIPPING_SERVICE_PROVIDER = 'SHIPPING_SERVICE_PROVIDER';
    const _SOFTWARE_ONLY = 'SOFTWARE_ONLY';
    const _TRADITIONAL = 'TRADITIONAL';
}
