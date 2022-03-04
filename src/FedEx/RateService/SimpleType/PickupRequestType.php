<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupRequestType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PickupRequestType extends AbstractSimpleType
{
    const _FUTURE_DAY = 'FUTURE_DAY';
    const _SAME_DAY = 'SAME_DAY';
}
