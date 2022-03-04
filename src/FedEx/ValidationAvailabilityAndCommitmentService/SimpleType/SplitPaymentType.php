<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies an aspect of a shipment that may be paid separately.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SplitPaymentType extends AbstractSimpleType
{
    const _APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    const _PIECE_COUNT_VERIFICATION = 'PIECE_COUNT_VERIFICATION';
}
