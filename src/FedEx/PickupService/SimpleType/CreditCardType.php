<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CreditCardType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreditCardType
    extends AbstractSimpleType
{
    const _AMEX = 'AMEX';
    const _DINERS = 'DINERS';
    const _DISCOVER = 'DISCOVER';
    const _MASTERCARD = 'MASTERCARD';
    const _VISA = 'VISA';
}