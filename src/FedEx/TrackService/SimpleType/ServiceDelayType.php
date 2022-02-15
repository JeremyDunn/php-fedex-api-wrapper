<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ServiceDelayType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ServiceDelayType extends AbstractSimpleType
{
    const _DELAYED = 'DELAYED';
    const _EARLY = 'EARLY';
    const _ON_TIME = 'ON_TIME';
}
