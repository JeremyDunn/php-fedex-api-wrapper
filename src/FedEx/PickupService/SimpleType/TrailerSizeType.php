<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrailerSizeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TrailerSizeType extends AbstractSimpleType
{
    const _TRAILER_28_FT = 'TRAILER_28_FT';
    const _TRAILER_48_FT = 'TRAILER_48_FT';
    const _TRAILER_53_FT = 'TRAILER_53_FT';
}
