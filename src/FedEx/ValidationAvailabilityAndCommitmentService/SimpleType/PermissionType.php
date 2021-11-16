<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the permission.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PermissionType extends AbstractSimpleType
{
    const _ALLOWED = 'ALLOWED';
    const _DISALLOWED = 'DISALLOWED';
}
