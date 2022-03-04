<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies different statuses.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class StatusType extends AbstractSimpleType
{
    const _ACTIVE = 'ACTIVE';
    const _EXPIRED = 'EXPIRED';
    const _EXPIRED_WITHIN_GRACE_PERIOD = 'EXPIRED_WITHIN_GRACE_PERIOD';
    const _PENDING_RENEWAL = 'PENDING_RENEWAL';
}
