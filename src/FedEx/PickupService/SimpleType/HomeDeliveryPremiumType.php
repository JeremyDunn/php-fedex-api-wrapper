<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * HomeDeliveryPremiumType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class HomeDeliveryPremiumType extends AbstractSimpleType
{
    const _APPOINTMENT = 'APPOINTMENT';
    const _DATE_CERTAIN = 'DATE_CERTAIN';
    const _EVENING = 'EVENING';
}
