<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Status of the pickup
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupEventType
    extends AbstractSimpleType
{
    const _ASSIGNED_TO_DRIVER = 'ASSIGNED_TO_DRIVER';
    const _CANCELED = 'CANCELED';
    const _EXCEPTION = 'EXCEPTION';
    const _PICKED_UP = 'PICKED_UP';
    const _SCHEDULED = 'SCHEDULED';
}