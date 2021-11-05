<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerAccountStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerAccountStatusType extends AbstractSimpleType
{
    const _ACTIVE = 'ACTIVE';
    const _CASH = 'CASH';
    const _DEACTIVATED = 'DEACTIVATED';
}
