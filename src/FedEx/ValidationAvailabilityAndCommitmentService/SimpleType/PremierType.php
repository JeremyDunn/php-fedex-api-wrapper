<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PremierType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PremierType extends AbstractSimpleType
{
    const _BRONZE_ACCOUNT = 'BRONZE_ACCOUNT';
    const _FEDEX_ONE_CALL_CUSTOMER = 'FEDEX_ONE_CALL_CUSTOMER';
    const _GOLD_ACCOUNT = 'GOLD_ACCOUNT';
    const _ON_SET = 'ON_SET';
    const _POST_SALES_SOLUTION = 'POST_SALES_SOLUTION';
    const _SILVER_ACCOUNT = 'SILVER_ACCOUNT';
    const _SPECIAL_CUSTOMER_ROUTING = 'SPECIAL_CUSTOMER_ROUTING';
}
