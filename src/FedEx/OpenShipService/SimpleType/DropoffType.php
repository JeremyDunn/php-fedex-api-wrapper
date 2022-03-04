<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DropoffType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class DropoffType extends AbstractSimpleType
{
    const _BUSINESS_SERVICE_CENTER = 'BUSINESS_SERVICE_CENTER';
    const _DROP_BOX = 'DROP_BOX';
    const _REGULAR_PICKUP = 'REGULAR_PICKUP';
    const _REQUEST_COURIER = 'REQUEST_COURIER';
    const _STATION = 'STATION';
}
