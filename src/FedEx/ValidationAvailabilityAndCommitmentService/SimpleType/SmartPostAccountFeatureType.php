<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies features of SmartPost shipping which apply to a customer account per contract.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SmartPostAccountFeatureType extends AbstractSimpleType
{
    const _DELIVERY_CONFIRMATION_APPLIED = 'DELIVERY_CONFIRMATION_APPLIED';
    const _OUTBOUND_ALLOWED = 'OUTBOUND_ALLOWED';
    const _RETURNS_ALLOWED = 'RETURNS_ALLOWED';
}
