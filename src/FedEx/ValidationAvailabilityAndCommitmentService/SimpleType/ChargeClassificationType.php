<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ChargeClassificationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ChargeClassificationType extends AbstractSimpleType
{
    const _DUTIES_AND_TAXES = 'DUTIES_AND_TAXES';
    const _TRANSPORTATION = 'TRANSPORTATION';
}
