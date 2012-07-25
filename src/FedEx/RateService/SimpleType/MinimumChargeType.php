<?php
namespace FedEx\RateService\SimpleType;

/**
 * Internal FedEx use only.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class MinimumChargeType
    extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _CUSTOMER_FREIGHT_WEIGHT = 'CUSTOMER_FREIGHT_WEIGHT';
    const _EARNED_DISCOUNT = 'EARNED_DISCOUNT';
    const _MIXED = 'MIXED';
    const _RATE_SCALE = 'RATE_SCALE';
}