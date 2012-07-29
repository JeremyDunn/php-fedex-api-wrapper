<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EdtTaxType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EdtTaxType
    extends AbstractSimpleType
{
    const _ADDITIONAL_TAXES = 'ADDITIONAL_TAXES';
    const _CONSULAR_INVOICE_FEE = 'CONSULAR_INVOICE_FEE';
    const _CUSTOMS_SURCHARGES = 'CUSTOMS_SURCHARGES';
    const _DUTY = 'DUTY';
    const _EXCISE_TAX = 'EXCISE_TAX';
    const _FOREIGN_EXCHANGE_TAX = 'FOREIGN_EXCHANGE_TAX';
    const _GENERAL_SALES_TAX = 'GENERAL_SALES_TAX';
    const _IMPORT_LICENSE_FEE = 'IMPORT_LICENSE_FEE';
    const _INTERNAL_ADDITIONAL_TAXES = 'INTERNAL_ADDITIONAL_TAXES';
    const _INTERNAL_SENSITIVE_PRODUCTS_TAX = 'INTERNAL_SENSITIVE_PRODUCTS_TAX';
    const _OTHER = 'OTHER';
    const _SENSITIVE_PRODUCTS_TAX = 'SENSITIVE_PRODUCTS_TAX';
    const _STAMP_TAX = 'STAMP_TAX';
    const _STATISTICAL_TAX = 'STATISTICAL_TAX';
    const _TRANSPORT_FACILITIES_TAX = 'TRANSPORT_FACILITIES_TAX';
}