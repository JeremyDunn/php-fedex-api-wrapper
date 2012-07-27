<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The type of delay this shipment will encounter.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CommitmentDelayType
    extends AbstractSimpleType
{
    const _HOLIDAY = 'HOLIDAY';
    const _NON_WORKDAY = 'NON_WORKDAY';
    const _NO_CITY_DELIVERY = 'NO_CITY_DELIVERY';
    const _NO_HOLD_AT_LOCATION = 'NO_HOLD_AT_LOCATION';
    const _NO_LOCATION_DELIVERY = 'NO_LOCATION_DELIVERY';
    const _NO_SERVICE_AREA_DELIVERY = 'NO_SERVICE_AREA_DELIVERY';
    const _NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY = 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY';
    const _NO_SPECIAL_SERVICE_DELIVERY = 'NO_SPECIAL_SERVICE_DELIVERY';
    const _NO_ZIP_DELIVERY = 'NO_ZIP_DELIVERY';
    const _WEEKEND = 'WEEKEND';
    const _WEEKEND_SPECIAL = 'WEEKEND_SPECIAL';
}