<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * HazardousCommodityAttributeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityAttributeType extends AbstractSimpleType
{
    const _NOT_SUBJECT_TO_REGULATIONS = 'NOT_SUBJECT_TO_REGULATIONS';
    const _PLACARDED_VEHICLE_REQUIRED = 'PLACARDED_VEHICLE_REQUIRED';
}
