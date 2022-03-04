<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * HazardousCommodityAttributeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class HazardousCommodityAttributeType extends AbstractSimpleType
{
    const _NOT_SUBJECT_TO_REGULATIONS = 'NOT_SUBJECT_TO_REGULATIONS';
    const _PLACARDED_VEHICLE_REQUIRED = 'PLACARDED_VEHICLE_REQUIRED';
}
