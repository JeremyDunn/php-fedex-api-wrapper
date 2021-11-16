<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AccountAliasType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class AccountAliasType extends AbstractSimpleType
{
    const _BILLING = 'BILLING';
    const _ENTERPRISE = 'ENTERPRISE';
    const _PRIMARY_ACCOUNT = 'PRIMARY_ACCOUNT';
}
