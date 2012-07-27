<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the unit of measure for the distance value.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class DistanceUnits
    extends AbstractSimpleType
{
    const _KM = 'KM';
    const _MI = 'MI';
}