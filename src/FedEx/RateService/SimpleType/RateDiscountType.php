<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the type of discount applied to the shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateDiscountType
    extends AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _COUPON = 'COUPON';
    const _EARNED = 'EARNED';
    const _OTHER = 'OTHER';
    const _VOLUME = 'VOLUME';
}