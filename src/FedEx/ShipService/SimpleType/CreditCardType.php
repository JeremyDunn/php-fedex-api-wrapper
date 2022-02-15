<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CreditCardType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CreditCardType extends AbstractSimpleType
{
    const _AMEX = 'AMEX';
    const _DINERS = 'DINERS';
    const _DISCOVER = 'DISCOVER';
    const _MASTERCARD = 'MASTERCARD';
    const _VISA = 'VISA';
}
