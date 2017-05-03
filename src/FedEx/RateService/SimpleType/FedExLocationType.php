<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies a kind of FedEx facility.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FedExLocationType extends AbstractSimpleType
{
    const _FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    const _FEDEX_FACILITY = 'FEDEX_FACILITY';
    const _FEDEX_FREIGHT_SERVICE_CENTER = 'FEDEX_FREIGHT_SERVICE_CENTER';
    const _FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
    const _FEDEX_HOME_DELIVERY_STATION = 'FEDEX_HOME_DELIVERY_STATION';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
    const _FEDEX_SHIPSITE = 'FEDEX_SHIPSITE';
    const _FEDEX_SMART_POST_HUB = 'FEDEX_SMART_POST_HUB';
}
