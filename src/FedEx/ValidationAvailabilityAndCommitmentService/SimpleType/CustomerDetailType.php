<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerDetailType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerDetailType extends AbstractSimpleType
{
    const _FULL = 'FULL';
    const _INTERACTIVE = 'INTERACTIVE';
    const _MINIMUM = 'MINIMUM';
}
