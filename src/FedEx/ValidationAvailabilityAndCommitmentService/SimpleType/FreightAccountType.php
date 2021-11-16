<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This attribute of a Freight account controls how the account relates to role in shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class FreightAccountType extends AbstractSimpleType
{
    const _BILL_TO = 'BILL_TO';
    const _CORPORATE_NATIONAL = 'CORPORATE_NATIONAL';
    const _INTERLINE = 'INTERLINE';
    const _SHIPPER = 'SHIPPER';
}
