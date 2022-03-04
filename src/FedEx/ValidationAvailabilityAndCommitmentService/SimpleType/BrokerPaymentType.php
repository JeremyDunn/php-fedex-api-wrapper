<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * BrokerPaymentType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class BrokerPaymentType extends AbstractSimpleType
{
    const _NON_PAYING_BROKER = 'NON_PAYING_BROKER';
    const _PAYING_BROKER = 'PAYING_BROKER';
}
