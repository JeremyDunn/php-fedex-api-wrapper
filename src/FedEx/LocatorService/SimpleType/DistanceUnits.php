<?php
namespace FedEx\LocatorService\SimpleType;

/**
 * Identifies the set of distance units for a Distance.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class DistanceUnits
    extends AbstractSimpleType
{
    const _KM = 'KM';
    const _MI = 'MI';
}