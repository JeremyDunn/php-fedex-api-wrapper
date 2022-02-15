<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DangerousGoodsAccessibilityType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DangerousGoodsAccessibilityType extends AbstractSimpleType
{
    const _ACCESSIBLE = 'ACCESSIBLE';
    const _INACCESSIBLE = 'INACCESSIBLE';
}
