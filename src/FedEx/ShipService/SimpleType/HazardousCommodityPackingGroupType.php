<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies DOT packing group for a hazardous commodity.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityPackingGroupType extends AbstractSimpleType
{
    const _DEFAULT = 'DEFAULT';
    const _I = 'I';
    const _II = 'II';
    const _III = 'III';
}
