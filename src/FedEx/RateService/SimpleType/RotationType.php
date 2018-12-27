<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the rotation of an item from its default orientation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RotationType extends AbstractSimpleType
{
    const _LEFT = 'LEFT';
    const _NONE = 'NONE';
    const _RIGHT = 'RIGHT';
    const _UPSIDE_DOWN = 'UPSIDE_DOWN';
}
