<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ServiceCategoryType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ServiceCategoryType extends AbstractSimpleType
{
    const _EXPRESS_FREIGHT = 'EXPRESS_FREIGHT';
    const _EXPRESS_PARCEL = 'EXPRESS_PARCEL';
    const _GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
}
