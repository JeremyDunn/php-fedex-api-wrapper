<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UploadDocumentStatusType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentStatusType extends AbstractSimpleType
{
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
    const _SUCCESS = 'SUCCESS';
}
