<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies a particular reference identifier printed on a Freight bill of lading.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class PrintedReferenceType extends AbstractSimpleType
{
    const _BILL_OF_LADING = 'BILL_OF_LADING';
    const _CONSIGNEE_ID_NUMBER = 'CONSIGNEE_ID_NUMBER';
    const _INTERLINE_PRO_NUMBER = 'INTERLINE_PRO_NUMBER';
    const _PO_NUMBER = 'PO_NUMBER';
    const _SHIPPER_ID_NUMBER = 'SHIPPER_ID_NUMBER';
}
