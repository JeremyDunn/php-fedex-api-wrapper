<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the damage status of a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class DamageStatusType extends AbstractSimpleType
{
    const _DAMAGE_KNOWN = 'DAMAGE_KNOWN';
    const _NO_KNOWN_DAMAGE = 'NO_KNOWN_DAMAGE';
}
