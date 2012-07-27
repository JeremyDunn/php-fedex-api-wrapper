<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the reason that a dim divisor value was chose.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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