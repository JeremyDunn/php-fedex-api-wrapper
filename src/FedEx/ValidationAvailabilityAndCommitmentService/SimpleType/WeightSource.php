<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * WeightSource
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class WeightSource extends AbstractSimpleType
{
    const _MANUAL = 'MANUAL';
    const _SCALE = 'SCALE';
}
