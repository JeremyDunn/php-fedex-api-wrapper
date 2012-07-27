<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the collection of special service offered by FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentSpecialServiceType
    extends AbstractSimpleType
{
    const _BROKER_SELECT_OPTION = 'BROKER_SELECT_OPTION';
    const _CALL_BEFORE_DELIVERY = 'CALL_BEFORE_DELIVERY';
    const _COD = 'COD';
    const _CUSTOM_DELIVERY_WINDOW = 'CUSTOM_DELIVERY_WINDOW';
    const _DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    const _DO_NOT_BREAK_DOWN_PALLETS = 'DO_NOT_BREAK_DOWN_PALLETS';
    const _DO_NOT_STACK_PALLETS = 'DO_NOT_STACK_PALLETS';
    const _DRY_ICE = 'DRY_ICE';
    const _EAST_COAST_SPECIAL = 'EAST_COAST_SPECIAL';
    const _ELECTRONIC_TRADE_DOCUMENTS = 'ELECTRONIC_TRADE_DOCUMENTS';
    const _EMAIL_NOTIFICATION = 'EMAIL_NOTIFICATION';
    const _EXTREME_LENGTH = 'EXTREME_LENGTH';
    const _FOOD = 'FOOD';
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    const _HOLD_AT_LOCATION = 'HOLD_AT_LOCATION';
    const _HOME_DELIVERY_PREMIUM = 'HOME_DELIVERY_PREMIUM';
    const _INSIDE_DELIVERY = 'INSIDE_DELIVERY';
    const _INSIDE_PICKUP = 'INSIDE_PICKUP';
    const _LIFTGATE_DELIVERY = 'LIFTGATE_DELIVERY';
    const _LIFTGATE_PICKUP = 'LIFTGATE_PICKUP';
    const _LIMITED_ACCESS_DELIVERY = 'LIMITED_ACCESS_DELIVERY';
    const _LIMITED_ACCESS_PICKUP = 'LIMITED_ACCESS_PICKUP';
    const _PENDING_SHIPMENT = 'PENDING_SHIPMENT';
    const _POISON = 'POISON';
    const _PROTECTION_FROM_FREEZING = 'PROTECTION_FROM_FREEZING';
    const _RETURN_SHIPMENT = 'RETURN_SHIPMENT';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
    const _TOP_LOAD = 'TOP_LOAD';
}