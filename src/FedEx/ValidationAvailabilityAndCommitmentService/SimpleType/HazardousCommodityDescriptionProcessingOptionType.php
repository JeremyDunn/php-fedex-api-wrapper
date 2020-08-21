<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies any special processing to be applied to the dangerous goods commodity description validation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class HazardousCommodityDescriptionProcessingOptionType extends AbstractSimpleType
{
    const _INCLUDE_SPECIAL_PROVISIONS = 'INCLUDE_SPECIAL_PROVISIONS';
}
