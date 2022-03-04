<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ErrorLabelBehaviorType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ErrorLabelBehaviorType extends AbstractSimpleType
{
    const _PACKAGE_ERROR_LABELS = 'PACKAGE_ERROR_LABELS';
    const _STANDARD = 'STANDARD';
}
