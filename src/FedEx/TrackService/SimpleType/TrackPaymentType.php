<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackPaymentType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackPaymentType extends AbstractSimpleType
{
    const _CASH_OR_CHECK_AT_DESTINATION = 'CASH_OR_CHECK_AT_DESTINATION';
    const _CASH_OR_CHECK_AT_ORIGIN = 'CASH_OR_CHECK_AT_ORIGIN';
    const _CREDIT_CARD_AT_DESTINATION = 'CREDIT_CARD_AT_DESTINATION';
    const _CREDIT_CARD_AT_ORIGIN = 'CREDIT_CARD_AT_ORIGIN';
    const _OTHER = 'OTHER';
    const _RECIPIENT_ACCOUNT = 'RECIPIENT_ACCOUNT';
    const _SHIPPER_ACCOUNT = 'SHIPPER_ACCOUNT';
    const _THIRD_PARTY_ACCOUNT = 'THIRD_PARTY_ACCOUNT';
}
