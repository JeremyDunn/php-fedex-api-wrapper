<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PackageLineItemStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PackageLineItemStatusType extends AbstractSimpleType
{
    const _DELETED = 'DELETED';
    const _EXPIRED = 'EXPIRED';
    const _EXPIRING = 'EXPIRING';
}
