<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PackageLineItemStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class PackageLineItemStatusType extends AbstractSimpleType
{
    const _DELETED = 'DELETED';
    const _EXPIRED = 'EXPIRED';
    const _EXPIRING = 'EXPIRING';
}
