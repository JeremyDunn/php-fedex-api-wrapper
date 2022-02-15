<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies types of scales used in weighing Freight shipments
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class WeighingScaleType extends AbstractSimpleType
{
    const _FEDEX_SCALE = 'FEDEX_SCALE';
    const _PUBLIC_SCALE = 'PUBLIC_SCALE';
}
