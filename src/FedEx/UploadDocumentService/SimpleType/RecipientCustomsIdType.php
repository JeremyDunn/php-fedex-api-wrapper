<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RecipientCustomsIdType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class RecipientCustomsIdType extends AbstractSimpleType
{
    const _COMPANY = 'COMPANY';
    const _INDIVIDUAL = 'INDIVIDUAL';
    const _PASSPORT = 'PASSPORT';
}
