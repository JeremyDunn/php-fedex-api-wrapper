<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SurchargeLevelType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class SurchargeLevelType extends AbstractSimpleType
{
    const _PACKAGE = 'PACKAGE';
    const _SHIPMENT = 'SHIPMENT';
}
