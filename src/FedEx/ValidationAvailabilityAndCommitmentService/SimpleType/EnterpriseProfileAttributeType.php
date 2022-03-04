<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EnterpriseProfileAttributeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class EnterpriseProfileAttributeType extends AbstractSimpleType
{
    const _CREDIT_CARD_ELIGIBLE = 'CREDIT_CARD_ELIGIBLE';
    const _DO_NOT_LINK_ACCOUNTS = 'DO_NOT_LINK_ACCOUNTS';
    const _EXPRESS_ELIGIBLE = 'EXPRESS_ELIGIBLE';
    const _FEDEX_CAN_CALL_FOR_MARKETING = 'FEDEX_CAN_CALL_FOR_MARKETING';
    const _FREIGHT_ELIGIBLE = 'FREIGHT_ELIGIBLE';
    const _TAX_EXEMPT = 'TAX_EXEMPT';
}
