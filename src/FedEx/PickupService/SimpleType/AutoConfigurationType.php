<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AutoConfigurationType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class AutoConfigurationType extends AbstractSimpleType
{
    const _ENTERPRISE = 'ENTERPRISE';
    const _SHIPPING_SERVICE_PROVIDER = 'SHIPPING_SERVICE_PROVIDER';
    const _SOFTWARE_ONLY = 'SOFTWARE_ONLY';
    const _TRADITIONAL = 'TRADITIONAL';
}
