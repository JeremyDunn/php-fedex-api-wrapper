<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the zone type that SmartPost classifies the customer account as. This controls how the SmartPost outbound shipments are rated, routed, tracked and reported.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SmartPostAccountZoneType extends AbstractSimpleType
{
    const _DISTRIBUTION_CENTER = 'DISTRIBUTION_CENTER';
    const _ORIGIN_PICKUP = 'ORIGIN_PICKUP';
    const _POSSESSION_SCAN = 'POSSESSION_SCAN';
    const _SHIPPER_ORIGIN_ADDRESS = 'SHIPPER_ORIGIN_ADDRESS';
    const _SMARTPOST_HUB = 'SMARTPOST_HUB';
}
