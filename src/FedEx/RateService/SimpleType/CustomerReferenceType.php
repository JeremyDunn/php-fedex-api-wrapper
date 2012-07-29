<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerReferenceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerReferenceType
    extends AbstractSimpleType
{
    const _BILL_OF_LADING = 'BILL_OF_LADING';
    const _CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    const _DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
    const _ELECTRONIC_PRODUCT_CODE = 'ELECTRONIC_PRODUCT_CODE';
    const _INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
    const _INVOICE_NUMBER = 'INVOICE_NUMBER';
    const _PACKING_SLIP_NUMBER = 'PACKING_SLIP_NUMBER';
    const _P_O_NUMBER = 'P_O_NUMBER';
    const _SHIPMENT_INTEGRITY = 'SHIPMENT_INTEGRITY';
    const _STORE_NUMBER = 'STORE_NUMBER';
}