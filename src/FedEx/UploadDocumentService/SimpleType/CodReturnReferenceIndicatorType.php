<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CodReturnReferenceIndicatorType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CodReturnReferenceIndicatorType extends AbstractSimpleType
{
    const _INVOICE = 'INVOICE';
    const _PO = 'PO';
    const _REFERENCE = 'REFERENCE';
    const _TRACKING = 'TRACKING';
}
