<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * These values identify which package-level data values will be provided at the shipment-level.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ShipmentOnlyFieldsType extends AbstractSimpleType
{
    const _DIMENSIONS = 'DIMENSIONS';
    const _INSURED_VALUE = 'INSURED_VALUE';
    const _WEIGHT = 'WEIGHT';
}
