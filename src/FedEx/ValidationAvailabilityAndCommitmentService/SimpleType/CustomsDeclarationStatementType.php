<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This indicates the different statements, declarations, acts, and certifications that may apply to a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomsDeclarationStatementType extends AbstractSimpleType
{
    const _USMCA_LOW_VALUE = 'USMCA_LOW_VALUE';
}
