<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShippingDocumentEMailGroupingType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ShippingDocumentEMailGroupingType extends AbstractSimpleType
{
    const _BY_RECIPIENT = 'BY_RECIPIENT';
    const _NONE = 'NONE';
}
