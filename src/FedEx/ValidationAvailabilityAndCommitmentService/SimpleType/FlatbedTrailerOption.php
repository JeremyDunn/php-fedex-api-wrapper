<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FlatbedTrailerOption
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class FlatbedTrailerOption extends AbstractSimpleType
{
    const _OVER_DIMENSION = 'OVER_DIMENSION';
    const _TARP = 'TARP';
}
