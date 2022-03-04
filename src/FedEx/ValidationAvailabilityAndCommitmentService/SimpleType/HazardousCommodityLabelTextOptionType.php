<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how the commodity is to be labeled.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class HazardousCommodityLabelTextOptionType extends AbstractSimpleType
{
    const _APPEND = 'APPEND';
    const _OVERRIDE = 'OVERRIDE';
    const _STANDARD = 'STANDARD';
}
