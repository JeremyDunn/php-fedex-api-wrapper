<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * HomeDeliveryPremiumType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HomeDeliveryPremiumType extends AbstractSimpleType
{
    const _APPOINTMENT = 'APPOINTMENT';
    const _DATE_CERTAIN = 'DATE_CERTAIN';
    const _EVENING = 'EVENING';
}
