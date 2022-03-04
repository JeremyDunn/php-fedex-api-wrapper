<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of FedEx distribution location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class FedExDistributionLocationType extends AbstractSimpleType
{
    const _CUSTOMER_SPECIFIED = 'CUSTOMER_SPECIFIED';
    const _FEDEX_EXPRESS_FREIGHT_RAMP = 'FEDEX_EXPRESS_FREIGHT_RAMP';
    const _FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    const _FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
}
