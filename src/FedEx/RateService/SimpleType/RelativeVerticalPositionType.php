<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the vertical position of an item relative to another item.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RelativeVerticalPositionType extends AbstractSimpleType
{
    const _ABOVE = 'ABOVE';
    const _BELOW = 'BELOW';
}
