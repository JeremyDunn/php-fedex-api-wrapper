<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CommodityPurposeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CommodityPurposeType extends AbstractSimpleType
{
    const _BUSINESS = 'BUSINESS';
    const _CONSUMER = 'CONSUMER';
}
