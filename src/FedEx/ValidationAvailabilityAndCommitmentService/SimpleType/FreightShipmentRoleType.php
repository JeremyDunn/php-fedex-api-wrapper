<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the role of the party submitting the transaction.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class FreightShipmentRoleType extends AbstractSimpleType
{
    const _CONSIGNEE = 'CONSIGNEE';
    const _SHIPPER = 'SHIPPER';
}
