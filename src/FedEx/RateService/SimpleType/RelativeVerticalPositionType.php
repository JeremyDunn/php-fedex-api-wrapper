<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the vertical position of an item relative to another item.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RelativeVerticalPositionType extends AbstractSimpleType
{
    const _ABOVE = 'ABOVE';
    const _BELOW = 'BELOW';
}
