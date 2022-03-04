<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackSubDelayType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackSubDelayType extends AbstractSimpleType
{
    const _AIRPORT_CLOSED = 'AIRPORT_CLOSED';
    const _AIR_TRAFFIC_CONTROL = 'AIR_TRAFFIC_CONTROL';
    const _CIVIL_UNREST = 'CIVIL_UNREST';
    const _EARTHQUAKE = 'EARTHQUAKE';
    const _FLOOD = 'FLOOD';
    const _FOG = 'FOG';
    const _FOREST_FIRE = 'FOREST_FIRE';
    const _HIGH_WINDS = 'HIGH_WINDS';
    const _HURRICANE = 'HURRICANE';
    const _ICE = 'ICE';
    const _INTERNATIONAL_STRIKE = 'INTERNATIONAL_STRIKE';
    const _MUDSLIDE = 'MUDSLIDE';
    const _SNOW = 'SNOW';
    const _STATE_OF_EMERGENCY = 'STATE_OF_EMERGENCY';
    const _TEMPORARY_LOCAL_DISRUPTION = 'TEMPORARY_LOCAL_DISRUPTION';
    const _THUNDERSTORM = 'THUNDERSTORM';
    const _TORNADO = 'TORNADO';
    const _TYPHOON = 'TYPHOON';
    const _VOLCANO = 'VOLCANO';
}
