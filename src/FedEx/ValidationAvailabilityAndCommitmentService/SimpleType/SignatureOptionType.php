<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SignatureOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SignatureOptionType extends AbstractSimpleType
{
    const _ADULT = 'ADULT';
    const _DIRECT = 'DIRECT';
    const _INDIRECT = 'INDIRECT';
    const _NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';
    const _SERVICE_DEFAULT = 'SERVICE_DEFAULT';
}
