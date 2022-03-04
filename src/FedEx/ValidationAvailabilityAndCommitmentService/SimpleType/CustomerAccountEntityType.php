<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerAccountEntityType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerAccountEntityType extends AbstractSimpleType
{
    const _BUSINESS = 'BUSINESS';
    const _INDIVIDUAL = 'INDIVIDUAL';
}
