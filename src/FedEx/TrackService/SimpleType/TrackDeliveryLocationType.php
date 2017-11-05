<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackDeliveryLocationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackDeliveryLocationType extends AbstractSimpleType
{
    const _APARTMENT_OFFICE = 'APARTMENT_OFFICE';
    const _FEDEX_LOCATION = 'FEDEX_LOCATION';
    const _GATE_HOUSE = 'GATE_HOUSE';
    const _GUARD_OR_SECURITY_STATION = 'GUARD_OR_SECURITY_STATION';
    const _IN_BOND_OR_CAGE = 'IN_BOND_OR_CAGE';
    const _LEASING_OFFICE = 'LEASING_OFFICE';
    const _MAILROOM = 'MAILROOM';
    const _MAIN_OFFICE = 'MAIN_OFFICE';
    const _MANAGER_OFFICE = 'MANAGER_OFFICE';
    const _OTHER = 'OTHER';
    const _PHARMACY = 'PHARMACY';
    const _RECEPTIONIST_OR_FRONT_DESK = 'RECEPTIONIST_OR_FRONT_DESK';
    const _RENTAL_OFFICE = 'RENTAL_OFFICE';
    const _RESIDENCE = 'RESIDENCE';
    const _SHIPPING_RECEIVING = 'SHIPPING_RECEIVING';
}
