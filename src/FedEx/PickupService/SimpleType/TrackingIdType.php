<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingIdType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TrackingIdType extends AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _FEDEX = 'FEDEX';
    const _FREIGHT = 'FREIGHT';
    const _GROUND = 'GROUND';
    const _INTERNAL = 'INTERNAL';
    const _UNKNOWN = 'UNKNOWN';
    const _USPS = 'USPS';
}
