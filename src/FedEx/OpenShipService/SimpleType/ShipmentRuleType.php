<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipmentRuleType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ShipmentRuleType extends AbstractSimpleType
{
    const _EXPORT = 'EXPORT';
    const _GENERAL = 'GENERAL';
    const _IMPORT = 'IMPORT';
}
