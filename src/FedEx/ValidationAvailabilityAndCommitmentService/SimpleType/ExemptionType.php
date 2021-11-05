<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ExemptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ExemptionType extends AbstractSimpleType
{
    const _EXEMPT = 'EXEMPT';
    const _NOT_EXEMPT = 'NOT_EXEMPT';
}
