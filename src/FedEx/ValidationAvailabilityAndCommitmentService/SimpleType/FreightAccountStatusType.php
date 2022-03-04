<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies account status unique to FedEx Freight.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class FreightAccountStatusType extends AbstractSimpleType
{
    const _ESTABLISHED = 'ESTABLISHED';
    const _SCHEDULED_FOR_DELETION = 'SCHEDULED_FOR_DELETION';
    const _UNESTABLISHED = 'UNESTABLISHED';
}
