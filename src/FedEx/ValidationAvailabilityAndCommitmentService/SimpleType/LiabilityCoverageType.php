<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LiabilityCoverageType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class LiabilityCoverageType extends AbstractSimpleType
{
    const _NEW = 'NEW';
    const _USED_OR_RECONDITIONED = 'USED_OR_RECONDITIONED';
}
