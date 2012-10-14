<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies a particular reference identifier printed on a Freight bill of lading.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PrintedReferenceType
    extends AbstractSimpleType
{
    const _BILL_OF_LADING = 'BILL_OF_LADING';
    const _CONSIGNEE_ID_NUMBER = 'CONSIGNEE_ID_NUMBER';
    const _SHIPPER_ID_NUMBER = 'SHIPPER_ID_NUMBER';
}