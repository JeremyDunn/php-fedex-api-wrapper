<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingIdType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackingIdType extends AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _FEDEX = 'FEDEX';
    const _GROUND = 'GROUND';
    const _USPS = 'USPS';
}
