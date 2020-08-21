<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CodReturnReferenceIndicatorType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CodReturnReferenceIndicatorType extends AbstractSimpleType
{
    const _INVOICE = 'INVOICE';
    const _PO = 'PO';
    const _REFERENCE = 'REFERENCE';
    const _TRACKING = 'TRACKING';
}
