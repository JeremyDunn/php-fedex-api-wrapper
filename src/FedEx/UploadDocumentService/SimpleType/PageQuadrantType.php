<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PageQuadrantType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class PageQuadrantType extends AbstractSimpleType
{
    const _BOTTOM_LEFT = 'BOTTOM_LEFT';
    const _BOTTOM_RIGHT = 'BOTTOM_RIGHT';
    const _TOP_LEFT = 'TOP_LEFT';
    const _TOP_RIGHT = 'TOP_RIGHT';
}
