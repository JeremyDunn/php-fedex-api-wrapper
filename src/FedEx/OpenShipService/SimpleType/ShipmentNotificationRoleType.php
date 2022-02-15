<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipmentNotificationRoleType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ShipmentNotificationRoleType extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _OTHER = 'OTHER';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}
