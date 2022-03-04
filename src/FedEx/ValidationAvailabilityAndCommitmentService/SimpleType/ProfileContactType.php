<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ProfileContactType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ProfileContactType extends AbstractSimpleType
{
    const _AFTER_HOURS = 'AFTER_HOURS';
    const _ALIAS = 'ALIAS';
    const _BILLING_ACCOUNT = 'BILLING_ACCOUNT';
    const _BILLING_CONTACT = 'BILLING_CONTACT';
    const _CONTACT = 'CONTACT';
    const _OWNER = 'OWNER';
    const _PRIMARY_ACCOUNT = 'PRIMARY_ACCOUNT';
    const _PRIMARY_BILLING_ACCOUNT = 'PRIMARY_BILLING_ACCOUNT';
    const _PRIMARY_BILLING_CONTACT = 'PRIMARY_BILLING_CONTACT';
    const _PRIMARY_CONTACT_FOR_SHIPPING = 'PRIMARY_CONTACT_FOR_SHIPPING';
    const _PRIMARY_SHIPPER_CONTACT = 'PRIMARY_SHIPPER_CONTACT';
    const _RECIPIENT_SERVICES_CONTACT = 'RECIPIENT_SERVICES_CONTACT';
}
