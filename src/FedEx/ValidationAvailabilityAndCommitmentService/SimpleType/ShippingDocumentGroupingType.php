<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how to organize all shipping documents of the same type.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ShippingDocumentGroupingType extends AbstractSimpleType
{
    const _CONSOLIDATED_BY_DOCUMENT_TYPE = 'CONSOLIDATED_BY_DOCUMENT_TYPE';
    const _CONSOLIDATED_BY_IMAGE_TYPE = 'CONSOLIDATED_BY_IMAGE_TYPE';
    const _INDIVIDUAL = 'INDIVIDUAL';
}
