<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PackagePackedByType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class PackagePackedByType extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}
