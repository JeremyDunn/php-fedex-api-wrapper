<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PhysicalFormType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PhysicalFormType extends AbstractSimpleType
{
    const _GAS = 'GAS';
    const _LIQUID = 'LIQUID';
    const _SOLID = 'SOLID';
    const _SPECIAL = 'SPECIAL';
}
