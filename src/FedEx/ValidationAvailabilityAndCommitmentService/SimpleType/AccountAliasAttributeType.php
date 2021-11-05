<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AccountAliasAttributeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class AccountAliasAttributeType extends AbstractSimpleType
{
    const _INCLUDE_ALIAS_ON_BOL = 'INCLUDE_ALIAS_ON_BOL';
    const _PRIMARY_ACCOUNT_ALIAS_IS_RESPONSIBLE_FOR_PAYMENT = 'PRIMARY_ACCOUNT_ALIAS_IS_RESPONSIBLE_FOR_PAYMENT';
}
