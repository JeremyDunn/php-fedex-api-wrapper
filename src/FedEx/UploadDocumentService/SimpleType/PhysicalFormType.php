<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PhysicalFormType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class PhysicalFormType extends AbstractSimpleType
{
    const _GAS = 'GAS';
    const _LIQUID = 'LIQUID';
    const _SOLID = 'SOLID';
    const _SPECIAL = 'SPECIAL';
}
