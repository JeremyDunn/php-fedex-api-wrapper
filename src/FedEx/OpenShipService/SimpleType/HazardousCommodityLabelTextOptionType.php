<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how the commodity is to be labeled.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class HazardousCommodityLabelTextOptionType extends AbstractSimpleType
{
    const _APPEND = 'APPEND';
    const _OVERRIDE = 'OVERRIDE';
    const _STANDARD = 'STANDARD';
}
