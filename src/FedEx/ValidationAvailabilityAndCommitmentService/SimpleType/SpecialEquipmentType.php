<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies types of special equipment used in loading/unloading Freight shipments
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SpecialEquipmentType extends AbstractSimpleType
{
    const _FORK_LIFT = 'FORK_LIFT';
}
