<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies sort order of the location details.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationSortOrderType extends AbstractSimpleType
{
    const _HIGHEST_TO_LOWEST = 'HIGHEST_TO_LOWEST';
    const _LOWEST_TO_HIGHEST = 'LOWEST_TO_HIGHEST';
}
