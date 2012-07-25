<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the collection of linear units of measure for a package dimension.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class LinearUnits
    extends AbstractSimpleType
{
    const _CM = 'CM';
    const _IN = 'IN';
}