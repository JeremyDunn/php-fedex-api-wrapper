<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Units of three-dimensional volume/cubic measure.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class VolumeUnits extends AbstractSimpleType
{
    const _CUBIC_FT = 'CUBIC_FT';
    const _CUBIC_M = 'CUBIC_M';
}
