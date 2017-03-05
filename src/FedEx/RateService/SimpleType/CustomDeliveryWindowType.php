<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomDeliveryWindowType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomDeliveryWindowType extends AbstractSimpleType
{
    const _AFTER = 'AFTER';
    const _BEFORE = 'BEFORE';
    const _BETWEEN = 'BETWEEN';
    const _ON = 'ON';
}
