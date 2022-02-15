<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * HomeDeliveryPremiumType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HomeDeliveryPremiumType extends AbstractSimpleType
{
    const _APPOINTMENT = 'APPOINTMENT';
    const _DATE_CERTAIN = 'DATE_CERTAIN';
    const _EVENING = 'EVENING';
}
