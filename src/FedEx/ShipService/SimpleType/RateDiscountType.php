<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The type of the discount.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RateDiscountType
    extends AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _COUPON = 'COUPON';
    const _EARNED = 'EARNED';
    const _INCENTIVE = 'INCENTIVE';
    const _OTHER = 'OTHER';
    const _VOLUME = 'VOLUME';
}