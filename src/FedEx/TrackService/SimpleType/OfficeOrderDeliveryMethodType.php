<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class OfficeOrderDeliveryMethodType
    extends AbstractSimpleType
{
    const _COURIER = 'COURIER';
    const _OTHER = 'OTHER';
    const _PICKUP = 'PICKUP';
    const _SHIPMENT = 'SHIPMENT';
}