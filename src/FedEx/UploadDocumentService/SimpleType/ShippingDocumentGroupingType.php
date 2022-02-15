<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how to organize all shipping documents of the same type.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ShippingDocumentGroupingType extends AbstractSimpleType
{
    const _CONSOLIDATED_BY_DOCUMENT_TYPE = 'CONSOLIDATED_BY_DOCUMENT_TYPE';
    const _CONSOLIDATED_BY_IMAGE_TYPE = 'CONSOLIDATED_BY_IMAGE_TYPE';
    const _INDIVIDUAL = 'INDIVIDUAL';
}
