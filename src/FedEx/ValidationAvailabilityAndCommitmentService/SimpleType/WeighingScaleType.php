<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies types of scales used in weighing Freight shipments
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class WeighingScaleType extends AbstractSimpleType
{
    const _FEDEX_SCALE = 'FEDEX_SCALE';
    const _PUBLIC_SCALE = 'PUBLIC_SCALE';
}
