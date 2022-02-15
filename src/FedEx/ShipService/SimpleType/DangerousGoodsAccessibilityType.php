<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DangerousGoodsAccessibilityType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DangerousGoodsAccessibilityType extends AbstractSimpleType
{
    const _ACCESSIBLE = 'ACCESSIBLE';
    const _INACCESSIBLE = 'INACCESSIBLE';
}
