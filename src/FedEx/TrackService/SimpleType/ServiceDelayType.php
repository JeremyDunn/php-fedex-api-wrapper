<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ServiceDelayType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ServiceDelayType extends AbstractSimpleType
{
    const _DELAYED = 'DELAYED';
    const _EARLY = 'EARLY';
    const _ON_TIME = 'ON_TIME';
}
