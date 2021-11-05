<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NationalAccountType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class NationalAccountType extends AbstractSimpleType
{
    const _GRAND_NATIONAL = 'GRAND_NATIONAL';
    const _NATIONAL = 'NATIONAL';
}
