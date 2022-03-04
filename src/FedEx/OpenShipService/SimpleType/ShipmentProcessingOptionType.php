<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies special or custom features to be applied to a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ShipmentProcessingOptionType extends AbstractSimpleType
{
    const _FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    const _PACKAGE_LEVEL_COMMODITIES = 'PACKAGE_LEVEL_COMMODITIES';
    const _PRE_EIG_PROCESSING = 'PRE_EIG_PROCESSING';
    const _PRE_ETD_ENHANCEMENTS = 'PRE_ETD_ENHANCEMENTS';
    const _PRE_MULTIPLIER_PROCESSING = 'PRE_MULTIPLIER_PROCESSING';
}
