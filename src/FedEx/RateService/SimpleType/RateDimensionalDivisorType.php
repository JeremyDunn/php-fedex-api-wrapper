<?php
namespace FedEx\RateService\SimpleType;

/**
 * Indicates the reason that a dim divisor value was chose.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateDimensionalDivisorType
    extends AbstractSimpleType
{
    const _COUNTRY = 'COUNTRY';
    const _CUSTOMER = 'CUSTOMER';
    const _OTHER = 'OTHER';
    const _PRODUCT = 'PRODUCT';
    const _WAIVED = 'WAIVED';
}