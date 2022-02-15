<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EnterprisePermissionType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EnterprisePermissionType extends AbstractSimpleType
{
    const _ALLOWED = 'ALLOWED';
    const _ALLOWED_BY_EXCEPTION = 'ALLOWED_BY_EXCEPTION';
    const _DISALLOWED = 'DISALLOWED';
}
