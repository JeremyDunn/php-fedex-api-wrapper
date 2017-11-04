<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the service category for the pick up being scheduled.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupServiceCategoryType extends AbstractSimpleType
{
    const _FEDEX_DISTANCE_DEFERRED = 'FEDEX_DISTANCE_DEFERRED';
    const _FEDEX_NEXT_DAY_AFTERNOON = 'FEDEX_NEXT_DAY_AFTERNOON';
    const _FEDEX_NEXT_DAY_EARLY_MORNING = 'FEDEX_NEXT_DAY_EARLY_MORNING';
    const _FEDEX_NEXT_DAY_END_OF_DAY = 'FEDEX_NEXT_DAY_END_OF_DAY';
    const _FEDEX_NEXT_DAY_FREIGHT = 'FEDEX_NEXT_DAY_FREIGHT';
    const _FEDEX_NEXT_DAY_MID_MORNING = 'FEDEX_NEXT_DAY_MID_MORNING';
    const _SAME_DAY = 'SAME_DAY';
    const _SAME_DAY_CITY = 'SAME_DAY_CITY';
}
