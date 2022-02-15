<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PaymentType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PaymentType extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _CASH = 'CASH';
    const _COLLECT = 'COLLECT';
    const _CREDIT_CARD = 'CREDIT_CARD';
    const _EPAYMENT = 'EPAYMENT';
    const _RECIPIENT = 'RECIPIENT';
    const _SENDER = 'SENDER';
    const _THIRD_PARTY = 'THIRD_PARTY';
}
