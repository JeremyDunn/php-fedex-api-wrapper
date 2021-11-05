<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the options to be applied when creating the pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreatePickupRequestProcessingOptionType extends AbstractSimpleType
{
    const _ALLOW_RESTRICTIONS_WITH_EXCEPTIONS = 'ALLOW_RESTRICTIONS_WITH_EXCEPTIONS';
    const _INELIGIBLE_FOR_HOME_DELIVERY = 'INELIGIBLE_FOR_HOME_DELIVERY';
    const _ON_CALL_PICKUP = 'ON_CALL_PICKUP';
    const _PACKAGE_RETURN_PROGRAM = 'PACKAGE_RETURN_PROGRAM';
    const _PICKUP_FOR_RETURN = 'PICKUP_FOR_RETURN';
}
