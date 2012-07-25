<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the type of pickup request service.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PickupRequestType
    extends AbstractSimpleType
{
    const _FUTURE_DAY = 'FUTURE_DAY';
    const _SAME_DAY = 'SAME_DAY';
}