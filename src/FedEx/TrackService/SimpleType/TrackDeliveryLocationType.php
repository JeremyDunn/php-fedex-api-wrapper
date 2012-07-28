<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The delivery location at the delivered to address.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackDeliveryLocationType
    extends AbstractSimpleType
{
    const _FEDEX_LOCATION = 'FEDEX_LOCATION';
    const _GUARD_OR_SECURITY_STATION = 'GUARD_OR_SECURITY_STATION';
    const _IN_BOND_OR_CAGE = 'IN_BOND_OR_CAGE';
    const _MAILROOM = 'MAILROOM';
    const _OTHER = 'OTHER';
    const _PHARMACY = 'PHARMACY';
    const _RECEPTIONIST_OR_FRONT_DESK = 'RECEPTIONIST_OR_FRONT_DESK';
    const _RESIDENCE = 'RESIDENCE';
    const _SHIPPING_RECEIVING = 'SHIPPING_RECEIVING';
}