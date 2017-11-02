<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the environment (level) for which an AuthenticationCredential is valid, and within which transactions are received.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class WebServiceEnvironment extends AbstractSimpleType
{
    const _PRODUCTION = 'PRODUCTION';
    const _TEST = 'TEST';
}
