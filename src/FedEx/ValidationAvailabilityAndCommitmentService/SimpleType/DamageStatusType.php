<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the damage status of a package.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class DamageStatusType extends AbstractSimpleType
{
    const _DAMAGE_KNOWN = 'DAMAGE_KNOWN';
    const _NO_KNOWN_DAMAGE = 'NO_KNOWN_DAMAGE';
}
