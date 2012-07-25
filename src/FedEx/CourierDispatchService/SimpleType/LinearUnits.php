<?php
namespace FedEx\CourierDispatchService\SimpleType;

/**
 * Identifies the collection of linear units of measure for a package dimension.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class LinearUnits
    extends AbstractSimpleType
{
    const _CM = 'CM';
    const _IN = 'IN';
}