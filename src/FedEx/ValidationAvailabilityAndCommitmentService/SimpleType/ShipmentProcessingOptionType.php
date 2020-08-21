<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies special or custom features to be applied to a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ShipmentProcessingOptionType extends AbstractSimpleType
{
    const _ALLOW_PREVIOUS_SHIP_DATE = 'ALLOW_PREVIOUS_SHIP_DATE';
    const _BYPASS_CLEARANCE_PROHIBITS = 'BYPASS_CLEARANCE_PROHIBITS';
    const _CONVENIENCE_MULTIPLE_PACKAGES = 'CONVENIENCE_MULTIPLE_PACKAGES';
    const _CUSTOM_TRANSIT_TIME = 'CUSTOM_TRANSIT_TIME';
    const _FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    const _IATA_CLASS_AND_AIRCRAFT_ONLY = 'IATA_CLASS_AND_AIRCRAFT_ONLY';
    const _MANUAL_AIRBILL = 'MANUAL_AIRBILL';
    const _NO_COMMITMENT_DATE_REQUESTED = 'NO_COMMITMENT_DATE_REQUESTED';
    const _PACKAGE_LEVEL_COMMODITIES = 'PACKAGE_LEVEL_COMMODITIES';
    const _PRE_EIG_PROCESSING = 'PRE_EIG_PROCESSING';
    const _PRE_ETD_ENHANCEMENTS = 'PRE_ETD_ENHANCEMENTS';
    const _PRE_FXF2020_HANDLING_UNIT_DETAILS = 'PRE_FXF2020_HANDLING_UNIT_DETAILS';
    const _PRE_GPR = 'PRE_GPR';
    const _PRE_GRAPE2_SHIPMENT = 'PRE_GRAPE2_SHIPMENT';
    const _PRE_MULTIPLIER_PROCESSING = 'PRE_MULTIPLIER_PROCESSING';
    const _REQUEST_LEGACY_SMARTPOST_LABEL = 'REQUEST_LEGACY_SMARTPOST_LABEL';
    const _REQUIRE_PRE_EPIC_BARCODE = 'REQUIRE_PRE_EPIC_BARCODE';
}
