<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LabelPrintingOrientationType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class LabelPrintingOrientationType extends AbstractSimpleType
{
    const _BOTTOM_EDGE_OF_TEXT_FIRST = 'BOTTOM_EDGE_OF_TEXT_FIRST';
    const _TOP_EDGE_OF_TEXT_FIRST = 'TOP_EDGE_OF_TEXT_FIRST';
}
