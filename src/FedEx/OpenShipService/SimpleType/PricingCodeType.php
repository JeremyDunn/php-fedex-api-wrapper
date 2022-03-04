<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PricingCodeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class PricingCodeType extends AbstractSimpleType
{
    const _ACTUAL = 'ACTUAL';
    const _ALTERNATE = 'ALTERNATE';
    const _BASE = 'BASE';
    const _HUNDREDWEIGHT = 'HUNDREDWEIGHT';
    const _HUNDREDWEIGHT_ALTERNATE = 'HUNDREDWEIGHT_ALTERNATE';
    const _INTERNATIONAL_DISTRIBUTION = 'INTERNATIONAL_DISTRIBUTION';
    const _INTERNATIONAL_ECONOMY_SERVICE = 'INTERNATIONAL_ECONOMY_SERVICE';
    const _LTL_FREIGHT = 'LTL_FREIGHT';
    const _PACKAGE = 'PACKAGE';
    const _SHIPMENT = 'SHIPMENT';
    const _SHIPMENT_FIVE_POUND_OPTIONAL = 'SHIPMENT_FIVE_POUND_OPTIONAL';
    const _SHIPMENT_OPTIONAL = 'SHIPMENT_OPTIONAL';
    const _SPECIAL = 'SPECIAL';
}
