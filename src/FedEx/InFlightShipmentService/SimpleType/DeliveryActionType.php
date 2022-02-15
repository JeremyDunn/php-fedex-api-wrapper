<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the actions that can be taken on a delivery option.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class DeliveryActionType extends AbstractSimpleType
{
    const _ADD = 'ADD';
}
