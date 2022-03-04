<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * BillingAccountAttributeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class BillingAccountAttributeType extends AbstractSimpleType
{
    const _CONSOLIDATE_INVOICES_INTO_PARENT_ACCOUNT = 'CONSOLIDATE_INVOICES_INTO_PARENT_ACCOUNT';
}
