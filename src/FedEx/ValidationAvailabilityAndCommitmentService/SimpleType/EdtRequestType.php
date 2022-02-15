<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the types of Estimated Duties and Taxes to be included in a rate quotation for an international shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class EdtRequestType extends AbstractSimpleType
{
    const _ALL = 'ALL';
    const _NONE = 'NONE';
}
