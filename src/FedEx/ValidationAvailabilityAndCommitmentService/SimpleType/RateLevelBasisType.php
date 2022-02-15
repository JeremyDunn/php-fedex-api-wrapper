<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateLevelBasisType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class RateLevelBasisType extends AbstractSimpleType
{
    const _BUNDLED_RATE = 'BUNDLED_RATE';
    const _INDIVIDUAL_PACKAGE_RATE = 'INDIVIDUAL_PACKAGE_RATE';
}
