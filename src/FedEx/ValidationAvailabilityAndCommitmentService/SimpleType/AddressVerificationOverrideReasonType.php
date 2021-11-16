<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the reason to override address verification.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class AddressVerificationOverrideReasonType extends AbstractSimpleType
{
    const _CUSTOMER_PREFERENCE = 'CUSTOMER_PREFERENCE';
    const _CUSTOMER_PROVIDED_PROOF = 'CUSTOMER_PROVIDED_PROOF';
    const _MANUAL_VALIDATION = 'MANUAL_VALIDATION';
}
