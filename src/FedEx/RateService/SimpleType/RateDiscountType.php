<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateDiscountType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RateDiscountType extends AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _COUPON = 'COUPON';
    const _EARNED = 'EARNED';
    const _OTHER = 'OTHER';
    const _VOLUME = 'VOLUME';
}
