<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EnterprisePermissionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class EnterprisePermissionType extends AbstractSimpleType
{
    const _ALLOWED = 'ALLOWED';
    const _ALLOWED_BY_EXCEPTION = 'ALLOWED_BY_EXCEPTION';
    const _DISALLOWED = 'DISALLOWED';
}
