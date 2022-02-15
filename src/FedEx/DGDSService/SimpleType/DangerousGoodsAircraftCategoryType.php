<?php
namespace FedEx\DGDSService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DangerousGoodsAircraftCategoryType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 */
class DangerousGoodsAircraftCategoryType extends AbstractSimpleType
{
    const _CARGO_AIRCRAFT_ONLY = 'CARGO_AIRCRAFT_ONLY';
    const _PASSENGER_AND_CARGO_AIRCRAFT = 'PASSENGER_AND_CARGO_AIRCRAFT';
}
