<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RecipientCustomsIdType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class RecipientCustomsIdType extends AbstractSimpleType
{
    const _COMPANY = 'COMPANY';
    const _INDIVIDUAL = 'INDIVIDUAL';
    const _PASSPORT = 'PASSPORT';
}
