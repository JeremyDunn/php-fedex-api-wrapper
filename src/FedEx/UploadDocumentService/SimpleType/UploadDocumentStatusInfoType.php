<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Each of these values identifies a specific reason why a document or reference could not be uploaded or associated with a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentStatusInfoType
    extends AbstractSimpleType
{
    const _DOCUMENT_CONTENT_FAILED_VIRUS_CHECK = 'DOCUMENT_CONTENT_FAILED_VIRUS_CHECK';
    const _DOCUMENT_CONTENT_MISSING = 'DOCUMENT_CONTENT_MISSING';
    const _DOCUMENT_FILE_NAME_MISSING = 'DOCUMENT_FILE_NAME_MISSING';
    const _DOCUMENT_FORMAT_NOT_SUPPORTED = 'DOCUMENT_FORMAT_NOT_SUPPORTED';
    const _DOCUMENT_ID_INVALID = 'DOCUMENT_ID_INVALID';
    const _DOCUMENT_ID_MISSING = 'DOCUMENT_ID_MISSING';
    const _DOCUMENT_TYPE_INVALID = 'DOCUMENT_TYPE_INVALID';
    const _DOCUMENT_TYPE_MISSING = 'DOCUMENT_TYPE_MISSING';
    const _DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD = 'DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD';
    const _ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION = 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION';
    const _ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN = 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN';
    const _UNABLE_TO_PROCESS_DOCUMENT = 'UNABLE_TO_PROCESS_DOCUMENT';
    const _UPLOAD_NOT_ATTEMPTED = 'UPLOAD_NOT_ATTEMPTED';
}