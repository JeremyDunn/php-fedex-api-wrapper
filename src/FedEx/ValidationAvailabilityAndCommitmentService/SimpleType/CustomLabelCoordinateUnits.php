<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomLabelCoordinateUnits
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomLabelCoordinateUnits extends AbstractSimpleType
{
    const _MILS = 'MILS';
    const _PIXELS = 'PIXELS';
}
