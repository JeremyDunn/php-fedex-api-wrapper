<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomDeliveryWindowType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CustomDeliveryWindowType extends AbstractSimpleType
{
    const _AFTER = 'AFTER';
    const _BEFORE = 'BEFORE';
    const _BETWEEN = 'BETWEEN';
    const _ON = 'ON';
}
