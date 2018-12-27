<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LocationContentOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationContentOptionType extends AbstractSimpleType
{
    const _HOLIDAYS = 'HOLIDAYS';
    const _LOCATION_DROPOFF_TIMES = 'LOCATION_DROPOFF_TIMES';
    const _MAP_URL = 'MAP_URL';
    const _TIMEZONE_OFFSET = 'TIMEZONE_OFFSET';
}
