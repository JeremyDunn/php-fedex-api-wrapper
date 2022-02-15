<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the permission.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PermissionType extends AbstractSimpleType
{
    const _ALLOWED = 'ALLOWED';
    const _DISALLOWED = 'DISALLOWED';
}
