<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the unit of measure for the distance value.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class DistanceUnits
    extends AbstractSimpleType
{
    const _KM = 'KM';
    const _MI = 'MI';
}