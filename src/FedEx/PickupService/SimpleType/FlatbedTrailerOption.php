<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FlatbedTrailerOption
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FlatbedTrailerOption extends AbstractSimpleType
{
    const _OVER_DIMENSION = 'OVER_DIMENSION';
    const _TARP = 'TARP';
}
