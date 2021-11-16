<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EPaymentModeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
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
