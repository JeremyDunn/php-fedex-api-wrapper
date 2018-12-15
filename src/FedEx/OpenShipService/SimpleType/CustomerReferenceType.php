<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerReferenceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class CustomerReferenceType extends AbstractSimpleType
{
    const _CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    const _DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
    const _INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
    const _INVOICE_NUMBER = 'INVOICE_NUMBER';
    const _P_O_NUMBER = 'P_O_NUMBER';
    const _RMA_ASSOCIATION = 'RMA_ASSOCIATION';
    const _SHIPMENT_INTEGRITY = 'SHIPMENT_INTEGRITY';
}
