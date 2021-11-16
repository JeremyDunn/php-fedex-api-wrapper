<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerAccountManagementStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerAccountManagementStatusType extends AbstractSimpleType
{
    const _ABUSED = 'ABUSED';
    const _ACCOUNT_EXCEPTION = 'ACCOUNT_EXCEPTION';
    const _DELETED_BY_REQUEST = 'DELETED_BY_REQUEST';
    const _DELETED_BY_SYSTEM = 'DELETED_BY_SYSTEM';
    const _MAILING_ADDRESS_SPECIFIED = 'MAILING_ADDRESS_SPECIFIED';
    const _MODIFIED = 'MODIFIED';
    const _NOT_MODIFIED = 'NOT_MODIFIED';
    const _REINSTATED = 'REINSTATED';
    const _UNABLE_TO_LOCATE_CUSTOMER = 'UNABLE_TO_LOCATE_CUSTOMER';
}
