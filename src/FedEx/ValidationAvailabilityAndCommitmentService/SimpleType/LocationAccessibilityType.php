<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates how this can be accessed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class LocationAccessibilityType extends AbstractSimpleType
{
    const _INSIDE = 'INSIDE';
    const _OUTSIDE = 'OUTSIDE';
}
