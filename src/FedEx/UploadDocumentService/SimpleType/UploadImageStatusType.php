<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UploadImageStatusType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadImageStatusType extends AbstractSimpleType
{
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
    const _SUCCESS = 'SUCCESS';
}
