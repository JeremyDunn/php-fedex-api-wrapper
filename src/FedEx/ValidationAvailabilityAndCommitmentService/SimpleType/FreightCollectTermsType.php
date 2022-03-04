<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightCollectTermsType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class FreightCollectTermsType extends AbstractSimpleType
{
    const _NON_RECOURSE_SHIPPER_SIGNED = 'NON_RECOURSE_SHIPPER_SIGNED';
    const _STANDARD = 'STANDARD';
}
