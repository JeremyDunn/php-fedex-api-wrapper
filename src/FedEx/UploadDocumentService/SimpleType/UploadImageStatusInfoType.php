<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UploadImageStatusInfoType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadImageStatusInfoType extends AbstractSimpleType
{
    const _IMAGE_EXCEEDS_MAX_RESOLUTION = 'IMAGE_EXCEEDS_MAX_RESOLUTION';
    const _IMAGE_EXCEEDS_MAX_SIZE = 'IMAGE_EXCEEDS_MAX_SIZE';
    const _IMAGE_FAILED_VIRUS_CHECK = 'IMAGE_FAILED_VIRUS_CHECK';
    const _IMAGE_ID_INVALID = 'IMAGE_ID_INVALID';
    const _IMAGE_ID_MISSING = 'IMAGE_ID_MISSING';
    const _IMAGE_MISSING = 'IMAGE_MISSING';
    const _IMAGE_TYPE_INVALID = 'IMAGE_TYPE_INVALID';
    const _IMAGE_TYPE_MISSING = 'IMAGE_TYPE_MISSING';
}
