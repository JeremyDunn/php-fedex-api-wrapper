<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomDeliveryWindowType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomDeliveryWindowType extends AbstractSimpleType
{
    const _AFTER = 'AFTER';
    const _BEFORE = 'BEFORE';
    const _BETWEEN = 'BETWEEN';
    const _ON = 'ON';
}
