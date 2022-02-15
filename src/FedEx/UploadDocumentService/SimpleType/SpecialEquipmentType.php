<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies types of special equipment used in loading/unloading Freight shipments
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class SpecialEquipmentType extends AbstractSimpleType
{
    const _FORK_LIFT = 'FORK_LIFT';
}
