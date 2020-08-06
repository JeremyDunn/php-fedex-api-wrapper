<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies special or custom features to be applied to a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentProcessingOptionType extends AbstractSimpleType
{
    const _BYPASS_CLEARANCE_PROHIBITS = 'BYPASS_CLEARANCE_PROHIBITS';
    const _BYPASS_REGULATORY_VALIDATION = 'BYPASS_REGULATORY_VALIDATION';
    const _CONVENIENCE_MULTIPLE_PACKAGES = 'CONVENIENCE_MULTIPLE_PACKAGES';
    const _CUSTOM_TRANSIT_TIME = 'CUSTOM_TRANSIT_TIME';
    const _FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    const _IATA_CLASS_AND_AIRCRAFT_ONLY = 'IATA_CLASS_AND_AIRCRAFT_ONLY';
    const _NO_COMMITMENT_DATE_REQUESTED = 'NO_COMMITMENT_DATE_REQUESTED';
    const _PRE_EIG_PROCESSING = 'PRE_EIG_PROCESSING';
    const _PRE_ETD_ENHANCEMENTS = 'PRE_ETD_ENHANCEMENTS';
    const _PRE_FXF2020_HANDLING_UNIT_DETAILS = 'PRE_FXF2020_HANDLING_UNIT_DETAILS';
    const _PRE_MULTIPLIER_PROCESSING = 'PRE_MULTIPLIER_PROCESSING';
}
