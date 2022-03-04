<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the status of a package inspection performed by an agent.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class InspectionStatusType extends AbstractSimpleType
{
    const _CUSTOMER_REFUSED_INSPECTION = 'CUSTOMER_REFUSED_INSPECTION';
    const _INSPECTED = 'INSPECTED';
    const _NOT_INSPECTED = 'NOT_INSPECTED';
}
