<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies where a tracking event occurs.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ArrivalLocationType
    extends AbstractSimpleType
{
    const _AIRPORT = 'AIRPORT';
    const _CUSTOMER = 'CUSTOMER';
    const _CUSTOMS_BROKER = 'CUSTOMS_BROKER';
    const _DELIVERY_LOCATION = 'DELIVERY_LOCATION';
    const _DESTINATION_AIRPORT = 'DESTINATION_AIRPORT';
    const _DESTINATION_FEDEX_FACILITY = 'DESTINATION_FEDEX_FACILITY';
    const _DROP_BOX = 'DROP_BOX';
    const _ENROUTE = 'ENROUTE';
    const _FEDEX_FACILITY = 'FEDEX_FACILITY';
    const _FEDEX_OFFICE_LOCATION = 'FEDEX_OFFICE_LOCATION';
    const _INTERLINE_CARRIER = 'INTERLINE_CARRIER';
    const _NON_FEDEX_FACILITY = 'NON_FEDEX_FACILITY';
    const _ORIGIN_AIRPORT = 'ORIGIN_AIRPORT';
    const _ORIGIN_FEDEX_FACILITY = 'ORIGIN_FEDEX_FACILITY';
    const _PICKUP_LOCATION = 'PICKUP_LOCATION';
    const _PLANE = 'PLANE';
    const _PORT_OF_ENTRY = 'PORT_OF_ENTRY';
    const _SORT_FACILITY = 'SORT_FACILITY';
    const _TURNPOINT = 'TURNPOINT';
    const _VEHICLE = 'VEHICLE';
}