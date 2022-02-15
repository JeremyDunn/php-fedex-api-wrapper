<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EPaymentModeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EPaymentModeType extends AbstractSimpleType
{
    const _APPLE_PAY = 'APPLE_PAY';
    const _CASH = 'CASH';
    const _CHECK = 'CHECK';
    const _CREDIT_CARD = 'CREDIT_CARD';
    const _GOOGLE_PAY = 'GOOGLE_PAY';
    const _PAYPAL = 'PAYPAL';
}
