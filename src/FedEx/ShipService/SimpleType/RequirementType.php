<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RequirementType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RequirementType extends AbstractSimpleType
{
    const _OPTIONAL = 'OPTIONAL';
    const _PROHIBITED = 'PROHIBITED';
    const _REQUIRED = 'REQUIRED';
}
