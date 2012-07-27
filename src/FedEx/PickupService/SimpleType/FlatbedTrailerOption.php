<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FlatbedTrailerOption
    extends AbstractSimpleType
{
    const _OVER_DIMENSION = 'OVER_DIMENSION';
    const _TARP = 'TARP';
}