<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies DOT packing group for a hazardous commodity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class HazardousCommodityPackingGroupType extends AbstractSimpleType
{
    const _DEFAULT = 'DEFAULT';
    const _I = 'I';
    const _II = 'II';
    const _III = 'III';
}
