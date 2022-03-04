<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackDelayType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackDelayType extends AbstractSimpleType
{
    const _CUSTOMS = 'CUSTOMS';
    const _GENERAL = 'GENERAL';
    const _LOCAL = 'LOCAL';
    const _OPERATIONAL = 'OPERATIONAL';
    const _WEATHER = 'WEATHER';
}
