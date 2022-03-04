<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerAccountType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerAccountType extends AbstractSimpleType
{
    const _ACTIVATION_DESK = 'ACTIVATION_DESK';
    const _AIR_CARGO = 'AIR_CARGO';
    const _AIR_CARGO_BILLING = 'AIR_CARGO_BILLING';
    const _ANY = 'ANY';
    const _BILLING = 'BILLING';
    const _BROKER = 'BROKER';
    const _BUSINESS = 'BUSINESS';
    const _CATALOG_SHIPPER = 'CATALOG_SHIPPER';
    const _CITY_CENTER = 'CITY_CENTER';
    const _EMPLOYEE = 'EMPLOYEE';
    const _FREIGHT_FORWARDER = 'FREIGHT_FORWARDER';
    const _GLOBAL_SERVICE_PROVIDER = 'GLOBAL_SERVICE_PROVIDER';
    const _GOVERNMENT = 'GOVERNMENT';
    const _INDIVIDUAL = 'INDIVIDUAL';
    const _INTERLINE_CUSTOMER = 'INTERLINE_CUSTOMER';
    const _INTERNAL_CONTROL_ACCOUNT = 'INTERNAL_CONTROL_ACCOUNT';
    const _INTERNAL_TESTING_ACCOUNT = 'INTERNAL_TESTING_ACCOUNT';
    const _INVOICING = 'INVOICING';
    const _JOINT_VENTURE_PARTNER = 'JOINT_VENTURE_PARTNER';
    const _KINKOS_RETAIL_OPERATIONS = 'KINKOS_RETAIL_OPERATIONS';
    const _MIDDLEMAN = 'MIDDLEMAN';
    const _NATIONAL = 'NATIONAL';
    const _NON_INVOICING = 'NON_INVOICING';
    const _NON_PROFIT = 'NON_PROFIT';
    const _NON_REVENUE = 'NON_REVENUE';
    const _OTHER = 'OTHER';
    const _PACKAGE_CONSOLIDATOR = 'PACKAGE_CONSOLIDATOR';
    const _POLITICAL_CAMPAIGN = 'POLITICAL_CAMPAIGN';
    const _RESIDENTIAL_BUSINESS = 'RESIDENTIAL_BUSINESS';
    const _SHIPPER = 'SHIPPER';
}
