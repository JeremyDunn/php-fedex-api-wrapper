<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * A regulation specific classification for a battery or cell.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class BatteryRegulatorySubType extends AbstractSimpleType
{
    const _IATA_SECTION_II = 'IATA_SECTION_II';
}
