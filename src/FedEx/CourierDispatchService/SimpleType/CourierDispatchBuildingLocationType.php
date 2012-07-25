<?php
namespace FedEx\CourierDispatchService\SimpleType;

/**
 * Identifies the valid set of valid building locations for package pickup.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchBuildingLocationType
    extends AbstractSimpleType
{
    const _FRONT = 'FRONT';
    const _NONE = 'NONE';
    const _REAR = 'REAR';
    const _SIDE = 'SIDE';
}