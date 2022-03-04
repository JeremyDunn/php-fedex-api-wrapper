<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightProfileAttributeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class FreightProfileAttributeType extends AbstractSimpleType
{
    const _AUDIT_OR_INVOICE_SERVICE = 'AUDIT_OR_INVOICE_SERVICE';
    const _BANK_DEBTOR_INVOICING = 'BANK_DEBTOR_INVOICING';
    const _BANK_INVOICING = 'BANK_INVOICING';
    const _BLIND_SHIPPER = 'BLIND_SHIPPER';
    const _DOCK = 'DOCK';
    const _EDI_210_INVOICING = 'EDI_210_INVOICING';
    const _FEDEX_CAN_CALL_FOR_MARKETING = 'FEDEX_CAN_CALL_FOR_MARKETING';
    const _FEDEX_FACILITY = 'FEDEX_FACILITY';
    const _FREIGHT_FORWARDING_FACILITY = 'FREIGHT_FORWARDING_FACILITY';
    const _GOVERNMENT = 'GOVERNMENT';
    const _NATIONAL_ACCOUNT = 'NATIONAL_ACCOUNT';
    const _OFF_BILL_DISCOUNT = 'OFF_BILL_DISCOUNT';
    const _THIRD_PARTY_LOGISTICS = 'THIRD_PARTY_LOGISTICS';
    const _WAREHOUSE = 'WAREHOUSE';
}
