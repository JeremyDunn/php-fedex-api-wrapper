<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the reason for the overlay of the daily last drop off time for a carrier.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LatestDropOffOverlayType extends AbstractSimpleType
{
    const _US_WEST_COAST = 'US_WEST_COAST';
}
