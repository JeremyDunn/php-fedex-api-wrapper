<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DistributionClearanceType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class DistributionClearanceType extends AbstractSimpleType
{
    const _DESTINATION_COUNTRY_CLEARANCE = 'DESTINATION_COUNTRY_CLEARANCE';
    const _SINGLE_POINT_OF_CLEARANCE = 'SINGLE_POINT_OF_CLEARANCE';
}
