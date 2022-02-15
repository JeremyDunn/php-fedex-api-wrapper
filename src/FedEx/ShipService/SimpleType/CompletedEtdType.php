<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CompletedEtdType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedEtdType extends AbstractSimpleType
{
    const _ELECTRONIC_DOCUMENTS_ONLY = 'ELECTRONIC_DOCUMENTS_ONLY';
    const _ELECTRONIC_DOCUMENTS_WITH_ORIGINALS = 'ELECTRONIC_DOCUMENTS_WITH_ORIGINALS';
}
