<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShippingActionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ShippingActionType extends AbstractSimpleType
{
    const _DELIVERIES = 'DELIVERIES';
    const _PICKUPS = 'PICKUPS';
}
