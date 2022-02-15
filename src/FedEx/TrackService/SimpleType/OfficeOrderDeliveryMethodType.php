<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OfficeOrderDeliveryMethodType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class OfficeOrderDeliveryMethodType extends AbstractSimpleType
{
    const _COURIER = 'COURIER';
    const _OTHER = 'OTHER';
    const _PICKUP = 'PICKUP';
    const _SHIPMENT = 'SHIPMENT';
}
