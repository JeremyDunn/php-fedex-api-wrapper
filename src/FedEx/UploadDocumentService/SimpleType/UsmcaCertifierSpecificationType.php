<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UsmcaCertifierSpecificationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UsmcaCertifierSpecificationType extends AbstractSimpleType
{
    const _EXPORTER = 'EXPORTER';
    const _IMPORTER = 'IMPORTER';
    const _PRODUCER = 'PRODUCER';
}
