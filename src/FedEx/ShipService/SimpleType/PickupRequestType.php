<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupRequestType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PickupRequestType extends AbstractSimpleType
{
    const _FUTURE_DAY = 'FUTURE_DAY';
    const _SAME_DAY = 'SAME_DAY';
}
