<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the criterion to be used to sort the location details.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationSortCriteriaType extends AbstractSimpleType
{
    const _DISTANCE = 'DISTANCE';
    const _LATEST_EXPRESS_DROPOFF_TIME = 'LATEST_EXPRESS_DROPOFF_TIME';
    const _LATEST_GROUND_DROPOFF_TIME = 'LATEST_GROUND_DROPOFF_TIME';
    const _LOCATION_TYPE = 'LOCATION_TYPE';
}
