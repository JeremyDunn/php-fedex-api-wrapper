<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the material composition of a battery or cell.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class BatteryMaterialType extends AbstractSimpleType
{
    const _LITHIUM_ION = 'LITHIUM_ION';
    const _LITHIUM_METAL = 'LITHIUM_METAL';
    const _UNKNOWN = 'UNKNOWN';
}
