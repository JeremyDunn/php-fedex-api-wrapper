<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the usage type of the data item under consideration.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class UsageType extends AbstractSimpleType
{
    const _PRIMARY = 'PRIMARY';
    const _SECONDARY = 'SECONDARY';
}
