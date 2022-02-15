<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRequestType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RateRequestType extends AbstractSimpleType
{
    const _CUSTOM = 'CUSTOM';
    const _INCENTIVE = 'INCENTIVE';
    const _LIST = 'LIST';
    const _NONE = 'NONE';
    const _PREFERRED = 'PREFERRED';
    const _RATED = 'RATED';
}
