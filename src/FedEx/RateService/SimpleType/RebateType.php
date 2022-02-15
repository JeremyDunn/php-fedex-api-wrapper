<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RebateType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RebateType extends AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _EARNED = 'EARNED';
    const _OTHER = 'OTHER';
}
