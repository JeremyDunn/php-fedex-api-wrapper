<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PackageLineItemStatusType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class PackageLineItemStatusType extends AbstractSimpleType
{
    const _DELETED = 'DELETED';
    const _EXPIRED = 'EXPIRED';
    const _EXPIRING = 'EXPIRING';
}
