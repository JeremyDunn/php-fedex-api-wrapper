<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FlatbedTrailerOption
    extends AbstractSimpleType
{
    const _OVER_DIMENSION = 'OVER_DIMENSION';
    const _TARP = 'TARP';
}