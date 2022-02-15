<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the damage status of a package.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class DamageStatusType extends AbstractSimpleType
{
    const _DAMAGE_KNOWN = 'DAMAGE_KNOWN';
    const _NO_KNOWN_DAMAGE = 'NO_KNOWN_DAMAGE';
}
