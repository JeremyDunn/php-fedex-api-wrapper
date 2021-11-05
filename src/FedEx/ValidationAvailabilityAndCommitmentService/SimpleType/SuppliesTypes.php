<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SuppliesTypes
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SuppliesTypes extends AbstractSimpleType
{
    const _FEDEX_PAK = 'FEDEX_PAK';
    const _FEDEX_SECURITY_BOX = 'FEDEX_SECURITY_BOX';
    const _NO_SPECIAL_SUPPLIES = 'NO_SPECIAL_SUPPLIES';
}
